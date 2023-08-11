<?php

namespace classes\Models\Light\Feedback;

use classes\Base\Iblock;

class Callback extends Iblock
{
    protected const TYPE_IBLOCK_CODE = 'LIGHT';

    protected const IBLOCK_CODE = 'FEEDBACK';

    private const EVENT_NAME = 'CALLBACK_FORM';

    private array $formFields = [
        'name' => [
            'ru' => 'Имя',
            'en' => 'Name',
            'rules' => 'required|min:3',
            'value' => '',
            'property' => false,
            'store' => 'NAME'
        ],
        'phone' => [
            'ru' => 'Номер телефона',
            'en' => 'Phone Number',
            'rules' => 'required|phone',
            'value' => '',
            'property' => true,
            'store' => 'EMAIL'
        ],
//        'g-recaptcha-response' => [
//            'ru' => 'recaptcha',
//            'en' => 'recaptcha',
//            'rules' => 'recaptcha',
//            'value' => ''
//        ],
    ];

    /**
     * Возвращает массив полей
     * с их свойствами и правилами валидации
     * @return array
     */
    public function getFormFields(): array
    {
        return $this->formFields;
    }

    /**
     * Возвращает название почтового события
     * @return string
     */
    public function getEventName(): string
    {
        return self::EVENT_NAME;
    }

    /**
     * Получает поля для почтового отправления и формирует
     * массив для создания почтового события
     * @return array
     */
    public function getMailFields(): array
    {
        $fields = $this->getFieldsForMail();

        return [
            "EVENT_NAME" => self::EVENT_NAME,
            "LID" => SITE_ID,
            "C_FIELDS" => $fields,
        ];
    }

    /**
     * формирует массив данных для почтового шаблона
     * @return array
     */
    public function getFieldsForMail(): array
    {
        return [
            'AUTHOR' => $this->formFields['name']['value'],
            'AUTHOR_PHONE' => $this->formFields['phone']['value'] ?: 'не указан',
        ];
    }

    /**
     * Формирует массив основных полей
     * для записи
     * @return void
     */
    public function getMainFieldsForSave()
    {

    }

    /**
     * Формирует массив свойств для записи
     * @return void
     */
    public function getPropertiesForSave()
    {

    }
}