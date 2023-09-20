<?php

namespace classes\Models\Alpinism\About;

use classes\Base\Iblock;

final class Settings extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'about';

    protected const IBLOCK_CODE = 'settings';

    private static $instance = null;

    /**
     * Получает все активные элементы
     * @return array
     */
    public function getAllElements(): array
    {
        $result = [];
        $obElement = \CIBlockElement::GetList(
            ['SORT' => 'ASC'],
            [
                'ACTIVE' => 'Y',
                'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
                'IBLOCK_CODE' => self::IBLOCK_CODE,
                '!DETAIL_TEXT' => false
            ]);
        if ($obElement) {
            while ($element = $obElement->GetNextElement()) {
                $result[] = $element->GetFields() + $element->GetProperties();
            }
        }
        return $result;
    }

    /**
     * Получет элемент по его коду
     * @param string $code
     * @param bool $onlyProperties
     * @return array
     */
    public function getElementByCode(string $code, bool $onlyProperties = false): array
    {
        $result = [];
        $obElement = \CIBlockElement::GetList(false, [
            'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
            'IBLOCK_CODE' => self::IBLOCK_CODE,
            'CODE' => $code,
        ]);
        if ($element = $obElement->GetNextElement()) {
            if ($onlyProperties) {
                $result = $element->GetProperties();
            } else {
                $fields = $element->GetFields();
                $ipropValues = new \Bitrix\Iblock\InheritedProperty\ElementValues(
                    $this->getIblockId(),
                    $fields['ID']
                );
                $result = $fields + $ipropValues->getValues() + $element->GetProperties();
            }
        }
        return $result;
    }

    /**
     * Получает свойство по первой части символьного кода
     * @param string $prefix
     * @return array
     */
    public function getPropertiesByPrefix(string $prefix): array
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
                    ['CODE' => $prefix . '_%']
                );
            }
        }
        return $result;
    }

    /**
     * Получает свойство по его коду
     * @param string $code
     * @return array
     */
    public function getPropertiesByCode(string $code): array
    {
        $result = [];
        $obElement = \CIBlockElement::GetList(
            ['SORT' => 'ASC'],
            [
                'ACTIVE' => 'Y',
                'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
                'IBLOCK_ID' => $this->getIblockId(),
            ],
            false,
            false,
            ['PROPERTY_' . $code]
        );
        if ($obElement) {
            while ($property = $obElement->GetNext()) {
                $result[] = $property['PROPERTY_' . $code . '_VALUE'];
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