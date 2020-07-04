<?php

namespace FacturaScripts\Plugins\HTISPlugin;

use FacturaScripts\Core\Base\InitClass;

class Init extends InitClass
{
   public function init()
   {
      $this->loadExtension(new Extension\Controller\EditCliente());
   }

   public function update()
   {;
   }
}
