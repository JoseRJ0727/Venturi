<?php

class Local
{
    public $local_id;
    public $nombres;
    public $direccion;
    public $telefono;
    public $estufaFk;
    public $repuestos_Fk;

    public function __construct($local_id, $nombres, $direccion, $telefono, $estufaFk, $repuestos_Fk)
    {
        $this->local_id = $local_id;
        $this->nombres = $nombres;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->estufaFk = $estufaFk;
        $this->repuestos_Fk = $repuestos_Fk;
    }

    public function getLocal_id()
    {
        return $this->local_id;
    }

    public function setLocal_id($local_id)
    {
        $this->local_id = $local_id;
        return $this;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
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

    public function getEstufaFk()
    {
        return $this->estufaFk;
    }

    public function setEstufaFk($estufaFk)
    {
        $this->estufaFk = $estufaFk;
        return $this;
    }

    public function getRepuestos_Fk()
    {
        return $this->repuestos_Fk;
    }

    public function setRepuestos_Fk($repuestos_Fk)
    {
        $this->repuestos_Fk = $repuestos_Fk;
        return $this;
    }
}