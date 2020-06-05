<?php

namespace FacturaScripts\Plugins\HtisPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListService extends ListController {
    public function getPageData()
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'HTIS Plugin';
        $pageData['title'] = 'Servicios';
        $pageData['icon'] = 'fas fa-tools';

        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListService', 'Service');
        $this->addSearchFields('ListService', ['name']);
        $this->addOrderBy('ListService', ['name'], 'name');
    }
}