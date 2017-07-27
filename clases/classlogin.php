<?php
require_once ('db_abstract_class.php');
require_once ("classprofesor.php");
require_once ("classalumno.php");

/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 24/07/2017
 * Time: 0:50
 */
class classlogin extends db_abstract_class
{
    private $tipousu;
    private $usu;
    private $pass;

    public function __construct($Asignatura_data = array())
    {

        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($Asignatura_data)>1){ //
            foreach ($Asignatura_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
            $this->tipousu = "";
            $this->usu = "";
            $this->pass = "";
        }
    }

    public  function casi(){

        switch ($this->tipousu){
            case "profesor":

                $arrprofesor = classprofesor::validar($this->usu,$this->pass);

                if (count($arrprofesor) > 0){
                    if($this->usu=="admin"){
                        header("Location: ../vistas/admin/inicioadmi.php");

                    }else{
                    header("Location: ../vistas/profesor/inicioprofe.php");
                    }
                }else {

                    header('location:../vistas/index.php?respuesta=error');
                }
                break;
            case "estudiante":

                $arrestudiante=classalumno::validar($this->usu,$this->pass);
                if (count($arrestudiante)>0){
                    header("location: ../vistas/estudiente/inicio.php");
                }else{
                    header('location:../vistas/index.php?respuesta=error');
                }
                break;
            case "acudiente":
                echo "acudiente";
                break;
        }

    }


    protected static function buscarForId($id)
    {
        // TODO: Implement buscarForId() method.
    }

    protected static function buscar($query)
    {

    }

    protected static function getAll()
    {
        // TODO: Implement getAll() method.
    }

    protected function insertar()
    {
        // TODO: Implement insertar() method.
    }

    protected function editar()
    {
        // TODO: Implement editar() method.
    }

    protected function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }
    /**
     * @return mixed
     */
    public function getTipousu()
    {
        return $this->tipousu;
    }

    /**
     * @param mixed $tipousu
     */
    public function setTipousu($tipousu)
    {
        $this->tipousu = $tipousu;
    }

    /**
     * @return mixed
     */
    public function getUsu()
    {
        return $this->usu;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsu($usu)
    {
        $this->usuario = $usu;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

}