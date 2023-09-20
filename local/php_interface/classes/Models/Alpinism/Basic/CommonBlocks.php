<?php

namespace classes\Models\Alpinism\Basic;

use classes\Base\Iblock;

final class CommonBlocks extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'common_data';

    protected const IBLOCK_CODE = 'common_blocks';

    private static ?CommonBlocks $instance = null;

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
                    ['CODE' => '_%' . $postfix]
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