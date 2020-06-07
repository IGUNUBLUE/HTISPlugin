<?php

namespace FacturaScripts\Plugins\HtisPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditService extends EditController {
    public function getModelClassName()
    {
        return 'Service';
    }

    public function getPageData()
    {
        $page = parent::getPageData();
        $page['menu'] = 'HTIS Plugin';
        $page['title'] = 'Servicio #';
        $page['icon'] = 'fas fa-tools';

        return $page;
    }
}