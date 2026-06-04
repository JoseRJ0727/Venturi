<?php

class Registro
{
    public $registro_id;
    private $password;
    public $correo;
    public $usuario_Fk;

    public function __construct($registro_id, $password, $correo, $usuario_Fk)
    {
        $this->registro_id = $registro_id;
        $this->password = $password;
        $this->correo = $correo;
        $this->usuario_Fk = $usuario_Fk;
    }

    public function getId()
    {
        return $this->registro_id;
    }

    public function setId($registro_id)
    {
        $this->registro_id = $registro_id;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
        return $this;
    }

    public function getUsuarioFk()
    {
        return $this->usuario_Fk;
    }

    public function setUsuarioFk($usuario_Fk)
    {
        $this->usuario_Fk = $usuario_Fk;
        return $this;
    }
}