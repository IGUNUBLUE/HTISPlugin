<?php
namespace FacturaScripts\Plugins\HtisPlugin\Model;

use FacturaScripts\Core\Model\Base;

class Service extends Base\ModelClass {
    use Base\ModelTrait;

    public $creationdate;
    public $idservice;
    public $name;

    public static function primaryColumn()
    {
        return 'idservice';
    }

    public static function tableName()
    {
        return 'services';
    }
}
