<?php

namespace classes\Services;


use Bitrix\Main\Mail\Event;
use CIBlockElement;
use CModule;
use Bitrix\Main\Context;
use classes\Exceptions\FeedbackException;


class FormHandler
{
    private $modelList = [
        'callback' => 'classes\Models\Light\Feedback\Callback',
        'order' => 'classes\Models\Light\Feedback\Order',
        'discount' => 'classes\Models\Snow\Feedback\Discount',
    ];

    private mixed $model;

    private array $fields = [];

    private array $errors = [];

    private CIBlockElement $element;

    private \Bitrix\Main\HttpRequest|\Bitrix\Main\Request $request;


    public function __construct($modelName)
    {
        CModule::IncludeModule("iblock");
        $this->element = new CIBlockElement();
        $this->request = Context::getCurrent()->getRequest();

        if (key_exists($modelName, $this->modelList)) {
            $this->model = new $this->modelList[$modelName];
            $this->fields = $this->model->getFormFields();
        } else {
            throw new FeedbackException('Нет такого класса или необходимых методов');
        }

        return $this->errors;
    }

    /**
     * Запускает обработчик форм
     * @return array
     * @throws FeedbackException
     */
    public function run()
    {
        if (empty($this->model)) {
            throw new FeedbackException('Нет такой модели');
        }
        $this->prepare();
        if (empty($this->errors)) {
            $this->add();
        }
        return $this->errors;
    }

    /**
     * Подготавливает данные
     * @return void
     */
    private function prepare()
    {
        foreach ($this->fields as $name => $field) {
            $this->fields[$name]['value'] = $this->request->get($name);
            $this->validate($name);
        }
    }

    /**
     * Валидирует данные
     * @param $name
     * @return void
     */
    public function validate($name)
    {
        $validator = new Validator($this->fields[$name]);
        $result = $validator->run();
        if (!empty($result)) {
            $this->errors[$name] = $result;
        } else {
            $this->model->setFieldValue($name, $this->fields[$name]['value']);
        }
    }

    /**
     * Добавляет новый элемент
     * @return void
     */
    private function add()
    {
        $storeFields = $this->model->getMainFieldsForSave();
        $storeFields['PROPERTY_VALUES'] = $this->model->getPropertiesForSave();
        $elementId = $this->element->Add($storeFields, false, false, false);
        if (!empty($elementId)) $this->sendMail();
    }

    /**
     * Отправляет Email
     * @return void
     */
    private function sendMail()
    {
        if (!$this->model->getEventName()) return;
        $fields = $this->model->getMailFields();
        if (empty($fields)) return;
        Event::send($fields);
    }
}