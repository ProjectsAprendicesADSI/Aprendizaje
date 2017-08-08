<?php
require_once ('db_abstract_class.php');
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 04/08/2017
 * Time: 4:31
 */
class classobservador extends db_abstract_class
{

    private $idobservacionacademica;
    private $observacion;
    private $fecha;
    private $estudiente_idestudiante;

    public function __construct($alumno_data = array())
    {

        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($alumno_data)>1){ //
            foreach ($alumno_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
            $this->idobservacionacademica="";
            $this->observacion= "";
            $this->fecha= "";
            $this->estudiente_idestudiante="";

        }
    }

    protected static function buscarForId($id)
    {
        // TODO: Implement buscarForId() method.
    }

    protected static function buscar($query)
    {
        $arrAsignatura = array();
        $tmp = new classtrabajocrear();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $materias = new classobservador();
            $materias->idobservacionacademica= $valor['idobservacionacademica'];
            $materias->observacion = $valor['observacion'];
            $materias->fecha=$valor['fecha'];
            $materias->fecha=$valor['fecha'];
            array_push($arrAsignatura, $materias);
        }
        $tmp->Disconnect();
        return $arrAsignatura;
    }
    public static function getAll()
    {
        return classobservador::buscar("SELECT * FROM observacionacademica" );
    }
    public static function  getAlla($id)
    {
        return classobservador::buscar("SELECT * FROM observacionacademica where estudiente_idestudiante=".$id);
    }

    public function insertar()
    {
        // TODO: Implement insertar() method.
        $this->insertRow("INSERT INTO observacionacademica VALUES (NULL, ?, ?, ?)", array(
                $this->observacion,
                $this->fecha,
                $this->estudiente_idestudiante,
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
    public function getIdobservacionacademica()
    {
        return $this->idobservacionacademica;
    }

    /**
     * @param mixed $idobservacionacademica
     */
    public function setIdobservacionacademica($idobservacionacademica)
    {
        $this->idobservacionacademica = $idobservacionacademica;
    }

    /**
     * @return mixed
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * @param mixed $observacion
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getEstudienteIdestudiante()
    {
        return $this->estudiente_idestudiante;
    }

    /**
     * @param mixed $estudiente_idestudiante
     */
    public function setEstudienteIdestudiante($estudiente_idestudiante)
    {
        $this->estudiente_idestudiante = $estudiente_idestudiante;
    }


}