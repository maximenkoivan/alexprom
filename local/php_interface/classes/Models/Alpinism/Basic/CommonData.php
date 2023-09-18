<?php

namespace classes\Models\Alpinism\Basic;

use classes\Base\Iblock;

final class CommonData extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'common_data';

    protected const IBLOCK_CODE = 'common_data';

    private static ?CommonData $instance = null;

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
     * Получает поля элемента по его коду
     * @param array $code
     * @return array
     */
    public function getFieldsByCode(array $code = []): array
    {
        $result = [];
        $obElement = \CIBlockElement::GetList(false, [
            'ACTIVE' => 'Y',
            'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
            'IBLOCK_CODE' => self::IBLOCK_CODE,
        ],
            false,
            false,
            $code
        );
        if ($element = $obElement->GetNextElement()) {
            $result = $element->GetFields();
        }
        return $result;
    }


    public function getElementByIds(string|array $ids): array
    {
        $result = [];
        $obElement = \CIBlockElement::GetList(false, [
            'ACTIVE' => 'Y',
            'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
            'IBLOCK_CODE' => self::IBLOCK_CODE,
            'ID' => $ids,
            false,
            false,
            ['NAME', 'PAGE_DETAIL_URL']
        ]);
        if ($obElement) {
            while ($element = $obElement->GetNextElement()) {
                $result[] = $element->GetFields();
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