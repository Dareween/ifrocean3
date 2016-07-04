<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Plage
 *
 * @author MaVi
 */
class Plage {

public function Inserer(){
    
        try{
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                     .";dbname=" .Config::DBNAME
                    ,Config::USERNAME
                    ,Config::PASSWORD);
        
        echo $this->lesPoints[0]->x.$this->lesPoints[0]->y.$this->couleur;

                    $req=$pdo->prepare("INSERT INTO triangles "
                    . "(xa,ya,xb,yb,xc,yc,couleur) "
                    . "values (:xa,:ya,:xb,:yb,:xc,:yc,:couleur)");
           $req->bindParam(":xa", $this->lesPoints[0]->x);
           $req->bindParam(":ya", $this->lesPoints[0]->y);
           $req->bindParam(":xb",$this->lesPoints[1]->x);
           $req->bindParam(":yb",$this->lesPoints[1]->x);
           $req->bindParam(":xc",$this->lesPoints[2]->x);
           $req->bindParam(":yc",$this->lesPoints[2]->x);
           $req->bindParam(":couleur", $this->couleur);
           
        }catch(PDOException $e){echo $e->getMessage();}
//fermeture
        $pdo = null;
    }
 

// fonction qui renvoie la liste des plages enregistrées dans la db
public static function listeDesPlages() {
    //ouverture de la connexion
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
            . ";dbname=" . Config::DBNAME
            , Config::USERNAME
            , Config::PASSWORD);
            $lesPlages = $pdo->prepare("SELECT nomespece FORM espece");
            return $lesPlages ;
         }

//funciton qui ajoute une plage dans la base db
public static function ajoutPlages(){
	//ouverture de la connexion
    $pdo = new PDO("mysql:host=" . Config::SERVERNAME
        . ";dbname=" . Config::DBNAME
        , Config::USERNAME
        , Config::PASSWORD);
	$nompage = $_POST['plage'];
	$superficie = $_POST['superficie'];
	$date = $_POST['date'];
	$ajoutPlage = $pdo->prepare("INSERT INTO PLAGE "."(nomplage,superficie,ville,format(d%,m%,y%) as date_prelevement )"."
								VALUES ( :nomplage,:superficie,:ville,:date_prelevement)");
	$ajoutPlage->bindParam(":nomplage",$nompage);
	$ajoutPlage->bindParam(":superficie",$superficie);
	$ajoutPlage->bindParam(":ville",$ville);
	$ajoutPlage->bindParam(":date_prelevement",$date_prelevement);		
	$ajout->execute();
	$pdo = null;
	echo "plage enregistrée";

    }

}
