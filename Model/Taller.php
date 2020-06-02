<?php
namespace FacturaScripts\Plugins\HtisPlugin\Model;

use FacturaScripts\Core\Model\Base;

class Taller extends Base\ModelClass {
    use Base\ModelTrait;

    public $creationdate;
    public $idtaller;
    public $name;

    public static function primaryColumn()
    {
        return 'idtaller';
    }

    public static function tableName()
    {
        return 'talleres';
    }
}
