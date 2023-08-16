<?php

namespace Sprint\Migration;


class Version20230815103318 extends Version
{
    protected $description = "Свет / Настройки ФОС (структура)";

    protected $moduleVersion = "4.2.4";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('feedback_settings', 'light');
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Текст согласия на ОПД',
  'ACTIVE' => 'Y',
  'SORT' => '695',
  'CODE' => 'TEXT_COMMON',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '2',
  'COL_COUNT' => '70',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Текст ссылки',
  'ACTIVE' => 'Y',
  'SORT' => '700',
  'CODE' => 'TEXT_LINK_COMMON',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '70',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Ссылка',
  'ACTIVE' => 'Y',
  'SORT' => '705',
  'CODE' => 'LINK_COMMON',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '70',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
            $helper->UserOptions()->saveElementForm($iblockId, array (
  'Параметры|edit1' => 
  array (
    'ID' => 'ID',
    'DATE_CREATE' => 'Создан',
    'TIMESTAMP_X' => 'Изменен',
    'ACTIVE' => 'Активность',
    'SORT' => 'Сортировка',
    'NAME' => 'Название',
    'CODE' => 'Символьный код',
  ),
  'Верхняя ФОС|cedit1' => 
  array (
    'PROPERTY_TITLE_MODAL_1' => 'Заголовок',
    'PROPERTY_SUBTITLE_MODAL_1' => 'Подзаголовок',
    'PROPERTY_PLH_NAME_MODAL_1' => 'Плейсхолдер "Имя"',
    'PROPERTY_PLH_PHONE_MODAL_1' => 'Плейсхолдер "Телефон"',
    'PROPERTY_TEXT_BTN_MODAL_1' => 'Текст кнопки',
    'PROPERTY_TITLE_FINAL_MSG__MODAL_1' => 'Заголовок (финальное сообщение)',
    'PROPERTY_TEXT_FINAL_MSG__MODAL_1' => 'Текст (финальное сообщение)',
  ),
  'Нижняя ФОС|cedit2' => 
  array (
    'PROPERTY_TITLE_MODAL_2' => 'Заголовок',
    'PROPERTY_PLH_NAME_MODAL_2' => 'Плейсхолдер "Имя"',
    'PROPERTY_PLH_PHONE_MODAL_2' => 'Плейсхолдер "Телефон"',
    'PROPERTY_TEXT_BTN_MODAL_2' => 'Текст кнопки',
    'PROPERTY_TITLE_FINAL_MSG__MODAL_2' => 'Заголовок (финальное сообщение)',
    'PROPERTY_TEXT_FINAL_MSG__MODAL_2' => 'Текст (финальное сообщение)',
  ),
  'ФОС "Расчет стоимости"|cedit3' => 
  array (
    'PROPERTY_TITLE_FORM_MODAL_3_STEP_1' => 'Заголовок формы',
    'cedit3_csection1' => 'ШАГ 1',
    'PROPERTY_TITLE_MODAL_3_STEP_1' => 'Заголовок (шаг 1)',
    'PROPERTY_SUBTITLE_MODAL_3_STEP_1' => 'Подзаголовок (шаг 1)',
    'PROPERTY_VARIANTS__MODAL_3_STEP_1' => 'Варианты (шаг 1)',
    'cedit3_csection2' => 'ШАГ 2',
    'PROPERTY_TITLE_MODAL_3_STEP_2' => 'Заголовок (шаг 2)',
    'PROPERTY_SUBTITLE_MODAL_3_STEP_2' => 'Подзаголовок (шаг 2)',
    'PROPERTY_VARIANTS__MODAL_3_STEP_2' => 'Варианты (шаг 2)',
    'cedit3_csection3' => 'ШАГ 3',
    'PROPERTY_TITLE_MODAL_3_STEP_3' => 'Заголовок (шаг 3)',
    'PROPERTY_SUBTITLE_MODAL_3_STEP_3' => 'Подзаголовок (шаг 3)',
    'PROPERTY_VARIANTS__MODAL_3_STEP_3' => 'Варианты (шаг 3)',
    'cedit3_csection4' => 'ШАГ 4',
    'PROPERTY_TITLE_MODAL_3_STEP_4' => 'Заголовок (шаг 4)',
    'PROPERTY_SUBTITLE_MODAL_3_STEP_4' => 'Подзаголовок (шаг 4)',
    'PROPERTY_VARIANTS__MODAL_3_STEP_4' => 'Варианты (шаг 4)',
    'cedit3_csection5' => 'ШАГ 5',
    'PROPERTY_TITLE_MODAL_3_STEP_5' => 'Заголовок (шаг 5)',
    'PROPERTY_SUBTITLE_MODAL_3_STEP_5' => 'Подзаголовок (шаг 5)',
    'PROPERTY_VARIANTS__MODAL_3_STEP_5' => 'Варианты (шаг 5)',
    'cedit3_csection6' => 'ШАГ 6',
    'PROPERTY_TITLE_MODAL_3_STEP_6' => 'Заголовок (шаг 6)',
    'PROPERTY_SUBTITLE_MODAL_3_STEP_6' => 'Подзаголовок (шаг 6)',
    'PROPERTY_VARIANTS__MODAL_3_STEP_6' => 'Варианты (шаг 6)',
    'cedit3_csection7' => 'ШАГ 7',
    'PROPERTY_TITLE_FORM_MODAL_3_STEP_7' => 'Заголовок формы (шаг 7)',
    'PROPERTY_TITLE_MODAL_3_STEP_7' => 'Заголовок (шаг 7)',
    'PROPERTY_SUBTITLE_MODAL_3_STEP_7' => 'Подзаголовок (шаг 7)',
    'PROPERTY_PLH_1_MODAL_3_STEP_7' => 'Плейсхолдер 1 (шаг 7)',
    'PROPERTY_PLH_2_MODAL_3_STEP_7' => 'Плейсхолдер 2 (шаг 7)',
    'PROPERTY_PLH_3_MODAL_3_STEP_7' => 'Плейсхолдер 3 (шаг 7)',
    'cedit3_csection8' => 'Прочие настройки',
    'PROPERTY_TEXT_BTN_1_MODAL_3' => 'Текст кнопки "Назад"',
    'PROPERTY_TEXT_BTN_2_MODAL_3' => 'Текст кнопки "Следующий вопрос"',
    'PROPERTY_TEXT_BTN_3_MODAL_3' => 'Текст кнопки "Отправить"',
    'PROPERTY_TITLE_FINAL_MSG__MODAL_3' => 'Заголовок (финальное сообщение)',
    'PROPERTY_TEXT_FINAL_MSG__MODAL_3' => 'Текст (финальное сообщение)',
  ),
  'Общие настройки|cedit4' => 
  array (
    'PROPERTY_ERR_MESSAGE_MODAL_3' => 'Сообщение об ошибке',
    'PROPERTY_TEXT_COMMON' => 'Текст согласия на ОПД',
    'PROPERTY_TEXT_LINK_COMMON' => 'Текст ссылки',
    'PROPERTY_LINK_COMMON' => 'Ссылка',
  ),
));
    $helper->UserOptions()->saveElementGrid($iblockId, array (
  'views' => 
  array (
    'default' => 
    array (
      'columns' => 
      array (
        0 => '',
      ),
      'columns_sizes' => 
      array (
        'expand' => 1,
        'columns' => 
        array (
        ),
      ),
      'sticked_columns' => 
      array (
      ),
      'custom_names' => 
      array (
      ),
    ),
  ),
  'filters' => 
  array (
  ),
  'current_view' => 'default',
));

    }

    public function down()
    {
        //your code ...
    }
}
