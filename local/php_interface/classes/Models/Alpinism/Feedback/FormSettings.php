<?php

namespace classes\Models\Alpinism\Feedback;

use classes\Base\Iblock;

class FormSettings extends Iblock
{
    protected const IBLOCK_TYPE_CODE = 'common_data';

    protected const IBLOCK_CODE = 'feedback_settings';

    private static ?FormSettings $instance = null;

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


    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}