<?php

require_once ('db_abstract_class.php');

/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 24/07/2017
 * Time: 0:50
 */
class classlogin extends db_abstract_class
{
    private $tipousu;
    private $usuario;
    private $contraenha;



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

    protected function insertar()
    {
        // TODO: Implement insertar() method.
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
    public function getTipousu()
    {
        return $this->tipousu;
    }

    /**
     * @param mixed $tipousu
     */
    public function setTipousu($tipousu)
    {
        $this->tipousu = $tipousu;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getContraenha()
    {
        return $this->contraenha;
    }

    /**
     * @param mixed $contraenha
     */
    public function setContraenha($contraenha)
    {
        $this->contraenha = $contraenha;
    }

}