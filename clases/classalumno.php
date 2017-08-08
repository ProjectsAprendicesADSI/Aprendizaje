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
    private $Foto;

    public function __construct($alumno_data = array())
    {

        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($alumno_data)>1){ //
            foreach ($alumno_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
            $this->idestudiente="";
            $this->Tipodocumento= "";
            $this->Documento= "";
            $this->Nombre= "";
            $this->Apellido= "";
            $this->Foto="";
            $this->Telefono= "";
            $this->Usuario= "";
            $this->Pass= "";
            $this->Edad="";
            $this->Curso="";



        }
    }
public  static function selectalumno($name,$id,$class){


        $arralumno=classalumno::getAll();
        $selecthtml ='<select name="'.$name.'" id="'.$id.'"class="'.$class.'">';
        foreach ($arralumno as $valor){
            $selecthtml.='<option value="'.$valor->getIdestudiente().'">'.$valor->getNombre().' '.$valor->getApellido(). '('.$valor->getDocumento().')</option>';
        }
        $selecthtml.='</select>';

    return $selecthtml;
}

    public static function buscarForId($id)
    {
            return classalumno::buscar('SELECT * FROM estudiente WHERE idestudiante= '.$id);
    }

    protected static function buscar($query)
    {
        $arralumno = array();
        $tmp = new classalumno();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $alumno = new classalumno();
            $alumno->idestudiente = $valor['idestudiante'];
            $alumno->Tipodocumento = $valor['Tipodocumento'];
            $alumno->Documento = $valor['Documento'];
            $alumno->Nombre = $valor['Nombre'];
            $alumno->Apellido = $valor['Apellido'];
            $alumno->Foto = $valor['Foto'];
            $alumno->Telefono = $valor['Telefono'];
            $alumno->Usuario = $valor['Usuario'];
            $alumno->Pass = $valor['Pass'];
            $alumno->Edad=$valor['Edad'];
            $alumno->Curso=$valor['Curso'];
            array_push($arralumno, $alumno);
        }
        $tmp->Disconnect();
        return $arralumno;
    }

    public static function getAll()
    {
        return classalumno::buscar('SELECT * FROM estudiente');
    }
    static public function validar($usu, $cont){

        return classalumno::buscar('SELECT * FROM estudiente WHERE Usuario= "'.$usu.'" AND Pass= "'.$cont.'"');
    }

    static public function buscarforusuario($qu){
        return classalumno::buscar('SELECT * FROM estudiente WHERE Usuario= "'.$qu.'" ');
    }

    public function insertar()
    {

        $this->insertRow("INSERT INTO estudiente VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array(
                $this->Tipodocumento,
                $this->Documento,
                $this->Nombre,
                $this->Apellido,
                $this->Foto,
                $this->Telefono,
                $this->Usuario,
                $this->Pass,
                $this->Edad,
                $this->Curso,
            )
        );
        $this->Disconnect();
    }

    public function editar()
    {
        //echo $this->idestudiente;
        $this->updateRow("UPDATE estudiente SET Tipodocumento = ?, Documento = ?, Nombre = ?, Apellido = ?, Foto = ?, Telefono = ?, Usuario = ?, Pass = ?, Edad=?, Curso=? WHERE idestudiante = ?  ", array(
            $this->Tipodocumento,
            $this->Documento,
            $this->Nombre,
            $this->Apellido,
            $this->Foto,
            $this->Telefono,
            $this->Usuario,
            $this->Pass,
            $this->Edad,
            $this->Curso,
            $this->idestudiente,
        ));
        $this->Disconnect();
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


    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->Foto;
    }

    /**
     * @param mixed $Foto
     */
    public function setFoto($Foto)
    {
        $this->Foto = $Foto;
    }


}