<?php
require_once (__DIR__.'/../clases/classtrabajo.php');
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 26/07/2017
 * Time: 23:26
 */

if(!empty($_GET['action'])){
    controllertrabajo::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class controllertrabajo
{
    static function main($action){
        if ($action == "crear"){
            controllertrabajo::crear();
        }else if ($action == "desactivar"){
            controllertrabajo::desactivar();
        }else if ($action == "ativar"){
            controllertrabajo::activar();
        }else if ($action == "ActivarEspecialidad"){
            controllertrabajo::ActivarEspecialidad();
        }else if ($action == "InactivarEspecialidad"){
            controllertrabajo::InactivarEspecialidad();
        }
    }

    public function crear(){
        try {

            $estudent=base64_decode($_POST['idalumno']);
            $documento=base64_decode($_POST['documento']);
            $trabajo=base64_decode($_POST['trabajo']);

            $new=$_FILES['archivose']['name'];
            $directorio='../../usuarios/trabajos/';
            $newnew = $directorio.$documento.$new;
            move_uploaded_file($_FILES['archivose']['tmp_name'], "../usuarios/trabajos/".$documento.$new);

                $nota=array();
                $nota['alumno']=$estudent;
                $nota['trabajo']=$trabajo;
                $nota['urltrabajo']=$newnew;
                $nota['nota']= 'aprobado';
                $notaa=new classtrabajo($nota);
                $notaa->insertar();

            header('Location: ../vistas/estudiente/inicio.php?respuesta='.base64_encode("exito") );
        } catch (Exception $e) {
            echo $e->getMessage();
            header("Location: ../vistas/estudiente/inicio.php?respuesta=".base64_encode("noerror"));
        }
    }
   public function desactivar(){
       $id=$_GET['id'];
       $id2=$_GET['trabajo'];
       $nota= new classtrabajo();
       $nota->desactivar($id,$id2);
       //header("Location: ../vistas/profesor/verdatos.php?id=".$id2);
    }
    public function activar(){
       $id=$_GET['id'];
       $id2=$_GET['trabajo'];
    $nota= new classtrabajo();
    $nota->activar($id,$id2);
        //header("Location: ../vistas/profesor/verdatos.php?id=".$id2);
    }
}