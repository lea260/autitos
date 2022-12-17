<?php

require_once 'entidades/articulo.php';
class Auto_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje        = "";
        $this->view->resultadoLogin = "";
    }

    //base+articulos
    public function render()
    {
        //$alumnos = $this->model->get();
        $this->view->mensaje = "cargado";
        $this->view->render('articulos/index');
    }

    public function enVenta($param = null)
    {
        //lista los articulos
        $this->view->lista = $this->model->enVenta();
        $this->view->render('auto/enVenta');
    } //end listar

}