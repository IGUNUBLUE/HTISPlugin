<?php
namespace FacturaScripts\Plugins\HTISPlugin\Extension\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

class EditCliente
{
   public function createViews()
   {
      return function() {
          $this->addListView('ListService', 'Service', 'Servicios', 'fas fa-tools');
        };
   }
   
   public function loadData() 
   {
       return function($viewName, $view)
       {
            switch ($viewName) 
            {
                case 'ListService':
                    $codcliente = $this->getViewModelValue('EditCliente', 'codcliente');
                    $where = [new DataBaseWhere('codcliente', $codcliente)];
                    $view->loadData('', $where);
                    break;

                default:
                    parent::loadData($viewName, $view);
                    break;     
            }
       };
    }
}