<?php

namespace FacturaScripts\Plugins\HTISPlugin\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditService extends EditController
{
    public function getModelClassName()
    {
        return 'Service';
    }

    public function getPageData()
    {
        $page = parent::getPageData();
        $page['menu'] = 'HTIS Plugin';
        $page['title'] = 'Servicio';
        $page['icon'] = 'fas fa-tools';

        return $page;
    }

    protected function createViews()
    {
        parent::createViews();

        $this->addListView('ListService', 'Service', 'Historial', 'fas fa-tools');
        $this->setTabsPosition('top');
    }

    protected function loadData($viewName, $view)
    {
        switch ($viewName) {
            case 'ListService':
                $codcliente = $this->getViewModelValue('EditService', 'codcliente');
                $where = [new DataBaseWhere('codcliente', $codcliente)];
                $view->loadData('', $where);
                break;

            default:
                parent::loadData($viewName, $view);
                if (!$this->views[$viewName]->model->exists()) {
                    $this->views[$viewName]->model->user = $this->user->nick;
                }
                break;
        }
    }
}
