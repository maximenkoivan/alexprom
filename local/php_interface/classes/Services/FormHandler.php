<?php

namespace classes\Services;


use Bitrix\Main\Mail\Event;
use CFile;
use CIBlockElement;
use CModule;
use Bitrix\Main\Context;
use classes\Exceptions\FeedbackException;


class FormHandler
{
    private $modelList = [
        'feedback' => 'classes\Models\Alpinism\Feedback\Feedback',
        'callback' => 'classes\Models\Light\Feedback\Callback',
        'order' => 'classes\Models\Light\Feedback\Order',
        'callbackMsk' => 'classes\Models\LightMsk\Feedback\Callback',
        'orderMsk' => 'classes\Models\LightMsk\Feedback\Order',
        'callbackSnow' => 'classes\Models\Snow\Feedback\CallbackSnow',
        'discountSnow' => 'classes\Models\Snow\Feedback\DiscountSnow',
        'orderSnow' => 'classes\Models\Snow\Feedback\OrderSnow',
        'presentationSnow' => 'classes\Models\Snow\Feedback\PresentationSnow',
        'applicationSnow' => 'classes\Models\Snow\Feedback\ApplicationSnow',
        'callbackRoofs' => 'classes\Models\Roofs\Feedback\Callback',
        'quizRoofs' => 'classes\Models\Roofs\Feedback\Quiz',
        'orderRoofs' => 'classes\Models\Roofs\Feedback\Order',
        'calculatorRoofs' => 'classes\Models\Roofs\Feedback\Calculator',
        'callbackGermet' => 'classes\Models\Germet\Feedback\Callback',
        'quizGermet' => 'classes\Models\Germet\Feedback\Quiz',
        'orderGermet' => 'classes\Models\Germet\Feedback\Order',
        'calculatorGermet' => 'classes\Models\Germet\Feedback\Calculator',
        'callbackAlpservice' => 'classes\Models\Alpservice\Feedback\Callback',
        'quizAlpservice' => 'classes\Models\Alpservice\Feedback\Quiz',
        'orderAlpservice' => 'classes\Models\Alpservice\Feedback\Order',
        'calculatorAlpservice' => 'classes\Models\Alpservice\Feedback\Calculator',
    ];

    private mixed $model;

    private array $fields = [];

    private array $files = [];

    private array $filesDelete = [];

    private array $errors = [];

    private CIBlockElement $element;

    private $request;


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
    public function run(): array
    {
        if (empty($this->model)) {
            throw new FeedbackException('Нет такой модели');
        }
        $this->prepare();
        if (empty($this->errors)) {
            $this->add();
            $this->deleteTempFiles();
        }
        return $this->errors;
    }

    /**
     * Подготавливает данные
     * @return void
     */
    private function prepare(): void
    {
        foreach ($this->fields as $name => $field) {
            if ($field['type'] == 'file') {
                $this->prepareFiles($name);
                $this->fields[$name]['value'] = $this->files;
                $this->files = [];
                $this->validate($name);
                continue;
            }
            $this->fields[$name]['value'] = $this->request->get($name) ?: $this->fields[$name]['value'];
            $this->validate($name);
        }
    }

    private function prepareFiles($name)
    {
        $this->makeFileArray($name);
    }

    private function makeFileArray($name)
    {
        $files = [];
        $values = $this->request->get($name);
        if (!empty($values)) {
            $n = count($this->filesDelete);
            if (is_array($values)) {
                foreach ($values as $key => $file) {
                    $files['n' . $n] = $this->saveFile($file);
                    $n++;
                }
            } else {
                $files['n' . $n] = $this->saveFile($values);
            }
        }
        $this->files = $files;
        $this->filesDelete += $files;
    }

    private function saveFile($fileBase64): bool|array|null
    {
        // так как иногда с фронта прихоят файлы то с именем в base64, то без имени, ведем себя по разному

        $arr = explode(';data:', $fileBase64);

        if (!empty($arr[1])) {
            if (!empty($arr[0])) {
                $name = $arr[0];
            } else {
                $name = 'file_' . uniqid() . rand(11, 99);
            }

            $fileBase64 = 'data:' . $arr[1];
            $ext = $this->getFileExtention($fileBase64);
        } else {
            $name = 'file_' . uniqid() . rand(11, 99);
            $ext = $this->getFileExtention($arr[0]);
            $name .= '.' . $ext;
        }

        $outputFile = $_SERVER['DOCUMENT_ROOT'] . '/upload/tmp/' . $name;
        $f = file_put_contents($outputFile, file_get_contents($fileBase64));

        return CFile::MakeFileArray($outputFile);
    }

    private function getFileExtention($fileBase64)
    {
        // пример входящего файла в base64:
        // data:application/pdf;base64,тутсамфайл

        $fileMimeType = null;
        $fileMimeTypeArr = explode(';base64,', $fileBase64);
        if (!empty($fileMimeTypeArr[0])) {
            $fileMimeType = explode('data:', $fileMimeTypeArr[0]);
        }

        if (!empty($fileMimeType[1])) {
            return $this->getExtByMimeType($fileMimeType[1]);
        }
        return false;
    }

    /**
     * Получаем расширение по mimetype
     *
     * @param $mimeType
     * @return false|string
     */
    private function getExtByMimeType($mimeType)
    {
        return \classes\Helpers\FilesHelper::getExtensionByMime($mimeType);
    }

    /**
     * Подчищаем за собой, удаляя файлы
     * @return void
     */
    private function deleteTempFiles(): void
    {
        foreach ($this->filesDelete as $file) {
            unlink($file['tmp_name']);
        }
    }

    /**
     * Валидирует данные
     * @param $name
     * @return void
     */
    public function validate($name): void
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
    private function add(): void
    {
        $storeFields = $this->model->getMainFieldsForSave();
        $storeFields['PROPERTY_VALUES'] = $this->model->getPropertiesForSave();
        $elementId = $this->element->Add($storeFields, false, false, false);
        if (!empty($elementId)) $this->sendMail($elementId);
    }

    /**
     * Отправляет Email
     * @return void
     */
    private function sendMail($elementId): void
    {
        if (!$this->model->getEventName()) return;
        $fields = $this->model->getMailFields($elementId);
        if (empty($fields)) return;
        Event::send($fields);
    }
}