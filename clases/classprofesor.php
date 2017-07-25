<?php
require_once ('db_abstract_class.php');

class classprofesor extends db_abstract_class
{
    private $idprofesor;
    private $Tipodocumento;
    private $Documento;
    private $Nombre;
    private $Apellido;
    private $Foto;
    private $Telefono;
    private $Telefono2;
    private $Usuario;
    private $Contrasenha;


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
                $this->Foto= "";
                $this->Telefono= "";
                $this->Telefono2= "";
                $this->Usuario= "";
                $this->Contrasenha= "";


        }
    }
    static public function ultimo($required, $id , $name , $class){
$arrprofe= new classprofesor();
$arrprofe=classprofesor::ultimoprofe();


        $htmldiv="<div class=\"panel panel-success\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Profesor</h3>
                            <div class=\"actions pull-right\">
                                <i class=\"fa fa-chevron-down\"></i>
                                <i class=\"fa fa-times\"></i>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <h3>".$arrprofe->Nombre."  ". $arrprofe->Apellido."</h3>
                            
                            
                        </div>
                    </div>
                                        
                                        </div>";
return $htmldiv;

    }
    protected static function buscarForId($id)
    {
        $profesor = new classprofesor();
        if ($id > 0){
            $getrow =$profesor->getRow("SELECT * FROM profesor WHERE idprofesor =?", array($id));
            $profesor->idprofesor = $getrow['idprofesor'];
            $profesor->Tipodocumento = $getrow['Tipodocumento'];
            $profesor->Documento = $getrow['Documento'];
            $profesor->Nombre = $getrow['Nombre'];
            $profesor->Apellido = $getrow['Apellido'];
            $profesor->Foto = $getrow['Foto'];
            $profesor->Telefono = $getrow['Telefono'];
            $profesor->Telefono2 = $getrow['Telefono2'];
            $profesor->Usuario = $getrow['Usuario'];
            $profesor->Contrasenha = $getrow['Contraseha'];
            $profesor->Disconnect();
            return $profesor;
        }else{
            return NULL;
        }
    }

    public static function buscar($query)
    {
        $arrprofesor = array();
        $tmp = new classprofesor();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $profesor = new classprofesor();
            $profesor->idprofesor = $valor['idprofesor'];
            $profesor->Tipodocumento = $valor['Tipodocumento'];
            $profesor->Documento = $valor['Documento'];
            $profesor->Nombre = $valor['Nombre'];
            $profesor->Apellido = $valor['Apellido'];
            $profesor->Foto = $valor['Foto'];
            $profesor->Telefono = $valor['Telefono'];
            $profesor->Telefono2 = $valor['Telefono2'];
            $profesor->Usuario = $valor['Usuario'];
            $profesor->Contrasenha = $valor['Contraseha'];
            array_push($arrprofesor, $profesor);
        }
        $tmp->Disconnect();
        return $arrprofesor;

    }

    public static function getAll()
    {
        return classprofesor::buscar("SELECT * FROM profesor");
    }

    public function  insertar()
    {
         $this->insertRow("INSERT INTO profesor VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array(
                $this->Tipodocumento,
                $this->Documento,
                $this->Nombre,
                $this->Apellido,
                $this->Foto,
                $this->Telefono,
                $this->Telefono2,
                $this->Usuario,
                $this->Contrasenha,
            )
        );
        $this->Disconnect();
    }

    public function editar()
    {
        $this->updateRow("UPDATE profesor SET Tipodocumento = ?, Documento = ?, Nombre = ?, Apellido = ?, Foto = ?, Telefono = ?, Telefono2 = ?, Usuario = ?, Contrasenha = ?, WHERE idEspecialidad = ?", array(
            $this->Tipodocumento,
            $this->Documento,
            $this->Nombre,
            $this->Apellido,
            $this->Foto,
            $this->Telefono,
            $this->Telefono2,
            $this->Usuario,
            $this->Contrasenha,
        ));
        $this->Disconnect();
    }

    public function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }
    public function ultimoprofe()
    {
        $tpm=new classprofesor();
      $num= $tpm->getRow("SELECT MAX(idprofesor) FROM profesor");
        return classprofesor::buscarForId($num['MAX(idprofesor)']);

    }
    /**
     * @return mixed
     */
    public function getIdprofesor()
    {
        return $this->idprofesor;
    }

    /**
     * @param mixed $idprofesor
     */
    public function setIdprofesor($idprofesor)
    {
        $this->idprofesor = $idprofesor;
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
    public function getTelefono2()
    {
        return $this->Telefono2;
    }

    /**
     * @param mixed $Telefono2
     */
    public function setTelefono2($Telefono2)
    {
        $this->Telefono2 = $Telefono2;
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
    public function getContrasenha()
    {
        return $this->Contrasenha;
    }

    /**
     * @param mixed $Contrasenha
     */
    public function setContrasenha($Contrasenha)
    {
        $this->Contrasenha = $Contrasenha;
    }

}
