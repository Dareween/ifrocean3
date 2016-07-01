<?php

include_once 'Triangle.php';
include_once 'GPS.php';

$xa=$_POST["latitude-A"];
$xb=$_POST["longitude-A"];
$xc=$_POST["latitude-B"];
$ya=$_POST["longitude-B"];
$yb=$_POST["latitude-C"];
$yc=$_POST["longitude-C"];
$yb=$_POST["latitude-D"];
$yc=$_POST["longitude-D"];

$tri1 = new Triangle(
        new GPS($xa, $ya),
        new GPS($xb, $yb),
        new GPS($xc, $yc)
       );

$tri2 = new Triangle(
        new GPS($xc, $yc),
        new GPS($xd, $yd),
        new GPS($xa, $ya)
       );


//Enregistrer en BDD
$zone=$tri1+$tri2;
$zone->Inserer();

//renvoie vers une page
header('location: Page8-E3-Donnees.html');

