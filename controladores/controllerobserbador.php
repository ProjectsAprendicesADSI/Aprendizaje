<?php
require_once (__DIR__.'/../clases/classobservador.php');
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 11/07/2017
 * Time: 10:43
 */
if(!empty($_GET['action'])){
    controllerobserbador::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class controllerobserbador
{
    static function main($action){
        if ($action == "crear"){
            controllerobserbador::crear();
        }else if ($action == "editar"){
            controllerobserbador::editar();
        }else if ($action == "prueba"){
            controllerobserbador::prueba();
        }else if ($action == "ActivarEspecialidad"){
            controllerobserbador::ActivarEspecialidad();
        }else if ($action == "InactivarEspecialidad"){
            controllerobserbador::InactivarEspecialidad();
        }
    }
    static public function crear (){
        try {
            $arraymaterias = array();
            $arraymaterias['observacion'] = $_POST['observacion'];
            $arraymaterias['estudiente_idestudiante'] = $_POST['alumno'];
            $arraymaterias['fecha'] =date("Y-m-d") ;

            $materia = new classobservador($arraymaterias);
            $materia->insertar();

            header('Location: ../vistas/profesor/inicioprofe.php?respuesta=correcto' );
        } catch (Exception $e) {
            header('Location: ../vistas/profesor/inicioprofe.php?respuesta=error');
        }
    }
}