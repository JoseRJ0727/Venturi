<?php

class Login
{
    public $login_id;
    public $usuario;
    private $password;
    public $usuario_Fk;

    public function __construct($login_id, $usuario, $password, $usuario_Fk)
    {
        $this->login_id = $login_id;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->usuario_Fk = $usuario_Fk;
    }

    public function getId()
    {
        return $this->login_id;
    }

    public function setId($login_id)
    {
        $this->login_id = $login_id;
        return $this;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
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