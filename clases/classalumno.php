<?php
require_once ('db_abstract_class.php');

/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 24/07/2017
 * Time: 22:48
 */
class classalumno extends db_abstract_class
{
    private $idestudiente;
    private $Tipodocumento;
    private $Documento;
    private $Nombre;
    private $Apellido;
    private $Telefono;
    private $Usuario;
    private $Pass;
    private $Edad;
    private $Curso;

    public function __construct($alumno_data = array())
    {

        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($alumno_data)>1){ //
            foreach ($alumno_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
            $this->Tipodocumento= "";
            $this->Documento= "";
            $this->Nombre= "";
            $this->Apellido= "";
            $this->Telefono= "";
            $this->Usuario= "";
            $this->Pass= "";
            $this->Edad="";
            $this->Curso="";



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

        $this->insertRow("INSERT INTO estudiente VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array(
                $this->Tipodocumento,
                $this->Documento,
                $this->Nombre,
                $this->Apellido,
                $this->Telefono,
                $this->Usuario,
                $this->Pass,
                $this->Edad,
                $this->Curso,
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
    public function getIdestudiente()
    {
        return $this->idestudiente;
    }

    /**
     * @param mixed $idestudiente
     */
    public function setIdestudiente($idestudiente)
    {
        $this->idestudiente = $idestudiente;
    }

    /**
     * @return mixed
     */
    public function getTipodocumento()
    {
        return $this->Tipodocumento;
    }

    /**
     * @param mixed $Tipodocumento
     */
    public function setTipodocumento($Tipodocumento)
    {
        $this->Tipodocumento = $Tipodocumento;
    }

    /**
     * @return mixed
     */
    public function getDocumento()
    {
        return $this->Documento;
    }

    /**
     * @param mixed $Documento
     */
    public function setDocumento($Documento)
    {
        $this->Documento = $Documento;
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
    public function getApellido()
    {
        return $this->Apellido;
    }

    /**
     * @param mixed $Apellido
     */
    public function setApellido($Apellido)
    {
        $this->Apellido = $Apellido;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * @param mixed $Telefono
     */
    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->Usuario;
    }

    /**
     * @param mixed $Usuario
     */
    public function setUsuario($Usuario)
    {
        $this->Usuario = $Usuario;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->Pass;
    }

    /**
     * @param mixed $Pass
     */
    public function setPass($Pass)
    {
        $this->Pass = $Pass;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->Edad;
    }

    /**
     * @param mixed $Edad
     */
    public function setEdad($Edad)
    {
        $this->Edad = $Edad;
    }

    /**
     * @return mixed
     */
    public function getCurso()
    {
        return $this->Curso;
    }

    /**
     * @param mixed $Curso
     */
    public function setCurso($Curso)
    {
        $this->Curso = $Curso;
    }


}