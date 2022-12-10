<?php
require_once 'models/Usuario_Model.php';
class Login_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje        = "";
        $this->view->resultadoLogin = "";
    }

    //base+login
    public function render()
    {
        //$alumnos = $this->model->get();
        $this->view->alumnos = "cargado";
        $this->view->render('login/index');
    }

    public function ingresar()
    {

        $this->view->render('login/ingresar');
    }

    public function entrar()
    {

        try {

            $nombre  = $_POST['nombre'];
            $usuario = new Usuario_Model();
            $res     = $usuario->entrar($nombre);
            if ($res->log) {
                $_SESSION['esta_log'] = $res->log;
                $_SESSION['rol']      = $res->rol;
            }
        } catch (Exception $th) {
            //throw $th;
        }

        $this->view->render('login/entrar');
    }

    public function salir()
    {
        //$_SESSION["estalogueado"] = false;
        unset($_SESSION["estalogueado"]);
        unset($_SESSION["nombre"]);
        session_destroy();
        $this->view->render('index/index');

    }
}