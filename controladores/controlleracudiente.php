<?php
require_once (__DIR__.'/../clases/classalumno.php');
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 24/07/2017
 * Time: 22:47
 */
if(!empty($_GET['action'])){
    controlleracudiente::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class controlleracudiente
{
    static function main($action){
        if ($action == "crear"){
            controlleracudiente::crear();
        }else if ($action == "editar"){
            controlleracudiente::editar();
        }else if ($action == "buscarID"){
            controlleracudiente::buscarID();
        }else if ($action == "ActivarEspecialidad"){
            controlleracudiente::ActivarEspecialidad();
        }else if ($action == "InactivarEspecialidad"){
            controlleracudiente::InactivarEspecialidad();
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
            header('Location: ../vistas/admin/crearacudiente.php.php?respuesta=correcto' );
        } catch (Exception $e) {
            echo $e->getMessage();
            header("Location: ../vistas/admin/crearacudiente.php?respuesta=error");

        }
    }

}