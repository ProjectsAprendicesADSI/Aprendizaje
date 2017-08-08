<?php
require_once (__DIR__.'/../clases/classlogin.php');
require_once (__DIR__.'/../clases/classprofesor.php');

if(!empty($_GET['accion'])){
    controllerlogin::main($_GET['accion']);
}else{
    echo "No se encontro ninguna accion...";
    }
class controllerlogin
{
    static function main($action){
        if ($action == "inicio"){
            controllerlogin::inicio();
        }elseif ($action=="fin"){
        controllerlogin::fin();
        }
        }

    static public function inicio (){
       $iniciar= array();

        $iniciar["tipousu"]=$_POST['tipo'];
        $iniciar["usu"]=$_POST['email'];
        $iniciar["pass"]=$_POST['password'];
        session_start();
        $_SESSION["inicio"]=$iniciar;
        $login= new classlogin($iniciar);
       $login->casi();

    }

    static public function fin (){
        session_start();
        session_unset();
        session_destroy();
       header('location:../vistas/index.php');

    }
}