<?php

namespace classes\Models\Light\Feedback;

use classes\Base\Iblock;

class Order extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'light';

    protected const IBLOCK_CODE = 'order';

    private const EVENT_NAME = 'ORDER_FORM';

    private array $formFields = [
        'name' => [
            'ru' => 'Ваше имя',
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
            'store' => 'PHONE'
        ],
        'place' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'PLACE'
        ],
        'type' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'TYPE'
        ],
        'where' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'WHERE'
        ],
        'style' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'STYLE'
        ],
        'size' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'SIZE'
        ],
        'date' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'DATE'
        ],
        'comment' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'COMMENT'
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

    public function setFieldValue(string $fieldName = '', $value = '')
    {
        $this->formFields[$fieldName]['value'] = $value;
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
            'PLACE' => $this->formFields['place']['value'],
            'TYPE' => $this->formFields['type']['value'],
            'WHERE' => $this->formFields['where']['value'],
            'STYLE' => $this->formFields['style']['value'],
            'SIZE' => $this->formFields['size']['value'],
            'DATE' => $this->formFields['date']['value'],
            'COMMENT' => $this->formFields['comment']['value'],
        ];
    }

    /**
     * Формирует массив основных полей
     * для записи
     * @return array
     */
    public function getMainFieldsForSave(): array
    {
        $formFields = $this->getFormFields();

        $result['IBLOCK_ID'] = $this->getIblockId();

        foreach ($formFields as $field) {
            if(!$field['property'] && !empty($field['store'])) {
                $result[$field['store']] = $field['value'];
            }
        }

        if(!empty($additionalFields) && is_array($additionalFields)) {
            $result = $result + $additionalFields;
        }
        return $result;
    }


    /**
     * Формирует массив свойств для записи
     * @return array
     */
    public function getPropertiesForSave(): array
    {
        $result = [];
        $formFields = $this->getFormFields();

        foreach ($formFields as $field) {
            if($field['property'] && !empty($field['store'])) {
                $result[$field['store']] = $field['value'];
            }
        }
        return $result;
    }
}