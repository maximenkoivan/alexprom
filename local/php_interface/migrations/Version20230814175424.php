<?php

namespace Sprint\Migration;


class Version20230814175424 extends Version
{
    protected $description = "Свет / Заказать звонок";

    protected $moduleVersion = "4.2.4";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Event()->saveEventType('CALLBACK_FORM', array (
  'LID' => 'ru',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Заявка на обратный звонок',
  'DESCRIPTION' => '#AUTHOR# - Имя
#AUTHOR_PHONE# - Номер телефона',
  'SORT' => '150',
));
            $helper->Event()->saveEventType('CALLBACK_FORM', array (
  'LID' => 'en',
  'EVENT_TYPE' => 'email',
  'NAME' => '',
  'DESCRIPTION' => '',
  'SORT' => '150',
));
            $helper->Event()->saveEventMessage('CALLBACK_FORM', array (
  'LID' => 
  array (
    0 => 's2',
  ),
  'ACTIVE' => 'Y',
  'EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#',
  'EMAIL_TO' => '#DEFAULT_EMAIL_FROM#',
  'SUBJECT' => 'Заявка на обратный звонок',
  'MESSAGE' => '<b>Имя:</b> #AUTHOR#<br>
 <b>Номер телефона:</b> #AUTHOR_PHONE#',
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
  'EVENT_TYPE' => '[ CALLBACK_FORM ] Заявка на обратный звонок',
));
        }

    public function down()
    {
        //your code ...
    }
}
