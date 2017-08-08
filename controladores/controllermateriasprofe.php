<?php
require_once (__DIR__.'/../clases/classprofesormaterias.php');

if(!empty($_GET['action'])){
    controllermateriasprofe::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class controllermateriasprofe
{
    static function main($action){
        if ($action == "crear"){
            controllermateriasprofe::crear();
        }else if ($action == "editar"){
            controllermateriasprofe::editar();
        }else if ($action == "prueba"){
            controllermateriasprofe::prueba();
        }else if ($action == "ActivarEspecialidad"){
            controllermateriasprofe::ActivarEspecialidad();
        }else if ($action == "InactivarEspecialidad"){
            controllermateriasprofe::InactivarEspecialidad();

        }
    }

    static public function crear (){
        try {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                session_start();
                $id=$_SESSION['id'];
                $numero=$_POST["numero"];
                $count = count($numero);
                for ($i = 0; $i < $count; $i++){
                    $profesor=array();
                    $profesor['profesor']=$id;
                    $profesor['asignatura']=$numero[$i];
                   $profematerias=new classprofesormaterias($profesor);
                   $profematerias->insertar();
                    header('Location: ../vistas/admin/crearprofesor.php?respuesta=correcto' );
                }
                }
                else{
                echo 'seleccione';
                    header("Location: ../vistas/admin/profesormaterias.php?respuesta=null");
                }
        } catch (Exception $e) {

        }
    }

}
