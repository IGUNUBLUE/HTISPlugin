<?php

namespace FacturaScripts\Plugins\HtisPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditService extends EditController {
    public function getModelClassName()
    {
        return 'Service';
    }
}