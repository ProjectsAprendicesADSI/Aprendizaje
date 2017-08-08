<?php
require_once ('db_abstract_class.php');
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 30/07/2017
 * Time: 16:37
 */
class classtrabajocrear extends db_abstract_class
{
    private $idtrabajo;
    private $Nombre;
    private $descripcion;
    private $Asigaturas_idAsigaturas;
    private $tiempo;
    private $Estado;
 private $Profesor;

    public function __construct($profasig_data = array())
    {

        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($profasig_data)>1){ //
            foreach ($profasig_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
            $this->idtrabajo= "";
            $this->Nombre= "";
            $this->descripcion= "";
            $this->Asigaturas_idAsigaturas= "";
            $this->tiempo= "";
            $this->Estado="";
            $this->Profesor="";
        }
    }

    public static function buscarForId($id)
    {
        $materias = new classtrabajocrear();
        if ($id > 0){
            $getrow =$materias->getRow("SELECT * FROM trabajos WHERE idtrabajos =?", array($id));
            $materias->idtrabajo = $getrow['idtrabajos'];
            $materias->Nombre = $getrow['Nombre'];
            $materias->descripcion = $getrow['descripcion'];
            $materias->Asigaturas_idAsigaturas = $getrow['Asigaturas_idAsigaturas'];
            $materias->tiempo=$getrow["tiempo"];
            $materias->Estado=$getrow["Estado"];
            $materias->Profesor=$getrow["Profesor"];

            $materias->Disconnect();
            return $materias;
        }else{
            return NULL;
        }
    }

    protected static function buscar($query)
    {
        $arrAsignatura = array();
        $tmp = new classtrabajocrear();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $materias = new classtrabajocrear();
            $materias->idtrabajo= $valor['idtrabajos'];
            $materias->Nombre = $valor['Nombre'];
            $materias->descripcion=$valor['descripcion'];
            $materias->Asigaturas_idAsigaturas=$valor['Asigaturas_idAsigaturas'];
            $materias->tiempo=$valor['tiempo'];
            $materias->Estado = $valor['Estado'];
            $materias->Profesor = $valor['Profesor'];
            array_push($arrAsignatura, $materias);
        }
        $tmp->Disconnect();
        return $arrAsignatura;
    }

    public static function getAll()
    {
        return classtrabajocrear::buscar("SELECT * FROM trabajos where Estado='activo'");
    }
    public static function getAll2($id)
    {
        return classtrabajocrear::buscar("SELECT * FROM trabajos WHERE profesor=".$id);
    }


    public function insertar()
    {
        $this->insertRow("INSERT INTO trabajos VALUES (NULL ,?, ?, ?, ?, ?, ? )", array(
                $this->Nombre,
                $this->descripcion,
                $this->Asigaturas_idAsigaturas,
                $this->tiempo,
                $this->Estado,
                $this->Profesor,
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
    public function getIdtrabajo()
    {
        return $this->idtrabajo;
    }

    /**
     * @param mixed $idtrabajo
     */
    public function setIdtrabajo($idtrabajo)
    {
        $this->idtrabajo = $idtrabajo;
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
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getAsigaturasIdAsigaturas()
    {
        return $this->Asigaturas_idAsigaturas;
    }

    /**
     * @param mixed $Asigaturas_idAsigaturas
     */
    public function setAsigaturasIdAsigaturas($Asigaturas_idAsigaturas)
    {
        $this->Asigaturas_idAsigaturas = $Asigaturas_idAsigaturas;
    }

    /**
     * @return mixed
     */
    public function getTiempo()
    {
        return $this->tiempo;
    }

    /**
     * @param mixed $tiempo
     */
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param mixed $Estado
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }


    /**
     * @return mixed
     */
    public function getProfesor()
    {
        return $this->Profesor;
    }

    /**
     * @param mixed $Profesor
     */
    public function setProfesor($Profesor)
    {
        $this->Profesor = $Profesor;
    }

}