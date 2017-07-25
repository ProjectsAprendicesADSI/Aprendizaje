<?php
require_once ('db_abstract_class.php');
/**
 * Created by PhpStorm.
 * User: Camilo
 * Date: 24/07/17
 * Time: 1:52 PM
 */
class classcursos extends db_abstract_class
{
  private $idcurso;
  private $Nombre;
  private $Jornada;
  private $Aula;

    public function __construct($Asignatura_data = array())
    {

        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($Asignatura_data)>1){ //
            foreach ($Asignatura_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
            $this->idcurso= "";
            $this->Nombre = "";
            $this->Jornada = "";
            $this->Aula="";
        }
    }
    public static function buscarForId($id)
    {
        // TODO: Implement buscarForId() method.
    }

    public static function buscar($query)
    {
        // TODO: Implement buscar() method.
    }

    public static function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function insertar()
    {
        // TODO: Implement insertar() method.
        echo $this->Aula." " ;
        $this->insertRow("INSERT INTO cursos VALUES (NULL, ?, ?, ?)", array(
                $this->Nombre,
                $this->Jornada,
                $this->Aula,
            )
                    );
        $this->Disconnect();
    }

    public function editar()
    {
        // TODO: Implement editar() method.
    }

    public function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }


    /**
     * @return mixed
     */
    public function getIdcurso()
    {
        return $this->idcurso;
    }

    /**
     * @param mixed $idcurso
     */
    public function setIdcurso($idcurso)
    {
        $this->idcurso = $idcurso;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return mixed
     */
    public function getJornada()
    {
        return $this->Jornada;
    }

    /**
     * @param mixed $Jornada
     */
    public function setJornada($Jornada)
    {
        $this->Jornada = $Jornada;
    }

    /**
     * @return mixed
     */
    public function getAula()
    {
        return $this->Aula;
    }

    /**
     * @param mixed $Aula
     */
    public function setAula($Aula)
    {
        $this->Aula = $Aula;
    }


}