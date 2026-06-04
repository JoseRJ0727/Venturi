<?php

class Trabajador
{
    public $trabajador_id;
    public $nombre;
    public $apellidos;
    private $documento;
    public $registro_Fk;
    public $cita_Fk;

    public function __construct($trabajador_id, $nombre, $apellidos, $documento, $registro_Fk, $cita_Fk)
    {
        $this->trabajador_id = $trabajador_id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->documento = $documento;
        $this->registro_Fk = $registro_Fk;
        $this->cita_Fk = $cita_Fk;
    }

    public function getId()
    {
        return $this->trabajador_id;
    }

    public function setId($id)
    {
        $this->trabajador_id = $id;
        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    public function getDocumento()
    {
        return $this->documento;
    }

    public function setDocumento($documento)
    {
        $this->documento = $documento;
        return $this;
    }

    public function getRegistroFk()
    {
        return $this->registro_Fk;
    }

    public function setRegistroFk($registro_Fk)
    {
        $this->registro_Fk = $registro_Fk;
        return $this;
    }

    public function getCitaFk()
    {
        return $this->cita_Fk;
    }

    public function setCitaFk($cita_Fk)
    {
        $this->cita_Fk = $cita_Fk;
        return $this;
    }
}