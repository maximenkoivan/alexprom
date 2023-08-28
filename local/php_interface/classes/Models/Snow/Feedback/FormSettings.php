<?php

namespace classes\Models\Snow\Feedback;

use classes\Base\Iblock;

class FormSettings extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'snow';

    protected const IBLOCK_CODE = 'feedback_settings';

    private static ?FormSettings $instance = null;

    /**
     * Получает свойства элементов по его коду
     * @param string $code
     * @return array
     */
    public function getElementPropertiesByCode(string $code): array
    {
        $properties = [];
        $obElement = \CIBlockElement::GetList(
            false,
            ['IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE, 'IBLOCK_CODE' => self::IBLOCK_CODE, 'CODE' => $code]
        );
        if ($element = $obElement->GetNextElement()) {
            $properties = $element->GetProperties();
        }
        return $properties;
    }


    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}