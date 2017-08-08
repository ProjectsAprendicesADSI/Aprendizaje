<?php
require_once (__DIR__.'/../clases/classcursos.php');

if(!empty($_GET['action'])){
    controllercursos::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class controllercursos
{
    static function main($action){
        if ($action == "crear"){
            controllercursos::crear();
        }else if ($action == "editar"){
            controllercursos::editar();
        }else if ($action == "buscarID"){
            controllercursos::buscarID();
        }else if ($action == "ActivarEspecialidad"){
            controllercursos::ActivarEspecialidad();
        }else if ($action == "InactivarEspecialidad"){
            controllercursos::InactivarEspecialidad();


        
        }
        }
    static public function crear (){
        try {
            $arraycursos = array();
            $arraycursos['Nombre'] = $_POST['Nombre'];
            $arraycursos['Estado'] = $_POST['Estado'];
            $arraycursos['Jornada'] = $_POST['Jornada'];
            $arraycursos['Aula'] = $_POST['Aula'];
            $curso = new classcursos($arraycursos);
            $curso->insertar();

            header('Location: ../vistas/admin/cursos.php?respuesta=correcto' );
        } catch (Exception $e) {
           // header("Location: ../vistas/admin/cursos.php?respuesta=error");

        }
    }
        }