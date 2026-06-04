<?php

class Factura
{
    public $factura_id;
    public $totalPago;
    public $fecha;
    public $cliente_Fk;

    public function __construct($factura_id, $totalPago, $fecha, $cliente_Fk)
    {
        $this->factura_id = $factura_id;
        $this->totalPago = $totalPago;
        $this->fecha = $fecha;
        $this->cliente_Fk = $cliente_Fk;
    }

    public function getId()
    {
        return $this->factura_id;
    }

    public function setId($factura_id)
    {
        $this->factura_id = $factura_id;
        return $this;
    }

    public function getTotalPago()
    {
        return $this->totalPago;
    }

    public function setTotalPago($totalPago)
    {
        $this->totalPago = $totalPago;
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