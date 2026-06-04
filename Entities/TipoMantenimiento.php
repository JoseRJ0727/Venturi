<?php

class TipoMantenimiento
{
    public $tipoMantenimiento_id;
    public $TipoMantenimiento;

    public function __construct($tipoMantenimiento_id, $TipoMantenimiento)
    {
        $this->tipoMantenimiento_id = $tipoMantenimiento_id;
        $this->TipoMantenimiento = $TipoMantenimiento;
    }

    public function getId()
    {
        return $this->tipoMantenimiento_id;
    }

    public function setId($id)
    {
        $this->tipoMantenimiento_id = $id;
        return $this;
    }

    public function getTipoMantenimiento()
    {
        return $this->TipoMantenimiento;
    }

    public function setTipoMantenimiento($TipoMantenimiento)
    {
        $this->TipoMantenimiento = $TipoMantenimiento;
        return $this;
    }
}