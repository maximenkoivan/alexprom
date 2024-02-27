<?php

namespace classes\Models\Alpinism\Projects;

use CFile;
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
            'CNT_ACTIVE' => 'Y'
        ],
            ['CNT_ACTIVE' => 'Y', 'CNT_ALL' => 'N'],
            ['ID', 'CODE', 'NAME']);
        if ($obSections) {
            while ($section = $obSections->GetNext()) {
                if ($section['ELEMENT_CNT'] > 0) {
                    $result[$section['ID']] = $section;
                }
            }
        }
        return $result;
    }

    /**
     * Получает все активные элементы по коду раздела
     * @param string $sectionCode
     * @return array
     */
    public function getElementsBySectionCode(string $sectionCode = ''): array
    {
        $result = [];
        $sectionFilter = $sectionCode ? ['SECTION_CODE' => $sectionCode] : [];
        $obElement = \CIBlockElement::GetList(
            ['CREATE_DATE' => 'DESC', 'SORT' => 'ASC'],
            [
                'ACTIVE' => 'Y',
                'IBLOCK_TYPE' => self::IBLOCK_TYPE_CODE,
                'IBLOCK_CODE' => self::IBLOCK_CODE,
                '!DETAIL_TEXT' => false,
                'SECTION_GLOBAL_ACTIVE' => 'Y',
                $sectionFilter
            ]);
        if ($obElement) {
            while ($element = $obElement->GetNextElement()) {
                $element = $element->GetFields() + $element->GetProperties();

                // Resize image
                $arMinImg = [];
                if ($element['PREVIEW_PICTURE']) {
                    $arMinImg = array_change_key_case(
                        CFile::ResizeImageGet($element['PREVIEW_PICTURE'], ['width' => 600, 'height' => 300], BX_RESIZE_IMAGE_PROPORTIONAL),
                        CASE_UPPER
                    );
                }
                $arMinImg['WEBP'] = makeWebp($arMinImg['SRC']);


                $result[] = [
        'NAME' => $element['NAME'],
        'URL' => $element['DETAIL_PAGE_URL'],
        'SID' => $element['IBLOCK_SECTION_ID'],
        'PICTURE' => CFile::GetPath($element['PREVIEW_PICTURE']),
        'PICTURE_MIN' => $arMinImg['SRC'],
        'PICTURE_MIN_WEBP' => $arMinImg['WEBP'],
        'TEXT' => $element['PREVIEW_TEXT'],
        'SQUARE' => $element['SQUARE']['~VALUE'],
        'ADDRESS' => $element['ADDRESS']['~VALUE'],
    ];
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