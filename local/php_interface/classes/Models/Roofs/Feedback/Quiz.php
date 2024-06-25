<?php

namespace classes\Models\Roofs\Feedback;

use classes\Base\Iblock;

class Quiz extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'roofs';

    protected const IBLOCK_CODE = 'quiz';
    private const EVENT_NAME = 'ROOFS_QUIZ_FORM';
    private array $formFields = [
        'name' => [
            'ru' => '"Имя"',
            'en' => '"Name"',
            'rules' => 'required|min:3',
            'value' => '',
            'property' => false,
            'store' => 'NAME'
        ],
        'phone' => [
            'ru' => '"Телефон"',
            'en' => '"Phone Number"',
            'rules' => 'required|phone',
            'value' => '',
            'property' => true,
            'store' => 'PHONE'
        ],
        'email' => [
            'ru' => '"E-mail"',
            'en' => '"E-mail"',
            'rules' => 'email',
            'value' => '',
            'property' => true,
            'store' => 'EMAIL'
        ],
        'message' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'MESSAGE'
        ],
        'constructive' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'CONSTRUCTIVE'
        ],
        'type' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'TYPE'
        ],
        'problem' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'PROBLEM'
        ],
        'thermal_insulation' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'THERMAL_INSULATION'
        ],
        'access' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'ACCESS'
        ],
        'location' => [
            'ru' => '',
            'en' => '',
            'rules' => '',
            'value' => '',
            'property' => true,
            'store' => 'LOCATION'
        ],
        'files' => [
            'ru' => '',
            'en' => '',
            'rules' => 'files_max_number:10|file_ext:jpg,jpeg,png,gif,webp,svg|file_size:20',
            'type' => 'file',
            'value' => '',
            'property' => true,
            'store' => 'FILES'
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

    public function setFieldValue(string $fieldName = '', $value = ''): void
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
        $result = [];
        foreach ($this->formFields as $field) {
            if (is_array($field['value']) && $field['type'] != ['file']) {
                $text = '<br>';
                foreach ($field['value'] as $key => $value) {
                    $postfix = array_key_last($field['value']) == $key ? '' : ' <br> ';
                    $text .= $value . $postfix;
                }
                $field['value'] = $text;
            }
            $result[$field['store']] = $field['type'] !== 'file' ? $field['value'] : '';
        }
        return $result;
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
            if (!$field['property'] && !empty($field['store'])) {
                $result[$field['store']] = $field['value'];
            }
        }

        if (!empty($additionalFields) && is_array($additionalFields)) {
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
            if ($field['property'] && !empty($field['store'])) {
                $result[$field['store']] = $field['value'];
            }
        }
        return $result;
    }
}