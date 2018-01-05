<?php
namespace UfNamespace\PbcClass;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;

class PbcClass extends AbstractExternalModule {

    function query() {
        $module = \ExternalModules\ExternalModules::getModuleInstance('redcap_oncore_client', 'v1.0');
        $client = $module->getSoapClient();

        $result = $client->request('getProtocol', array('protocolNo' => 'OCR20002'));

        print_r($result);
    }

}
