<?php

class TipoVehiculo {
    public $Id;
    public $Descripcion;
    public $ListaEstacionamiento = array();

    public function MostrarDatos(){
        echo 'Id del tipo de vehículo: ' . $this->Id . '<br>';
        echo 'Descripción del tipo de vehículo: ' . $this->Descripcion . '<br>';
        echo 'Lista de estacionamientos: <br>';
        foreach($this->ListaEstacionamiento as $estacionamiento){
            echo '<li> Id: ' . $estacionamiento->Id . '</li>';
            echo '<li> Fecha y hora de ingreso: ' . $estacionamiento->FechaHoraIngreso . '</li>';
            echo '<li> Fecha y hora de salida: ' . $estacionamiento->FechaHoraSalida . '</li>';
            echo '<li> Precio: ' . $estacionamiento->Precio . '</li>';
        }
    }
}