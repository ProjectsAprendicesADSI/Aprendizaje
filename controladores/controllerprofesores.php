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
        }else if ($action == "editar2"){
            controllerprofesores::editaradmin();
        }else if ($action == "editar"){
            controllerprofesores::editar();
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
            $arrayprofesor['Foto'] = '../../usuarios/fotos/usuer.jpg';
            $arrayprofesor['Telefono'] = $_POST['Telefono'];
            $arrayprofesor['Telefono2'] = $_POST['Telefono2'];
            $arrayprofesor['Usuario']  =$_POST['Usuario'];
            $arrayprofesor['Pass'] = &$_POST['Documento'];
            $profesor = new classprofesor($arrayprofesor);
            $profesor->insertar();
           header('Location: ../vistas/admin/profesormaterias.php' );
        } catch (Exception $e) {
            echo $e->getMessage();
            header("Location: ../vistas/admin/crearprofesor.php?respuesta=error");
        }
    }
    static public function editaradmin (){
        try {
            $documento=$_POST['Documento'];
            $new=$_FILES['Foto']['name'];
            $directorio='../../usuarios/fotos/';
            $newnew = $directorio.$documento.$new;
            move_uploaded_file($_FILES['Foto']['tmp_name'], "../usuarios/fotos/".$documento.$new);
           $id= ($_GET['id']);

            $arrayprofesor = array();
            $arrayprofesor['idprofesor']=$id;
            $arrayprofesor['Tipodocumento'] = $_POST['Tipodocumento'];
            $arrayprofesor['Documento'] = $_POST['Documento'];
            $arrayprofesor['Nombre'] = $_POST['Nombre'];
            $arrayprofesor['Apellido'] = $_POST['Apellido'];
            $arrayprofesor['Foto'] =$newnew;
            $arrayprofesor['Telefono'] = $_POST['Telefono'];
            $arrayprofesor['Telefono2'] = $_POST['Telefono2'];
            $arrayprofesor['Usuario']  =$_POST['Usuario'];
            $arrayprofesor['Pass'] = &$_POST['pass1'];
            $profesor = new classprofesor($arrayprofesor);

            $profesor->editar();
            header('Location: ../vistas/admin/inicioadmi.php' );
        } catch (Exception $e) {
            echo $e->getMessage();
            header("Location: ../vistas/admin/crearprofesor.php?respuesta=error");
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
            $arrayprofesor['idprofesor']=$id;
            $arrayprofesor['Tipodocumento'] = $_POST['Tipodocumento'];
            $arrayprofesor['Documento'] = $_POST['Documento'];
            $arrayprofesor['Nombre'] = $_POST['Nombre'];
            $arrayprofesor['Apellido'] = $_POST['Apellido'];
            $arrayprofesor['Foto'] =$newnew;
            $arrayprofesor['Telefono'] = $_POST['Telefono'];
            $arrayprofesor['Telefono2'] = $_POST['Telefono2'];
            $arrayprofesor['Usuario']  =$_POST['Usuario'];
            $arrayprofesor['Pass'] = &$_POST['pass1'];
            $profesor = new classprofesor($arrayprofesor);

            $profesor->editar();
            header('Location: ../vistas/profesor/inicioprofe.php' );
        } catch (Exception $e) {
            echo $e->getMessage();
            header("Location: ../vistas/admin/crearprofesor.php?respuesta=error");
        }
    }
}