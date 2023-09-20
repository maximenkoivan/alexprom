<?php

namespace classes\Models\Alpinism\Services;

use CIBlockElement;
use classes\Base\Iblock;

final class Services extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'services';

    protected const IBLOCK_CODE = 'services';

    private static ?Services $instance = null;

    /**
     * Получает все активные элементы
     * @param array $ids
     * @param array $sort
     * @return array
     */
    public function getAllElements(array $ids = [], array $sort = ['SORT' => 'ASC']): array
    {
        $result = [];
        $obElement = \CIBlockElement::GetList(
            $sort,
            [
                'ID' => $ids,
                'ACTIVE' => 'Y',
                'IBLOCK_ACTIVE' => 'Y',
                'SECTION_GLOBAL_ACTIVE' => 'Y',
                'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
                'IBLOCK_ID' => $this->getIblockId(),
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
     * Получает элементы по ID
     * @param string|array $ids
     * @return array
     */
    public function getElementByIds($ids): array
    {
        $result = [];
        $obElement = CIBlockElement::GetList(false, [
            'ID' => $ids,
            'ACTIVE' => 'Y',
            'IBLOCK_ACTIVE' => 'Y',
            'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
            'IBLOCK_CODE' => self::IBLOCK_CODE,
            'SECTION_GLOBAL_ACTIVE' => 'Y',
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
     * @param array $propertyFilter
     * @return array
     */
    public function getSections(array $propertyFilter = [], array $sort = ['CREATED' => 'ASC'], array $ids = []): array
    {
        $result = [];
        $obSections = \CIBlockSection::GetList(
            $sort + ['SORT' => 'ASC'],
            [
                'ID' => $ids,
                'ACTIVE' => 'Y',
                'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
                'IBLOCK_ID' => $this->getIblockId(),
                'SECTION_GLOBAL_ACTIVE' => 'Y',
                'PROPERTY' => $propertyFilter
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

    public static function getInstance(): ?Services
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}