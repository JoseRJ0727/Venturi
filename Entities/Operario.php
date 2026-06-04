<?php

class Operario
{
    public $operario_id;
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    private $documento;

    public function __construct($operario_id, $nombre, $apellido, $correo, $telefono, $documento)
    {
        $this->operario_id = $operario_id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->documento = $documento;
    }

    public function getId()
    {
        return $this->operario_id;
    }

    public function setId($operario_id)
    {
        $this->operario_id = $operario_id;
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

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
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

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
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
}