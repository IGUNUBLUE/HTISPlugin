<?php

namespace FacturaScripts\Plugins\HtisPlugin\Model;

use FacturaScripts\Core\Model\Base;

class Service extends Base\ModelClass {
    use Base\ModelTrait;

    public $codcliente;
    public $creationdate;
    public $detail;
    public $diagnostic;
    public $exitdate;
    public $idservice;
    public $manufacturer;
    public $model;
    public $problem;
    public $solution;
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
