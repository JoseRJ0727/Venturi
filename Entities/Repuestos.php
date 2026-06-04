<?php

class Repuestos
{
    public $repuestos_id;
    public $tipo;
    public $cantidad;
    public $estado;

    public function __construct($repuestos_id, $tipo, $cantidad, $estado)
    {
        $this->repuestos_id = $repuestos_id;
        $this->tipo = $tipo;
        $this->cantidad = $cantidad;
        $this->estado = $estado;
    }

    public function getId()
    {
        return $this->repuestos_id;
    }

    public function setId($id)
    {
        $this->repuestos_id = $id;
        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
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