<?php

namespace Sprint\Migration;


class Version20240711195901 extends Version
{
    protected $description   = "Герметизация швов";
    protected $moduleVersion = "4.2.4";

    /**
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $this->getExchangeManager()
             ->HlblockElementsImport()
             ->setExchangeResource('hlblock_elements.xml')
             ->setLimit(20)
             ->execute(function ($item) {
                 $this->getHelperManager()
                      ->Hlblock()
                      ->saveElementByXmlId(
                          $item['hlblock_id'],
                          $item['fields']
                      );
             });
    }

    /**
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function down()
    {
        $this->getExchangeManager()
             ->HlblockElementsImport()
             ->setExchangeResource('hlblock_elements.xml')
             ->setLimit(20)
             ->execute(function ($item) {
                 $this->getHelperManager()
                      ->Hlblock()
                      ->deleteElementByXmlId(
                          $item['hlblock_id'],
                          $item['fields']['UF_XML_ID']
                      );
             });
    }


}
