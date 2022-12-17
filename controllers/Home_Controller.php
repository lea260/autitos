<?php

require_once 'models/Auto_Model.php';
class Home_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function hora()
    {
        $date = new DateTime('2000-12-17 23:13:10', new DateTimeZone('America/Montevideo'));
        //echo $date->format('Y-m-d H:i:s') . "\n";
        echo "\n";
        $date->setTimezone(new DateTimeZone('America/Montevideo'));
        echo $date->format('Y-m-d H:i:s') . "\n";

    }
    public function hora2()
    {
        $datetime = date("Y-m-d H:i:s");
        $utc      = new DateTime($datetime, new DateTimeZone('UTC'));
        $utc->setTimezone(new DateTimeZone('America/Montevideo'));
        echo $utc->format('Y-m-d H:i:s');

    }

    public function test()
    {
        echo "<pre>";
        $auto  = new Auto_Model();
        $lista = $auto->enVenta();
        var_dump($lista);
        echo "</pre>";
    }
}