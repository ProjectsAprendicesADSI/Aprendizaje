<?php
require_once ('db_abstract_class.php');
require ("classprofesor.php");

/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 24/07/2017
 * Time: 0:50
 */
class classlogin extends db_abstract_class
{
    private $tipousu;
    private $usuario;
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
            $this->usuario = "";
            $this->pass = "";
        }
    }
    public  function validar(){


                $inicio=classprofesor::buscar('SELECT * FROM profesor  where Usuario  = \' '.$this->usuario.'\' and Contraseha = \' '.$this->pass.'\'');
                if(count($inicio) > 0){
                    header('Location: ../vistas/profesor/inicioprofe.php' );
                }else{
               var_dump($inicio);
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
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
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