<?php

namespace classes\Models\Alpinism\Projects;

use CIBlockElement;
use classes\Base\Iblock;

final class Projects extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'projects';

    protected const IBLOCK_CODE = 'projects';

    private static ?Projects $instance = null;

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
            'ACTIVE' => 'Y',
            'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
            'IBLOCK_CODE' => self::IBLOCK_CODE,
            'CODE' => $code,
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
     * Получает элементы по ID
     * @param string|array $ids
     * @return array
     */
    public function getElementByIds(string|array $ids): array
    {
        $result = [];
        $obElement = CIBlockElement::GetList(false, [
            'ID' => $ids,
            'ACTIVE' => 'Y',
            'IBLOCK_ACTIVE' => 'Y',
            'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
            'IBLOCK_CODE' => self::IBLOCK_CODE,
            'SECTION_GLOBAL_ACTIVE',
        ],
            false,
            false,
            ['NAME', 'DETAIL_PAGE_URL']
        );
        if ($obElement) {
            while ($element = $obElement->GetNext()) {
                $result[] = $element;
            }
        }
        return $result;
    }

    /**
     * Получает разделы инфоблока
     * @return array
     */
    public function getSections(): array
    {
        $result = [];
        $obSections = \CIBlockSection::GetList(false, [
            'ACTIVE' => 'Y',
            'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
            'IBLOCK_CODE' => self::IBLOCK_CODE,
        ],
            ['CNT_ACTIVE' => 'Y'],
            ['ID', 'CODE', 'NAME']);
        if ($obSections) {
            while ($section = $obSections->GetNext()) {
                $result[$section['ID']] = $section;
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