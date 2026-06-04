<?php

class EstadoEstufa
{
    public $estadoEstufa_id;
    public $estado;

    public function __construct($estadoEstufa_id, $estado)
    {
        $this->estadoEstufa_id = $estadoEstufa_id;
        $this->estado = $estado;
    }

    public function getId()
    {
        return $this->estadoEstufa_id;
    }

    public function setId($estadoEstufa_id)
    {
        $this->estadoEstufa_id = $estadoEstufa_id;
        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }
}