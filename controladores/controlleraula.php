<?php
require_once (__DIR__.'/../clases/classaula.php');

if(!empty($_GET['action'])){
    controlleraula::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class controlleraula
{
    static function main($action){
        if ($action == "crear"){
            controlleraula::crear();
        }else if ($action == "editar"){
            controlleraula::editar();
        }else if ($action == "buscarID"){
            controlleraula::buscarID();
        }else if ($action == "ActivarEspecialidad"){
            controlleraula::ActivarEspecialidad();
        }else if ($action == "InactivarEspecialidad"){
            controlleraula::InactivarEspecialidad();

        }
    }
    static public function crear (){
        try {
            $arrayaula = array();
            $arrayaula['Nombre'] = $_POST['Nombre'];
            $arrayaula['Estado'] = $_POST['Estado'];
            $aula = new classaula($arrayaula);
            $aula->insertar();
            header('Location: ../vistas/admin/aulas.php?respuesta=correcto' );
        } catch (Exception $e) {
           // header("Location: ../vistas/admin/aulas.php?respuesta=error");

        }
    }
}
