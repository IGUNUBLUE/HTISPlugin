<?php
namespace FacturaScripts\Plugins\HtisPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListTaller extends ListController
{
    public function getPageData()
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'HTIS Plugin';
        $pageData['title'] = 'Taller';
        $pageData['icon'] = 'fas fa-file';

        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListTaller', 'Taller');
        $this->addSearchFields('ListTaller', ['name']);
        $this->addOrderBy('ListTaller', ['name'], 'name');
    }
}