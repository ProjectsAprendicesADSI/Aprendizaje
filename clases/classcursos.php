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
  private $Idcursos;
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
            $this->Idcursos= "";
            $this->Nombre = "";
            $this->Jornada = "";
            $this->Aula="";
        }
    }
    static public function selectcurso ($isRequired=true, $id, $nombre, $class)
    {
        $arrmaterias = classcursos::getAll(); /*  */
        $htmlSelect = '<select ' . (($isRequired) ? "required" : "") . " id= '" . $id . "' name='" . $nombre . "' class='" . $class . "'>";
        $htmlSelect .= "<option value='nada' >Seleccione...</option>";
        if (count($arrmaterias) > 0) {
            foreach ($arrmaterias as $materia) {
                $htmlSelect .= "<option value='".$materia->getIdcursos(). "'>".$materia->getNombre()." "."</option>";
            }
            $htmlSelect .= "</select>";
        }
        else{
            $htmlSelect="no hay Cursos   registrados por favor registre cursos y vuelva a intentarlo";
        }
        return $htmlSelect;

    }
    public static function buscarForId($id)
    {
        // TODO: Implement buscarForId() method.
    }

    public static function buscar($query)
    {
        $arrcurso = array();
        $tmp = new classcursos();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $curso = new classcursos();
            $curso->Idcursos = $valor['idcursos'];
            $curso->Nombre = $valor['Nombre'];
            $curso->Jornada = $valor['Jornada'];
            $curso->Aula = $valor['Aula'];
            $curso->Estado= $valor['Estado'];
            array_push($arrcurso, $curso);
        }
        $tmp->Disconnect();
        return $arrcurso;

    }

    public static function getAll()
    {
        return classcursos::buscar("SELECT * FROM cursos");
    }

    public function insertar()
    {
        // TODO: Implement insertar() method.
        $this->insertRow("INSERT INTO cursos VALUES (NULL, ?, ?, ?, ?)", array(
                $this->Nombre,
                $this->Jornada,
                $this->Aula,
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
    public function getIdcursos()
    {
        return $this->Idcursos;
    }

    /**
     * @param mixed $idcurso
     */
    public function setIdcurso($Idcursos)
    {
        $this->Idcursos = $Idcursos;
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