<?php
require_once (__DIR__.'/../clases/classtrabajocrear.php');
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 30/07/2017
 * Time: 16:36
 */

if(!empty($_GET['action'])){
    controllertrabajocrar::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class controllertrabajocrar
{
    static function main($action){
        if ($action == "crear"){
            controllertrabajocrar::crear();
        }else if ($action == "editar"){
            controllertrabajocrar::editar();
        }else if ($action == "buscarID"){
            controllertrabajocrar::buscarID();
        }else if ($action == "ActivarEspecialidad"){
            controllertrabajocrar::ActivarEspecialidad();
        }else if ($action == "InactivarEspecialidad"){
            controllertrabajocrar::InactivarEspecialidad();
        }
    }

    public function crear(){
        try {
            $arraymaterias = array();
            $arraymaterias['Nombre'] = $_POST['Nombre'];
            $arraymaterias['descripcion'] = $_POST['descripcion'];
            $arraymaterias['Asigaturas_idAsigaturas'] = $_POST['materias'];
            $arraymaterias['tiempo'] = $_POST['date'];
            $arraymaterias['Estado'] = "activo";
            $arraymaterias['Profesor'] = $_POST['idprofesor'];

            $materia = new classtrabajocrear($arraymaterias);
           $materia->insertar();
           header('Location: ../vistas/profesor/trabajo.php?respuesta=correcto' );
        } catch (Exception $e) {
          echo $e->getMessage();
          // header("Location: ../vistas/admin/Materias.php?respuesta=error");
        }
    }

}