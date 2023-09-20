<?php

namespace classes\Models\Light\Basic;

use classes\Base\Iblock;

final class CommonData extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'light';

    protected const IBLOCK_CODE = 'common_data';

    private static ?CommonData $instance = null;

    /**
     * Получет элемент по его коду
     * @param string $code
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

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}