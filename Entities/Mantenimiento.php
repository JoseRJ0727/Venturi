<?php

class Mantenimiento
{
    public $mantenimiento_id;
    public $fecha;
    public $descripcion;
    public $tipoMantenimiento_Fk;
    public $estufa_Fk;
    public $operario_Fk;

    public function __construct($mantenimiento_id, $fecha, $descripcion, $tipoMantenimiento_Fk, $estufa_Fk, $operario_Fk)
    {
        $this->mantenimiento_id = $mantenimiento_id;
        $this->fecha = $fecha;
        $this->descripcion = $descripcion;
        $this->tipoMantenimiento_Fk = $tipoMantenimiento_Fk;
        $this->estufa_Fk = $estufa_Fk;
        $this->operario_Fk = $operario_Fk;
    }

    public function getId()
    {
        return $this->mantenimiento_id;
    }

    public function setId($mantenimiento_id)
    {
        $this->mantenimiento_id = $mantenimiento_id;
        return $this;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function getTipoMantenimientoFk()
    {
        return $this->tipoMantenimiento_Fk;
    }

    public function setTipoMantenimientoFk($tipoMantenimiento_Fk)
    {
        $this->tipoMantenimiento_Fk = $tipoMantenimiento_Fk;
        return $this;
    }

    public function getEstufaFk()
    {
        return $this->estufa_Fk;
    }

    public function setEstufaFk($estufa_Fk)
    {
        $this->estufa_Fk = $estufa_Fk;
        return $this;
    }

    public function getOperarioFk()
    {
        return $this->operario_Fk;
    }

    public function setOperarioFk($operario_Fk)
    {
        $this->operario_Fk = $operario_Fk;
        return $this;
    }
}