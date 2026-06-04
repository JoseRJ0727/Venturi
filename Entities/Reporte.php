<?php

class Reporte
{
    public $reporte_id;
    public $descripcion;
    public $fecha;
    public $mantenimiento_Fk;
    public $comentario_Fk;

    public function __construct($reporte_id, $descripcion, $fecha, $mantenimiento_Fk, $comentario_Fk)
    {
        $this->reporte_id = $reporte_id;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
        $this->mantenimiento_Fk = $mantenimiento_Fk;
        $this->comentario_Fk = $comentario_Fk;
    }

    public function getId()
    {
        return $this->reporte_id;
    }

    public function setId($id)
    {
        $this->reporte_id = $id;
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

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }

    public function getMantenimientoFk()
    {
        return $this->mantenimiento_Fk;
    }

    public function setMantenimientoFk($mantenimiento_Fk)
    {
        $this->mantenimiento_Fk = $mantenimiento_Fk;
        return $this;
    }

    public function getComentarioFk()
    {
        return $this->comentario_Fk;
    }

    public function setComentarioFk($comentario_Fk)
    {
        $this->comentario_Fk = $comentario_Fk;
        return $this;
    }
}