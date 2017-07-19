<?php
require_once (__DIR__.'/../clases/classmaterias.php');
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 11/07/2017
 * Time: 9:07
 */
if(!empty($_GET['action'])){
    controllermaterias::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class controllermaterias
{
    static function main($action){
        if ($action == "crear"){
            controllermaterias::crear();
        }else if ($action == "editar"){
            controllermaterias::editar();
        }else if ($action == "buscarID"){
            controllermaterias::buscarID();
        }else if ($action == "ActivarEspecialidad"){
            controllermaterias::ActivarEspecialidad();
        }else if ($action == "InactivarEspecialidad"){
            controllermaterias::InactivarEspecialidad();
        }
    }

    static public function crear (){
        try {
            $arraymaterias = array();
            $arraymaterias['Nombre'] = $_POST['Nombre'];
            $arraymaterias['Horas'] = $_POST['Horas'];
            $arraymaterias['Estado'] = $_POST['Estado'];
            $materia = new classmaterias($arraymaterias);
            $materia->insertar();
            header('Location: ../vistas/admin/Materias.php?respuesta=correcto' );
        } catch (Exception $e) {
           header("Location: ../vistas/admin/Materias.php?respuesta=error");
        }
    }
}