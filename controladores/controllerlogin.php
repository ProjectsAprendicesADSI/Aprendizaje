<?php
require_once (__DIR__.'/../clases/classlogin.php');
require_once (__DIR__.'/../clases/classprofesor.php');

if(!empty($_GET['action'])){
    controllerlogin::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
    }
class controllerlogin
{
    static function main($action){
        if ($action == "inicio"){
            controllerlogin::inicio();
        }
        }

    static public function inicio (){
       $iniciar= array();
        $tipo=$_POST["tipo"];
        $iniciar["tipousu"]=$_POST['tipo'];
        $iniciar["usuario"]=$_POST['usuario'];
        $iniciar["pass"]=$_POST['pass'];

        $login= new classlogin($iniciar);
       $login->validar();



    }
}