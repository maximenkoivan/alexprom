<?php

namespace Sprint\Migration;


class Version20230914161608 extends Version
{
    protected $description = "Форма обратной связи";

    protected $moduleVersion = "4.2.4";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Event()->saveEventType('FEEDBACK_FORM', array (
  'LID' => 'ru',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Новое сообщение из формы обратной связи',
  'DESCRIPTION' => '#AUTHOR# - Автор сообщения
#AUTHOR_PHONE# - Номер телефона
#FORM_NAME# - Наименование формы
#SERVICE_NAME# - Наименование услуги',
  'SORT' => '150',
));
            $helper->Event()->saveEventType('FEEDBACK_FORM', array (
  'LID' => 'en',
  'EVENT_TYPE' => 'email',
  'NAME' => '',
  'DESCRIPTION' => '',
  'SORT' => '150',
));
            $helper->Event()->saveEventMessage('FEEDBACK_FORM', array (
  'LID' => 
  array (
    0 => 's1',
  ),
  'ACTIVE' => 'Y',
  'EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#',
  'EMAIL_TO' => '#DEFAULT_EMAIL_FROM#',
  'SUBJECT' => '#SERVER_NAME#: Сообщение из формы обратной связи "#FORM_NAME#"',
  'MESSAGE' => 'Информационное сообщение сайта&nbsp;#SERVER_NAME#<br>
 ------------------------------------------<br>
 <br>
 Вам было отправлено сообщение через форму "#FORM_NAME#"<br>
 <br>
 <br>
 <b>Имя:</b> #AUTHOR#<br>
 <b>Номер телефона:</b> #AUTHOR_PHONE#<br>
 <b>Наименование услуги:</b>&nbsp;#SERVICE_NAME#<br>
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
  'EVENT_TYPE' => '[ FEEDBACK_FORM ] Новое сообщение из формы обратной связи',
));
        }

    public function down()
    {
        //your code ...
    }
}
