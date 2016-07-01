<?php

include_once 'Polygone.php';

class Zone extends Polygone {

    public function __construct($p1, $p2, $p3, $p4) {
        $desPoints = array($p1, $p2, $p3, $p4);
        parent::__construct($desPoints);
    }

    public function calculerSurface() {
        $t1 = new Triangle($this->lesPoints[0]
                , $this->lesPoints[1]
                , $this->lesPoints[2]);
        $t2 = new Triangle($this->lesPoints[2]
                , $this->lesPoints[3]
                , $this->lesPoints[0]);
        
        return $t1->calculerSurface()+$t2->calculerSurface();
    }
    
    public function Inserer() {

        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);


            // pour éviter les injections sql
            $req = $pdo->prepare("INSERT INTO triangles "
                    . "(xa,ya,xb,yb,xc,yc,couleur) "
                    . "values (:xa,:ya,:xb,:yb,:xc,:yc,:couleur)");
            $req->bindParam(":xa", $this->lesPoints[0]->x);
            $req->bindParam(":ya", $this->lesPoints[0]->y);
            $req->bindParam(":xb", $this->lesPoints[1]->x);
            $req->bindParam(":yb", $this->lesPoints[1]->y);
            $req->bindParam(":xc", $this->lesPoints[2]->x);
            $req->bindParam(":yc", $this->lesPoints[2]->y);
            $req->bindParam(":couleur", $this->couleur);

            $req->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        //fermeture
        $pdo = null;
    }

    public static function listeZones() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $lesZones = $pdo->prepare("select nomespece, nom_zone, quantite from espece, zone, zone_has_espece where espece.id = zone_has_espece.espece_id AND zone.id = zone_has_espece.zone_id ");

        return $req;
       

    }

    public static function getById($cle) {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select id, latitude-A, longitude-A, latitude-B, longitude-B,latitude-C, longitude-C,latitude-D, longitude-D, nom_zone"
                . " where id=:cle");

        
        $req->bindParam(":cle", $cle);
        
        $req->execute();
        if ($req->rowCount() == 1) {
            $ligne = $req->fetch();

            $p1 = new Point($ligne["xa"], $ligne["ya"]);
            $p2 = new Point($ligne["xb"], $ligne["yb"]);
            $p3 = new Point($ligne["xc"], $ligne["yc"]);
            $triangle = new Triangle($p1, $p2, $p3, $ligne["couleur"], $ligne["id"]);

            return $triangle;
        } else {
            return null;
        }
    }

    public function supprimer() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("delete from triangles"
                . " where id=:cle");

        $req->bindParam(":cle", $this->id);

        $req->execute();
    }

}

