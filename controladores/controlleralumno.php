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
            $arrayalumno['Foto']="../../usuarios/fotos/usuer.jpg";
            $arrayalumno['Pass'] = $_POST['Documento'];
            $arrayalumno['Edad'] = $_POST['Edad'];
            $arrayalumno['Curso'] = $_POST['Curso'];
            $profesor = new classalumno($arrayalumno);

          $profesor->insertar();
          header('Location: ../vistas/admin/crearalumno.php?respuesta=correcto' );
        } catch (Exception $e) {
            echo $e->getMessage();
          header("Location: ../vistas/admin/crearalumno.php?respuesta=error");

        }
    }
    static public function editar    (){
        try {
            $documento=$_POST['Documento'];
            $new=$_FILES['Foto']['name'];
            $directorio='../../usuarios/fotos/';
            $newnew = $directorio.$documento.$new;
            move_uploaded_file($_FILES['Foto']['tmp_name'], "../usuarios/fotos/".$documento.$new);
            $id= ($_GET['id']);

            $arrayprofesor = array();

            $arrayprofesor['Tipodocumento'] = $_POST['Tipodocumento'];
            $arrayprofesor['Documento'] = $_POST['Documento'];
            $arrayprofesor['Nombre'] = $_POST['Nombre'];
            $arrayprofesor['Apellido'] = $_POST['Apellido'];
            $arrayprofesor['Foto'] =$newnew;
            $arrayprofesor['Telefono'] = $_POST['Telefono'];
            $arrayprofesor['Usuario']  =$_POST['Usuario'];
            $arrayprofesor['Pass'] =$_POST['pass1'];
            $arrayprofesor['Edad'] =$_POST['Edad'];
            $arrayprofesor['Curso'] =$_POST['Curso'];
            $arrayprofesor['idestudiente']=$id;
            var_dump($id);
            $profesor = new classalumno($arrayprofesor);
            $profesor->editar();
            header('Location: ../vistas/estudiente/inicio.php' );
        } catch (Exception $e) {
            echo $e->getMessage();
            //header("Location: ../vistas/admin/crearprofesor.php?respuesta=error");
        }
    }

}