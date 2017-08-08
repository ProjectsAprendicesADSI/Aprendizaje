<?php
require_once ('db_abstract_class.php');
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 27/07/2017
 * Time: 21:33
 */
class classprofesormaterias extends db_abstract_class
{

    private $profesor;
    private $asignatura;

    public function __construct($profasig_data = array())
    {

        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($profasig_data)>1){ //
            foreach ($profasig_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
            $this->profesor= "";
            $this->asignatura= "";
            ;


        }
    }

    protected static function buscarForId($id)
    {
        // TODO: Implement buscarForId() method.
    }

    protected static function buscar($query)
    {
        // TODO: Implement buscar() method.
    }

    protected static function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function insertar()
    {
        $this->insertRow("INSERT INTO profesor_asigaturas VALUES (?, ?)", array(
            $this->profesor,
            $this->asignatura,

        )
        );
        $this->Disconnect();
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
    public function getProfesor()
    {
        return $this->profesor;
    }

    /**
     * @param mixed $profesor
     */
    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;
    }

    /**
     * @return mixed
     */
    public function getAsignatura()
    {
        return $this->asignatura;
    }

    /**
     * @param mixed $asignatura
     */
    public function setAsignatura($asignatura)
    {
        $this->asignatura = $asignatura;
    }


}