<?php
require_once (__DIR__.'/../clases/classprofesor.php');
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 11/07/2017
 * Time: 10:43
 */
if(!empty($_GET['action'])){
    controllerprofesores::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class controllerprofesores
{
    static function main($action){
        if ($action == "crear"){
            controllerprofesores::crear();
        }else if ($action == "editar"){
            controllerprofesores::editar();
        }else if ($action == "buscarID"){
            controllerprofesores::buscarID();
        }else if ($action == "ActivarEspecialidad"){
            controllerprofesores::ActivarEspecialidad();
        }else if ($action == "InactivarEspecialidad"){
            controllerprofesores::InactivarEspecialidad();
        }
    }
    static public function crear (){
        try {
            $arrayprofesor = array();
            $arrayprofesor['Tipodocumento'] = $_POST['Tipodocumento'];
            $arrayprofesor['Documento'] = $_POST['Documento'];
            $arrayprofesor['Nombre'] = $_POST['Nombre'];
            $arrayprofesor['Apellido'] = $_POST['Apellido'];
            $arrayprofesor['Foto'] = $_POST['Usuario'];;
            $arrayprofesor['Telefono'] = $_POST['Telefono'];
            $arrayprofesor['Telefono2'] = $_POST['Telefono2'];
            $arrayprofesor['Usuario']  =$_POST['Usuario'];
            $arrayprofesor['Contrasenha'] = &$_POST['Contrasenha'];
            $profesor = new classprofesor($arrayprofesor);
            $profesor->insertar();
           header('Location: ../vistas/admin/profesormaterias.php' );
        } catch (Exception $e) {

            header("Location: ../vistas/admin/crearprofesor.php?respuesta=error");
        }
    }
}