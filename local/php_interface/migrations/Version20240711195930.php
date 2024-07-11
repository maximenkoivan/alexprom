<?php

namespace Sprint\Migration;


class Version20240711195930 extends Version
{
    protected $description = "Герметизация швов";

    protected $moduleVersion = "4.2.4";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Event()->saveEventType('GERMET_CALLBACK_FORM', array (
  'LID' => 'ru',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Отправка сообщения через форму обратной связи',
  'DESCRIPTION' => '#NAME# - Имя автора
#PHONE# - Номер телефона',
  'SORT' => '150',
));
            $helper->Event()->saveEventType('GERMET_CALLBACK_FORM', array (
  'LID' => 'en',
  'EVENT_TYPE' => 'email',
  'NAME' => '',
  'DESCRIPTION' => '',
  'SORT' => '150',
));
            $helper->Event()->saveEventMessage('GERMET_CALLBACK_FORM', array (
  'LID' => 
  array (
    0 => 's1',
    1 => 's6',
  ),
  'ACTIVE' => 'Y',
  'EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#',
  'EMAIL_TO' => 'maximenkoivan@yandex.ru',
  'SUBJECT' => '#SITE_NAME# : Заявка на обратный звонок',
  'MESSAGE' => '#SITE_NAME# : Заявка на обратный звонок<br>
 ------------------------------------------<br>
 <br>
 <br>
 <b>Имя:</b> #NAME#<br>
 <b>Номер телефона:</b> #PHONE#<br>
 <br>
 <br>
Сообщение сгенерировано автоматически.',
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
  'SITE_TEMPLATE_ID' => 'email_templates',
  'ADDITIONAL_FIELD' => 
  array (
  ),
  'LANGUAGE_ID' => 'ru',
  'EVENT_TYPE' => '[ GERMET_CALLBACK_FORM ] Отправка сообщения через форму обратной связи',
));
            $helper->Event()->saveEventMessage('GERMET_CALLBACK_FORM', array (
  'LID' => 
  array (
    0 => 's1',
    1 => 's6',
  ),
  'ACTIVE' => 'Y',
  'EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#',
  'EMAIL_TO' => 'maximenkoivan@yandex.ru',
  'SUBJECT' => '#SITE_NAME#: Заявка на обратный звонок',
  'MESSAGE' => '#SITE_NAME#: Заявка на обратный звонок<br>
 ------------------------------------------<br>
 <br>
 <br>
 <b>Имя:</b> #NAME#<br>
 <b>Номер телефона:</b> #PHONE#<br>
 <br>
 <br>
Сообщение сгенерировано автоматически.',
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
  'SITE_TEMPLATE_ID' => 'email_templates',
  'ADDITIONAL_FIELD' => 
  array (
  ),
  'LANGUAGE_ID' => 'ru',
  'EVENT_TYPE' => '[ GERMET_CALLBACK_FORM ] Отправка сообщения через форму обратной связи',
));
            $helper->Event()->saveEventType('GERMET_QUIZ_FORM', array (
  'LID' => 'ru',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Новое сообщение из формы "Заказать рассчет стоимости"',
  'DESCRIPTION' => '#NAME# - Имя
#PHONE# - Телефон
#EMAIL# - Электронная почта
#MESSAGE# - Сообщение
#CONSTRUCTIVE# - Конструктив кровли
#TYPE# - Тип кровли
#PROBLEM# - Что произошло
#THERMAL_INSULATION# - Кровельный пирог
#ACCESS# - Выход на кровлю
#LOCATION# - Расстояние до объекта (от МКАД)',
  'SORT' => '150',
));
            $helper->Event()->saveEventType('GERMET_QUIZ_FORM', array (
  'LID' => 'en',
  'EVENT_TYPE' => 'email',
  'NAME' => '',
  'DESCRIPTION' => '',
  'SORT' => '150',
));
            $helper->Event()->saveEventMessage('GERMET_QUIZ_FORM', array (
  'LID' => 
  array (
    0 => 's1',
    1 => 's6',
  ),
  'ACTIVE' => 'Y',
  'EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#',
  'EMAIL_TO' => 'maximenkoivan@yandex.ru',
  'SUBJECT' => '#SITE_NAME# : Новая заявка на расчет стоимости услуги',
  'MESSAGE' => '#SITE_NAME# : Новая заявка на расчет стоимости услуги<br>
 --------------------------------------------------------------------------------------<br>
 <br>
 <br>
 <b>Имя:</b> #NAME#<br>
 <b>Телефон:</b> #PHONE#<br>
 <b>Электронная почта:</b> #EMAIL#<br>
 <b>Сообщение:</b> #MESSAGE#<br>
 <b>Конструктив кровли:</b> #CONSTRUCTIVE#<br>
 <b>Тип кровли:</b> #TYPE#<br>
 <b>Что произошло:</b> #PROBLEM#<br>
 <b>Кровельный пирог:</b> #THERMAL_INSULATION# <br>
 <b>Выход на кровлю:</b> #ACCESS# <br>
 <b>Расстояние до объекта (от МКАД):</b> #LOCATION#<br>
 <br>
 --------------------------------------------------------------------------------------<br>
Сообщение сгенерировано автоматически.',
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
  'SITE_TEMPLATE_ID' => 'email_templates',
  'ADDITIONAL_FIELD' => 
  array (
  ),
  'LANGUAGE_ID' => 'ru',
  'EVENT_TYPE' => '[ GERMET_QUIZ_FORM ] Новое сообщение из формы "Заказать рассчет стоимости"',
));
            $helper->Event()->saveEventMessage('GERMET_QUIZ_FORM', array (
  'LID' => 
  array (
    0 => 's1',
    1 => 's6',
  ),
  'ACTIVE' => 'Y',
  'EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#',
  'EMAIL_TO' => 'maximenkoivan@yandex.ru',
  'SUBJECT' => '#SITE_NAME#: Новая заявка на расчет стоимости услуги',
  'MESSAGE' => '#SITE_NAME#: Новая заявка на расчет стоимости услуги<br>
 --------------------------------------------------------------------------------------<br>
 <br>
 <br>
 <b>Имя:</b> #NAME#<br>
 <b>Телефон:</b> #PHONE#<br>
 <b>Электронная почта:</b> #EMAIL#<br>
 <b>Сообщение:</b> #MESSAGE#<br>
 <b>Конструктив кровли:</b> #CONSTRUCTIVE#<br>
 <b>Тип кровли:</b> #TYPE#<br>
 <b>Что произошло:</b> #PROBLEM#<br>
 <b>Кровельный пирог:</b> #THERMAL_INSULATION# <br>
 <b>Выход на кровлю:</b> #ACCESS# <br>
 <b>Расстояние до объекта (от МКАД):</b> #LOCATION#<br>
 <br>
 --------------------------------------------------------------------------------------<br>
Сообщение сгенерировано автоматически.',
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
  'SITE_TEMPLATE_ID' => 'email_templates',
  'ADDITIONAL_FIELD' => 
  array (
  ),
  'LANGUAGE_ID' => 'ru',
  'EVENT_TYPE' => '[ GERMET_QUIZ_FORM ] Новое сообщение из формы "Заказать рассчет стоимости"',
));
            $helper->Event()->saveEventType('GERMET_CALCULATOR_FORM', array (
  'LID' => 'ru',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Новое сообщение из формы "Самостоятельный расчет"',
  'DESCRIPTION' => '#NAME# - Имя элемента
#PHONE# - Телефон
#EMAIL# - Электронная почта
#SQUARE# - Площадь кровли (м2)
#OPERATION# - Операция монтажа
#MATERIAL# - Материал кровли
#PRICE# - Стоимость работ
',
  'SORT' => '150',
));
            $helper->Event()->saveEventType('GERMET_CALCULATOR_FORM', array (
  'LID' => 'en',
  'EVENT_TYPE' => 'email',
  'NAME' => '',
  'DESCRIPTION' => '',
  'SORT' => '150',
));
            $helper->Event()->saveEventMessage('GERMET_CALCULATOR_FORM', array (
  'LID' => 
  array (
    0 => 's1',
    1 => 's6',
  ),
  'ACTIVE' => 'Y',
  'EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#',
  'EMAIL_TO' => 'maximenkoivan@yandex.ru',
  'SUBJECT' => '#SITE_NAME#: Новое сообщение из формы "Самостоятельный расчет"',
  'MESSAGE' => '#SITE_NAME#: Новое сообщение из формы "Самостоятельный расчет"<br>
 --------------------------------------------------------------------------------------<br>
 <br>
 <br>
 <b>#NAME#</b><br>
 <br>
 <b>Телефон:</b> #PHONE#<br>
 <b>Электронная почта:</b> #EMAIL#<br>
 <b>Площадь кровли (м2):</b> #SQUARE# <br>
 <b>Операция монтажа:</b> #OPERATION#<br>
 <b>Материал кровли:</b> #MATERIAL# <br>
 <b>Стоимость работ:</b> #PRICE#<br>
 <br>
 <br>
 --------------------------------------------------------------------------------------<br>
Сообщение сгенерировано автоматически.',
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
  'SITE_TEMPLATE_ID' => 'email_templates',
  'ADDITIONAL_FIELD' => 
  array (
  ),
  'LANGUAGE_ID' => 'ru',
  'EVENT_TYPE' => '[ GERMET_CALCULATOR_FORM ] Новое сообщение из формы "Самостоятельный расчет"',
));
            $helper->Event()->saveEventType('GERMET_ORDER_FORM', array (
  'LID' => 'ru',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Новое сообщение из формы "Заказать услугу"',
  'DESCRIPTION' => '#NAME# - Имя
#PHONE# - Телефон
#SERVICE# - Услуга',
  'SORT' => '150',
));
            $helper->Event()->saveEventType('GERMET_ORDER_FORM', array (
  'LID' => 'en',
  'EVENT_TYPE' => 'email',
  'NAME' => '',
  'DESCRIPTION' => '',
  'SORT' => '150',
));
            $helper->Event()->saveEventMessage('GERMET_ORDER_FORM', array (
  'LID' => 
  array (
    0 => 's1',
    1 => 's6',
  ),
  'ACTIVE' => 'Y',
  'EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#',
  'EMAIL_TO' => 'maximenkoivan@yandex.ru',
  'SUBJECT' => '#SITE_NAME#: Заявка на услугу',
  'MESSAGE' => '#SITE_NAME#: Заявка на услугу<br>
 ------------------------------------------<br>
 <br>
 <br>
 <b>Имя:</b> #NAME#<br>
 <b>Номер телефона:</b> #PHONE#<br>
 <b>Услуга:</b> #SERVICE#<br>
 <br>
 <br>
Сообщение сгенерировано автоматически.',
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
  'SITE_TEMPLATE_ID' => 'email_templates',
  'ADDITIONAL_FIELD' => 
  array (
  ),
  'LANGUAGE_ID' => 'ru',
  'EVENT_TYPE' => '[ GERMET_ORDER_FORM ] Новое сообщение из формы "Заказать услугу"',
));
        }

    public function down()
    {
        //your code ...
    }
}
