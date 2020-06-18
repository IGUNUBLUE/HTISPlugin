<?php
namespace FacturaScripts\Plugins\HtisPlugin\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Controller\EditCliente as ParentController;

class EditCliente extends ParentController {
    protected function createViews() {
        parent::createViews();
        
        $this->addListView('ListService', 'Service', 'Servicios');
    }
    
    protected function loadData($viewName, $view)
    {
       switch ($viewName) {
           case 'ListService':
               $codcliente = $this->getViewModelValue('EditCliente', 'codcliente');
               $where = [new DataBaseWhere('codcliente', $codcliente)];
               $view->loadData('', $where);
               break;

           default:
               parent::loadData($viewName, $view);
               break;
       }
    }
}