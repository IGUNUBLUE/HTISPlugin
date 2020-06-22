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
        //$this->addSearchFields('ListService', ['idservice', 'codcliente', 'user']);
        
       //filters
        $this->addFilterAutocomplete('ListService', 'codcliente', 'name', 'codcliente', 'clientes', 'codcliente', 'nombre');
        $this->addFilterPeriod('ListService', 'creationdate', 'period', 'creationdate');
        $this->addFilterCheckbox('ListService', 'verified', 'Reparado');
        $this->addOrderBy('ListService', ['creationdate'], 'creation-date', 2);
    }
}