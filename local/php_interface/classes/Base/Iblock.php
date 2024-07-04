<?php

namespace classes\Base;


use CIBlockElement;
use CModule;

class Iblock
{
    protected const IBLOCK_TYPE_CODE = '';

    protected const IBLOCK_CODE = '';

    public function __construct()
    {
        CModule::IncludeModule('iblock');
    }

    /**
     * Возврящает идентификатор инфоблока
     * @return mixed
     */
    public function getIblockId()
    {
        $iblock = \CIBlock::GetList(false, ['TYPE' => static::IBLOCK_TYPE_CODE, 'CODE' => static::IBLOCK_CODE])->Fetch();
        return $iblock['ID'];
    }

    public  function getPropertiesByElementId($elementId, $filter = [])
    {
        $result = [];
        $obResult = CIBlockElement::GetProperty($this->getIblockId(), $elementId, false, false, $filter);
        if ($obResult) {
            while ($prop = $obResult->GetNext()) {
                $result[] = $prop;
            }
        }
        return $result;
    }
}
