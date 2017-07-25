<?php
require_once (__DIR__.'/../clases/classalumno.php');
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 24/07/2017
 * Time: 22:47
 */
if(!empty($_GET['action'])){
    controlleralumno::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class controlleralumno
{
    static function main($action){
        if ($action == "crear"){
            controlleralumno::crear();
        }else if ($action == "editar"){
            controlleralumno::editar();
        }else if ($action == "buscarID"){
            controlleralumno::buscarID();
        }else if ($action == "ActivarEspecialidad"){
            controlleralumno::ActivarEspecialidad();
        }else if ($action == "InactivarEspecialidad"){
            controlleralumno::InactivarEspecialidad();
        }
    }

    static public function crear (){
        try {
            $arrayalumno = array();
            $arrayalumno['Tipodocumento'] = $_POST['Tipodocumento'];
            $arrayalumno['Documento'] = $_POST['Documento'];
            $arrayalumno['Nombre'] = $_POST['Nombre'];
            $arrayalumno['Apellido'] = $_POST['Apellido'];
            $arrayalumno['Telefono'] = $_POST['Telefono'];
            $arrayalumno['Usuario']  =$_POST['Usuario'];
            $arrayalumno['Pass'] = $_POST['Pass'];
            $arrayalumno['Edad'] = $_POST['Edad'];
            $arrayalumno['Curso'] = $_POST['Curso'];
            $profesor = new classalumno($arrayalumno);
          $profesor->insertar();
          header('Location: ../vistas/admin/crearalumno.php?respuesta=correcto' );
        } catch (Exception $e) {
            var_dump($e);
            //header("Location: ../vistas/admin/crearalumno.php?respuesta=error");

        }
    }

}