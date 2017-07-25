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
private 

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
        $this->insertRow("INSERT INTO cursos VALUES (NULL, ?, ?,?')", array(
                $this->Nombre,
                $this->jornada,
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
}