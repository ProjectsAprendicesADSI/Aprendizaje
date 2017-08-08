<?php
require_once ('db_abstract_class.php');
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 26/07/2017
 * Time: 23:25
 */
class classtrabajo extends db_abstract_class
{
    private $idnota;
    private $alumno;
    private $trabajo;
    private $urltrabajo;
    private $nota;

    public function __construct($profasig_data = array())
    {

        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($profasig_data)>1){ //
            foreach ($profasig_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {

            $this->idnota= "";
            $this->alumno= "";
            $this->trabajo= "";
            $this->urltrabajo= "";
            $this->nota= "";
            ;


        }
    }
    public  static  function buscartrabajos($id)
    {
        $arrcurso = array();
        $tmp = new classtrabajo();
        $getrows = $tmp->getRows("SELECT * FROM nota WHERE trabajo=".$id);

        foreach ($getrows as $valor) {
            $curso = new classtrabajo();
            $curso->idnota = $valor['idnota'];
            $curso->alumno = $valor['alumno'];
            $curso->trabajo = $valor['trabajo'];
            $curso->urltrabajo = $valor['urltrabajo'];
            $curso->nota= $valor['nota'];
            array_push($arrcurso, $curso);
        }
        $tmp->Disconnect();
        return $arrcurso;

    }

    public  static  function buscarestudent($id)
    {
        $arrcurso = array();
        $tmp = new classtrabajo();
        $getrows = $tmp->getRows("SELECT * FROM nota WHERE alumno=".$id);

        foreach ($getrows as $valor) {
            $curso = new classtrabajo();
            $curso->idnota = $valor['idnota'];
            $curso->alumno = $valor['alumno'];
            $curso->trabajo = $valor['trabajo'];
            $curso->urltrabajo = $valor['urltrabajo'];
            $curso->nota= $valor['nota'];
            array_push($arrcurso, $curso);
        }
        $tmp->Disconnect();
        return $arrcurso;

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
    public function desactivar($id,$id2)
    {
        $tpm= new classtrabajo();
        $tpm->updateRow2( 'UPDATE nota SET nota = \'no aprobo\' WHERE idnota ='. $id);
        header("Location: ../vistas/profesor/verdatos.php?id=".$id2);
    }
    public function activar($id,$id2)
    {
        $tpm= new classtrabajo();
       $tpm->updateRow2( 'UPDATE nota SET nota = \'aprobo\' WHERE idnota ='. $id);
        header("Location: ../vistas/profesor/verdatos.php?id=".$id2);
    }
    public function insertar()
    {
        $this->insertRow("INSERT INTO nota VALUES (NULL, ?, ?, ?, ?)", array(
                $this->alumno,
                $this->trabajo,
                $this->urltrabajo,
                $this->nota,
            )
        );
        $this->Disconnect();
    }

    public function editar()
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
    public function getIdnota()
    {
        return $this->idnota;
    }

    /**
     * @param mixed $idnota
     */
    public function setIdnota($idnota)
    {
        $this->idnota = $idnota;
    }

    /**
     * @return mixed
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * @param mixed $alumno
     */
    public function setAlumno($alumno)
    {
        $this->alumno = $alumno;
    }

    /**
     * @return mixed
     */
    public function getTrabajo()
    {
        return $this->trabajo;
    }

    /**
     * @param mixed $trabajo
     */
    public function setTrabajo($trabajo)
    {
        $this->trabajo = $trabajo;
    }

    /**
     * @return mixed
     */
    public function getUrltrabajo()
    {
        return $this->urltrabajo;
    }

    /**
     * @param mixed $urltrabajo
     */
    public function setUrltrabajo($urltrabajo)
    {
        $this->urltrabajo = $urltrabajo;
    }

    /**
     * @return mixed
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * @param mixed $nota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;
    }


}