<?php

include_once 'Triangle.php';
include_once 'GPS.php';


$degreLatA = $_POST["latitude-A-degre"];
$minuteLatA = $_POST["latitude-A-minute"];
$secondeLatA = $_POST["latitude-A-seconde"];
$degreLongA = $_POST["longitude-A-degre"];
$minuteLongA = $_POST["longitude-A-minute"];
$secondeLongA = $_POST["longitude-A-seconde"];

$degreLatB = $_POST["latitude-B-degre"];
$minuteLatB = $_POST["latitude-B-minute"];
$secondeLatB = $_POST["latitude-B-seconde"];
$degreLongB = $_POST["longitude-B-degre"];
$minuteLongB = $_POST["longitude-B-minute"];
$secondeLongB = $_POST["longitude-B-seconde"];

$degreLatC = $_POST["latitude-C-degre"];
$minuteLatC = $_POST["latitude-C-minute"];
$secondeLatC = $_POST["latitude-C-seconde"];
$degreLongC = $_POST["longitude-C-degre"];
$minuteLongC = $_POST["longitude-C-minute"];
$secondeLongC = $_POST["longitude-C-seconde"];

$degreLatD = $_POST["latitude-D-degre"];
$minuteLatD = $_POST["latitude-D-minute"];
$secondeLatD = $_POST["latitude-D-seconde"];
$degreLongD = $_POST["longitude-D-degre"];
$minuteLongD = $_POST["longitude-D-minute"];
$secondeLongD = $_POST["longitude-D-seconde"];



$tri1 = new Triangle(
        new GPS($degreLatA, $minuteLatA, $secondeLatA, $degreLongA, $minuteLongA, $secondeLongA), /*changer le constructeur du point avec les coordonnées Degré minutes, secondes*/
        new GPS($degreLatB, $minuteLatB, $secondeLatB, $degreLongB, $minuteLongB, $secondeLongB),
        new GPS($degreLatC, $minuteLatC, $secondeLatC, $degreLongC, $minuteLongC, $secondeLongC)
       );

$tri2 = new Triangle(
         new GPS($degreLatC, $minuteLatC, $secondeLatC, $degreLongC, $minuteLongC, $secondeLongC),
        new GPS($degreLatD, $minuteLatD, $secondeLatD, $degreLongD, $minuteLongD, $secondeLongD),
        new GPS($degreLatA, $minuteLatA, $secondeLatA, $degreLongA, $minuteLongA, $secondeLongA)
       );

$zone = new Zone(
        new GPS($degreLatA, $minuteLatA, $secondeLatA, $degreLongA, $minuteLongA, $secondeLongA), /*changer le constructeur du point avec les coordonnées Degré minutes, secondes*/
        new GPS($degreLatB, $minuteLatB, $secondeLatB, $degreLongB, $minuteLongB, $secondeLongB),
        new GPS($degreLatC, $minuteLatC, $secondeLatC, $degreLongC, $minuteLongC, $secondeLongC),
       new GPS($degreLatD, $minuteLatD, $secondeLatD, $degreLongD, $minuteLongD, $secondeLongD)
        );


//Enregistrer en BDD
$zone->Inserer();

//renvoie vers une page
header('location: Page8-E3-Donnees.php');

