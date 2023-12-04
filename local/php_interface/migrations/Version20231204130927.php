<?php

namespace Sprint\Migration;


class Version20231204130927 extends Version
{
    protected $description = "Контент/Контент (структура)";

    protected $moduleVersion = "4.2.4";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('content', 'light');
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Превью',
  'ACTIVE' => 'Y',
  'SORT' => '541',
  'CODE' => 'PREVIEW_VIDEO',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'F',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => 'jpg, gif, bmp, png, jpeg, webp, svg',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => 'a:0:{}',
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Изображение для фона',
  'ACTIVE' => 'Y',
  'SORT' => '542',
  'CODE' => 'BG_IMAGE_VIDEO',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'F',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => 'jpg, gif, bmp, png, jpeg, webp, svg',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => 'a:0:{}',
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Ссылка на ролик в Youtube',
  'ACTIVE' => 'Y',
  'SORT' => '545',
  'CODE' => 'LINK_VIDEO',
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
  'USER_TYPE_SETTINGS' => 'a:0:{}',
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
  'Основной контент|cedit1' => 
  array (
    'PROPERTY_BG_IMAGES' => 'Изображения для фона',
    'PROPERTY_TITLE_PAGE' => 'Заголовок',
    'PROPERTY_SUBTITLE' => 'Подзаголовок',
    'PROPERTY_TEXT_BTN_1' => 'Текст кнопки 1',
    'PROPERTY_TEXT_BTN_2' => 'Текст кнопки 2',
    'PROPERTY_ADVANTAGES' => 'Преимущества',
    'cedit1_csection1' => 'Видео',
    'PROPERTY_PREVIEW_VIDEO' => 'Превью',
    'PROPERTY_BG_IMAGE_VIDEO' => 'Изображение для фона',
    'PROPERTY_LINK_VIDEO' => 'Ссылка на ролик в Youtube',
  ),
  'Контент нижнего блока|cedit2' => 
  array (
    'PROPERTY_IMAGE_BOTTOM' => 'Изображение',
    'PROPERTY_DESC_IMAGE_BOTTOM' => 'Описание',
    'PROPERTY_LINK_VIDEO_BOTTOM' => 'Ссылка на ролик в Youtube',
  ),
  'SEO|edit14' => 
  array (
    'IPROPERTY_TEMPLATES_ELEMENT_META_TITLE' => 'Шаблон META TITLE',
    'IPROPERTY_TEMPLATES_ELEMENT_META_KEYWORDS' => 'Шаблон META KEYWORDS',
    'IPROPERTY_TEMPLATES_ELEMENT_META_DESCRIPTION' => 'Шаблон META DESCRIPTION',
    'IPROPERTY_TEMPLATES_ELEMENT_PAGE_TITLE' => 'Заголовок элемента',
    'IPROPERTY_TEMPLATES_ELEMENTS_PREVIEW_PICTURE' => 'Настройки для картинок анонса элементов',
    'IPROPERTY_TEMPLATES_ELEMENT_PREVIEW_PICTURE_FILE_ALT' => 'Шаблон ALT',
    'IPROPERTY_TEMPLATES_ELEMENT_PREVIEW_PICTURE_FILE_TITLE' => 'Шаблон TITLE',
    'IPROPERTY_TEMPLATES_ELEMENT_PREVIEW_PICTURE_FILE_NAME' => 'Шаблон имени файла',
    'IPROPERTY_TEMPLATES_ELEMENTS_DETAIL_PICTURE' => 'Настройки для детальных картинок элементов',
    'IPROPERTY_TEMPLATES_ELEMENT_DETAIL_PICTURE_FILE_ALT' => 'Шаблон ALT',
    'IPROPERTY_TEMPLATES_ELEMENT_DETAIL_PICTURE_FILE_TITLE' => 'Шаблон TITLE',
    'IPROPERTY_TEMPLATES_ELEMENT_DETAIL_PICTURE_FILE_NAME' => 'Шаблон имени файла',
    'SEO_ADDITIONAL' => 'Дополнительно',
    'TAGS' => 'Теги',
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
