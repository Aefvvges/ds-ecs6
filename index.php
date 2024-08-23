<?php

require_once 'modelo/estacionamiento.php';
require_once 'modelo/tipovehiculo.php';

$tv = new TipoVehiculo();
$tv->Id = 1;
$tv->Descripcion = 'Auto';

$es1 = new Estacionamiento();
$es1->Id = 1;
$es1->FechaHoraIngreso = '25/07 14:32';
$es1->FechaHoraSalida = '25/07 16:31';
$es1->Precio = 4000;

$es2 = new Estacionamiento();
$es2->Id = 2;
$es2->FechaHoraIngreso = '23/07 10:00';
$es2->FechaHoraSalida = '23/07 14:00';
$es2->Precio = 8000;

$tv->ListaEstacionamiento[] = $es1;
$tv->ListaEstacionamiento[] = $es2;

$tv->MostrarDatos();