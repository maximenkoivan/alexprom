<?php

namespace classes\Models\Roofs\Feedback;

use classes\Base\Iblock;

class Calculator extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'roofs';

    protected const IBLOCK_CODE = 'calculator';

    private const EVENT_NAME = 'ROOFS_CALCULATOR_FORM';

    private array $formFields;

    public function __construct()
    {
        parent::__construct();

        $this->formFields = [
            'name' => [
                'ru' => '',
                'en' => '',
                'rules' => '',
                'value' => 'Расчет услуги от ' .FormatDate('d F Y H:i:s'),
                'property' => false,
                'store' => 'NAME'
            ],
            'phone' => [
                'ru' => '"Телефон"',
                'en' => 'Phone',
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
            'square' => [
                'ru' => '"Площадь"',
                'en' => '',
                'rules' => '',
                'value' => '',
                'property' => true,
                'store' => 'SQUARE'
            ],
            'operation' => [
                'ru' => '"Операция монтажа"',
                'en' => '',
                'rules' => '',
                'value' => '',
                'property' => true,
                'store' => 'OPERATION'
            ],
            'material' => [
                'ru' => '"Материал кровли"',
                'en' => '',
                'rules' => '',
                'value' => '',
                'property' => true,
                'store' => 'MATERIAL'
            ],
            'price' => [
                'ru' => '',
                'en' => '',
                'rules' => '',
                'value' => '',
                'property' => true,
                'store' => 'PRICE'
            ],
//        'g-recaptcha-response' => [
//            'ru' => 'recaptcha',
//            'en' => 'recaptcha',
//            'rules' => 'recaptcha',
//            'value' => ''
//        ],
        ];
    }

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
                foreach ($field['value'] as $value) {
                    $text .= $value . ' <br> ';

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