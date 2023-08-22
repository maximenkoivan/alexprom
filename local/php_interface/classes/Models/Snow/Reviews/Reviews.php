<?php

namespace classes\Models\Snow\Reviews;

use classes\Base\Iblock;

final class Reviews extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'snow';

    protected const IBLOCK_CODE = 'reviews';

    private static ?Reviews $instance = null;

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
        if ($obElement) {
            $element = $obElement->GetNextElement();
            if ($onlyProperties) {
                $result = $element->GetProperties();
            } else {
                $result = $element->GetFields() + $element->GetProperties();
            }
        }
        return $result;
    }

    public static function getInstance(): ?Reviews
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}