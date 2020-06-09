<?php

namespace FacturaScripts\Plugins\HtisPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListService extends ListController {
    public function getPageData()
    {
        $page = parent::getPageData();
        $page['menu'] = 'HTIS Plugin';
        $page['title'] = 'Servicios';
        $page['icon'] = 'fas fa-tools';

        return $page;
    }

    protected function createViews()
    {
        $this->addView('ListService', 'Service');
        $this->addSearchFields('ListService', ['idservice', 'codcliente', 'user']);
        
       //filter
        $this->addFilterCheckbox('ListProject', 'verified');
    }
}