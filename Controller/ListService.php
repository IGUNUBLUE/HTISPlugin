<?php

namespace FacturaScripts\Plugins\HTISPlugin\Controller;

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
        
        // Filters
        $this->addSearchFields('ListService', ['user']);
        $this->addFilterAutocomplete('ListService', 'codcliente', 'name', 'codcliente', 'clientes', 'codcliente', 'nombre');
        $this->addFilterPeriod('ListService', 'creationdate', 'period', 'creationdate');
        $this->addFilterCheckbox('ListService', 'verified', ' NO reparados', 'verified', 'IS NOT');
        
        // OrderBy
        $this->addOrderBy('ListService', ['creationdate'], 'creation-date', 2);
    }
}