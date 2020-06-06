<?php

namespace FacturaScripts\Plugins\HtisPlugin\Model;

use FacturaScripts\Core\Model\Base;

class Service extends Base\ModelClass {
    use Base\ModelTrait;

    public $codcliente;
    public $creationdate;
    public $description;
    public $idservice;
    public $name;
    public $total;
    public $user;
    public $verified;

    public static function primaryColumn()
    {
        return 'idservice';
    }

    public static function tableName()
    {
        return 'services';
    }
}
