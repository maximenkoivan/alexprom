<?php

namespace Sprint\Migration;


class Version20230915110248 extends Version
{
    protected $description = "Общие данные/Общие данные (структура)";

    protected $moduleVersion = "4.2.4";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('common_data', 'common_data');
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Заголовок',
  'ACTIVE' => 'Y',
  'SORT' => '600',
  'CODE' => 'TITLE_404',
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
  'NAME' => 'Подзаголовок',
  'ACTIVE' => 'Y',
  'SORT' => '605',
  'CODE' => 'SUBTITLE_404',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '3',
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
  'NAME' => 'Описание',
  'ACTIVE' => 'Y',
  'SORT' => '610',
  'CODE' => 'DESC_404',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '3',
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
  'SORT' => '615',
  'CODE' => 'LINK_404',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '3',
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
  'Header|cedit1' => 
  array (
    'PROPERTY_ADMIN_PANEL' => 'Отображать административную панель',
    'PROPERTY_LOGO_HEADER' => 'Логотип',
    'PROPERTY_EMAIL_HEADER' => 'Email',
    'PROPERTY_ICON_BTN_MOB_HEADER' => 'Иконка (телефон)',
    'PROPERTY_PHONE_HEADER' => 'Телефон',
    'PROPERTY_TEXT_BTN_HEADER' => 'Текст кнопки',
    'PROPERTY_TEXT_BTN_MOB_HEADER' => 'Текст кнопки (mobile)',
  ),
  'Footer|cedit2' => 
  array (
    'PROPERTY_LOGO_FOOTER' => 'Логотип',
    'PROPERTY_TITLE_CONTACTS_FOOTER' => 'Заголовок "Контакты"',
    'PROPERTY_EMAIL_FOOTER' => 'Email',
    'PROPERTY_PHONE_FOOTER' => 'Телефон',
    'PROPERTY_ADDRESS_FOOTER' => 'Адрес',
    'PROPERTY_TITLE_SERVICES_FOOTER' => 'Заголовок "Популярные услуги"',
    'PROPERTY_SERVICES_FOOTER' => 'Услуги',
    'PROPERTY_TITLE_SECTIONS_FOOTER' => 'Заголовок нижнего меню',
    'PROPERTY_TITLE_SOCNET_FOOTER' => 'Заголовок "Социальные сети"',
    'PROPERTY_SOCNET_FOOTER' => 'Социальные сети',
    'PROPERTY_COPYRIGHT_FOOTER' => 'Авторские права',
    'PROPERTY_TEXT_LINK_POLICY_FOOTER' => 'Текст ссылки "Политика конфиденциальности"',
    'PROPERTY_LINK_POLICY_FOOTER' => 'Ссылка "Политика конфиденциальности"',
    'PROPERTY_IMAGE_LOADER_FOOTER' => 'Изображение "Загрузка"',
  ),
  'Политика конфиденциальности|cedit3' => 
  array (
    'DETAIL_TEXT' => 'Детальное описание',
  ),
  'Страница 404|cedit4' => 
  array (
    'PROPERTY_TITLE_404' => 'Заголовок',
    'PROPERTY_SUBTITLE_404' => 'Подзаголовок',
    'PROPERTY_DESC_404' => 'Описание',
    'PROPERTY_LINK_404' => 'Ссылка',
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
