<?php
//conexion a las clases
require_once 'Paquete.php';
require_once 'Sensor.php';
//crear los objetos
$paqueteA=new paquete();
$paqueteB=new paquete();

$paqueteA->codigoSeguimiento = "STORM0021";
$paqueteA->pesoKilogramos = 50;
$paqueteA->esFragil = "Si";
//manda error dado a que no es una opcion para el publico
//no todos pueden acceder solo con algunas maneras
//$paqueteA->$costointerno=30;  

//instanciar objeto de sensor
    $sensor1=new sensor();
    $sensor1->ultimaLectura = new DateTime(); 
?>