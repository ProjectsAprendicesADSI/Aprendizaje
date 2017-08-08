<?php

require_once ('db_abstract_class.php');

class classmaterias extends db_abstract_class
{

    private $idAsignatura;
    private $Nombre;
    private $Estado;

    public function __construct($Asignatura_data = array())
    {

        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($Asignatura_data)>1){ //
            foreach ($Asignatura_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
            $this->idAsignatura = "";
            $this->Nombre = "";
            $this->Estado = "";
        }
    }
    static public function selectmaterias2 ($isRequired=true, $id, $nombre, $class)
    {
        $arrmaterias = classmaterias::getAll(); /*  */
        $htmlSelect = "";
        if (count($arrmaterias) > 0) {
            $htmlSelect.='<select name="'.$nombre.'" id="'.$id.'" class="'.$class.'">';
            foreach ($arrmaterias as $materia) {

                 $htmlSelect.='<option value="'.$materia->getIdAsignatura().'">'.$materia->getNombre().'</option>';
            }
                $htmlSelect.="</select>";
        }
        else{
            $htmlSelect="no hay metrias registradas por favor registre materias y vuelva a intentarlo";
        }
        return $htmlSelect;

    }
    static public function selectmaterias ($isRequired=true, $id, $nombre, $class)
    {
        $arrmaterias = classmaterias::getAll(); /*  */
        $htmlSelect = "";
        if (count($arrmaterias) > 0) {
            foreach ($arrmaterias as $materia) {
               $htmlSelect.='<input type="checkbox" name="'.$nombre.'" id="'.$id.'" class="" value="'.$materia->getIdAsignatura().'">'.$materia->getNombre().'<br>';
            }

        }
else{
            $htmlSelect="no hay metrias registradas por favor registre materias y vuelva a intentarlo";
}
        return $htmlSelect;

    }
    function __destruct() {
        $this->Disconnect();

    }

    public static function buscarForId($id)
    {
        $materias = new classmaterias();
        if ($id > 0){
            $getrow =$materias->getRow("SELECT * FROM asigaturas WHERE idAsigaturas =?", array($id));
            $materias->idAsignatura = $getrow['idAsigaturas'];
            $materias->Nombre = $getrow['Nombre'];
            $materias->Estado = $getrow['Estado'];

            $materias->Disconnect();
            return $materias;
        }else{
            return NULL;
        }
    }

    protected static function buscar($query)
    {
        $arrAsignatura = array();
        $tmp = new classmaterias();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $materias = new classmaterias();
            $materias->idAsignatura = $valor['idAsigaturas'];
            $materias->Nombre = $valor['Nombre'];
            $materias->Estado = $valor['Estado'];
            array_push($arrAsignatura, $materias);
        }
        $tmp->Disconnect();
        return $arrAsignatura;
    }

    public static function getAll()
    {
        return classmaterias::buscar("SELECT * FROM asigaturas");
    }

    public  function insertar()
    {
        $this->insertRow("INSERT INTO asigaturas VALUES (NULL, ?, ?)", array(
                $this->Nombre,
                $this->Estado,
            )
        );
        $this->Disconnect();
    }

    protected function editar()
    {
        $this->updateRow("UPDATE especialidad SET Nombre = ?, Estado = ? WHERE idEspecialidad = ?", array(
            $this->Nombre,
            $this->Estado,
            $this->idEspecialidad,
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
    public function getIdAsignatura()
    {
        return $this->idAsignatura;
    }

    /**
     * @param mixed $idAsignatura
     */
    public function setIdAsignatura($idAsignatura)
    {
        $this->idAsignatura = $idAsignatura;
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