<?php

class Comentario
{
    public $comentario_id;
    public $comentario;
    public $cliente_Fk;

    public function __construct($comentario_id, $comentario, $cliente_Fk)
    {
        $this->comentario_id = $comentario_id;
        $this->comentario = $comentario;
        $this->cliente_Fk = $cliente_Fk;
    }

    public function getId()
    {
        return $this->comentario_id;
    }

    public function setId($comentario_id)
    {
        $this->comentario_id = $comentario_id;
        return $this;
    }

    public function getComentario()
    {
        return $this->comentario;
    }

    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
        return $this;
    }

    public function getClienteFk()
    {
        return $this->cliente_Fk;
    }

    public function setClienteFk($cliente_Fk)
    {
        $this->cliente_Fk = $cliente_Fk;
        return $this;
    }
}