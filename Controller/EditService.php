<?php

namespace FacturaScripts\Plugins\HtisPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditService extends EditController {
    public function getModelClassName()
    {
        return 'Service';
    }

    /**public function getPageData()
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'HTIS Plugin';
        $pageData['title'] = 'Servicios';
        $pageData['icon'] = 'fas fa-tools';

        return $pagedata;
    }*/
}