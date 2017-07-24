<?php
require_once ('db_abstract_class.php');
/**
 * Created by PhpStorm.
 * User: Camilo
 * Date: 24/07/17
 * Time: 1:52 PM
 */
class classaula extends db_abstract_class
{


    private $idaula;
    private $Nombre;
    private $Estado;
    public function __construct($aula_data = array())
    {

        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($aula_data)>1){ //
            foreach ($aula_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
            $this->idaula="";
            $this->Nombre= "";
            $this->Estado= "";


        }
    }
    public function selectaulas ($isRequired=true, $id, $nombre, $class)
    {
        $arraulas = classaula::getAll(); /*  */
        $hola=$arraulas;
        $htmlSelect = '<select ' . (($isRequired) ? "required" : "") . " id= '" . $id . "' name='" . $nombre . "' class='" . $class . "'>";
        $htmlSelect .= "<option value='nada' >Seleccione...</option>";
        if (count($arraulas) > 0) {
            foreach ($arraulas as $aulas) {
                $htmlSelect .= "<option value='".$aulas->getidaula()."'>".$aulas->getNombre()." "."</option>";
            }
            $htmlSelect .= "</select>";
            return $htmlSelect;

        }
        else{
            $htmlSelect="no hay aulas registradas por favor registre aulas y vuelva a intentarlo";
            return $htmlSelect;
        }


    }

    public static function buscarForId($id)
    {
        // TODO: Implement buscarForId() method.
    }

    public static function buscar($query)
    {
        $arraulas = array();
        $tmp = new classaula();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $aulas = new classaula();
            $aulas->idaula = $valor['idaula'];
            $aulas->Nombre = $valor['Nombre'];
            $aulas->Estado = $valor['Estado'];
            array_push($arraulas, $aulas);
        }
        $tmp->Disconnect();
        return $arraulas;
    }

    public static function getAll()
    {
        return classaula::buscar("SELECT * FROM aula");
    }

    public function insertar()
    {
        // TODO: Implement insertar() method.
        $this->insertRow("INSERT INTO aula VALUES (NULL, ?, ?)", array(
                $this->Nombre,
                $this->Estado,
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

    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }
    /**
     * @return mixed
     */
    public function getIdaula()
    {
        return $this->idaula;
    }

    /**
     * @param mixed $idaula
     */
    public function setIdaula($idaula)
    {
        $this->idaula = $idaula;
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

}