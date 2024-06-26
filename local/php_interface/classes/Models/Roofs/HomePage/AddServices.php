<?php

namespace classes\Models\Roofs\HomePage;

use classes\Base\Iblock;

final class AddServices extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'roofs';

    protected const IBLOCK_CODE = 'add_services';

    private static ?AddServices $instance = null;

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
            ]);
        if ($obElement) {
            while ($element = $obElement->GetNextElement()) {
                $result[] = $element->GetFields() + $element->GetProperties();
            }
        }
        return $result;
    }

    /**
     * @param string $code
     * @param bool $onlyProperties
     * @return array
     */
    public function getElementByCode(string $code, bool $onlyProperties = false): array
    {
        $result = [];
        $obElement = \CIBlockElement::GetList(false, [
            'ACTIVE' => 'Y',
            'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
            'IBLOCK_CODE' => self::IBLOCK_CODE,
            'CODE' => $code
        ]);
        if ($element = $obElement->GetNextElement()) {
                if ($onlyProperties) {
                    $result = $element->GetProperties();
                } else {
                    $result = $element->GetFields() + $element->GetProperties();
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