<?php
include_once "Triangle.php";
include_once "Point.php";

$xa=$_POST["xa"];
$xb=$_POST["xb"];
$xc=$_POST["xc"];
$ya=$_POST["ya"];
$yb=$_POST["yb"];
$yc=$_POST["yc"];


//echo"$xa $xb $xc $ya $yb $yc $couleur";

//creation du Triangle


$tri = new Triangle(
         new Point ($xa,$ya)
        ,new Point ($xb,$yb)
        ,new Point ($xc,$yc)
        );
        

//Enregistrer en BDD

$tri->Inserer(); //un insert dans la table


// Aller à la liste des triangles
header('Location: ListeDesPlages.php');
