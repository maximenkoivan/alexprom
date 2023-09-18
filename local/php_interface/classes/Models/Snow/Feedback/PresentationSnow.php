<?php

namespace classes\Models\Snow\Feedback;

use classes\Base\Iblock;

class PresentationSnow extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'snow';

    protected const IBLOCK_CODE = 'feedback';

    private const EVENT_NAME = 'SNOW_CALLBACK_FORM';

    private array $formFields = [
        'email' => [
            'ru' => 'Email',
            'en' => 'Email',
            'rules' => 'required|email',
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
        'form_name' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => 'Получить презентацию',
            'property' => true,
            'store' => 'FORM_NAME'
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
            'AUTHOR_EMAIL' => $this->formFields['email']['value'],
            'AUTHOR_PHONE' => $this->formFields['phone']['value'] ?: 'не указан',
            'FORM_NAME' => $this->formFields['form_name']['value'],
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