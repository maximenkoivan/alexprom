<?php

namespace classes\Models\Roofs\Feedback;

use classes\Base\Iblock;

class FormSettings extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'roofs';

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

    /**
     * Получает свойство по последней части символьного кода
     * @param string $prefix
     * @return array
     */
    public function getPropertiesByPostfix(string $postfix): array
    {
        $result = [];
        $obElement = \CIBlockElement::GetList(
            ['SORT' => 'ASC'],
            [
                'ACTIVE' => 'Y',
                'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
                'IBLOCK_ID' => $this->getIblockId(),
            ],
        );
        if ($obElement) {
            while ($element = $obElement->GetNextElement()) {
                $result = $element->GetProperties(
                    false,
                    ['CODE' => '%_' . $postfix]
                );
            }
        }
        return $result;
    }


    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}