<?php

namespace classes\Base;


use CModule;

class Iblock
{
    protected const TYPE_IBLOCK_CODE = '';

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
        $iblock = \CIBlock::GetList(false, ['TYPE' => static::TYPE_IBLOCK_CODE, 'CODE' => static::IBLOCK_CODE])->Fetch();
        return $iblock['ID'];
    }
}
