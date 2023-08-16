<?php

namespace Sprint\Migration;


class Version20230814175451 extends Version
{
    protected $description = "Свет / заказы";

    protected $moduleVersion = "4.2.4";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Event()->saveEventType('ORDER_FORM', array (
  'LID' => 'ru',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Заявка на услугу',
  'DESCRIPTION' => '#AUTHOR# - Имя
#AUTHOR_PHONE# - Номер телефона
#PLACE# - Местоположение
#TYPE# - Где выполнить оформление
#WHERE# - Стиль оформления
#STYLE# - Стиль оформления
#SIZE# - Размер объекта
#DATE# - Сроки монтажа
#COMMENT# - Комментарий',
  'SORT' => '150',
));
            $helper->Event()->saveEventType('ORDER_FORM', array (
  'LID' => 'en',
  'EVENT_TYPE' => 'email',
  'NAME' => '',
  'DESCRIPTION' => '',
  'SORT' => '150',
));
            $helper->Event()->saveEventMessage('ORDER_FORM', array (
  'LID' => 
  array (
    0 => 's2',
  ),
  'ACTIVE' => 'Y',
  'EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#',
  'EMAIL_TO' => '#DEFAULT_EMAIL_FROM#',
  'SUBJECT' => 'Заявка на услугу',
  'MESSAGE' => '<b>Имя:</b> #AUTHOR#<br>
 <b>Номер телефона:</b> #AUTHOR_PHONE#<br>
 <b>Местоположение:</b> #PLACE#<br>
 <b>Тип здания:</b> #TYPE#<br>
 <b>Где выполнить оформление:</b> #WHERE#<br>
 <b>Стиль оформления:</b> #STYLE#<br>
 <b>Размер объекта:</b> #SIZE#<br>
 <b>Сроки монтажа:</b> #DATE#<br>
 <b>Комментарий:</b> #COMMENT#<br>
 <br>',
  'BODY_TYPE' => 'html',
  'BCC' => '',
  'REPLY_TO' => '',
  'CC' => '',
  'IN_REPLY_TO' => '',
  'PRIORITY' => '',
  'FIELD1_NAME' => '',
  'FIELD1_VALUE' => '',
  'FIELD2_NAME' => '',
  'FIELD2_VALUE' => '',
  'SITE_TEMPLATE_ID' => '',
  'ADDITIONAL_FIELD' => 
  array (
  ),
  'LANGUAGE_ID' => 'ru',
  'EVENT_TYPE' => '[ ORDER_FORM ] Заявка на услугу',
));
        }

    public function down()
    {
        //your code ...
    }
}
