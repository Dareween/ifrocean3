<?php

include_once 'Polygone.php';
include_once 'Config.php';

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
            $req = $pdo->prepare("INSERT INTO zone "
                    . "(latitude-A-degre,latitude-A-minute,latitude-A-seconde,longitude-A-degre,longitude-A-minute,longitude-A-seconde, latitude-B-degre,latitude-B-minute,latitude-B-seconde,longitude-B-degre,longitude-B-minute,longitude-B-seconde, latitude-C-degre,latitude-C-minute,latitude-C-seconde,longitude-C-degre,longitude-C-minute,longitude-C-seconde, latitude-D-degre,latitude-D-minute,latitude-D-seconde,longitude-D-degre,longitude-D-minute,longitude-D-seconde) "
                    . "values (:latitude-A-degre,:latitude-A-minute,:latitude-A-seconde,:longitude-A-degre,:longitude-A-minute,:longitude-A-seconde,:latitude-B-degre,:latitude-B-minute,:latitude-B-seconde,:longitude-B-degre,longitude-B-minute,longitude-B-seconde,:latitude-C-degre,:latitude-C-minute,:latitude-C-seconde,:longitude-C-degre,:longitude-C-minute,:longitude-C-seconde, :latitude-D-degre,:latitude-D-minute,:latitude-D-seconde,:longitude-D-degre,:longitude-D-minute,:longitude-D-seconde)");
            $req->bindParam(":latitude-A-degre", $this->lesPoints[0]->degreLat);
            $req->bindParam(":latitude-A-minute", $this->lesPoints[0]->minuteLat);
            $req->bindParam(":latitude-A-seconde", $this->lesPoints[0]->secondeLat);
            $req->bindParam(":longitude-A-degre", $this->lesPoints[0]->degreLong);
            $req->bindParam(":longitude-A-minute", $this->lesPoints[0]->minuteLong);
            $req->bindParam(":longitude-A-seconde", $this->lesPoints[0]->secondeLong);
            
             $req->bindParam(":latitude-B-degre", $this->lesPoints[1]->degreLat);
            $req->bindParam(":latitude-B-minute", $this->lesPoints[1]->minuteLat);
            $req->bindParam(":latitude-B-seconde", $this->lesPoints[1]->secondeLat);
            $req->bindParam(":longitude-B-degre", $this->lesPoints[1]->degreLong);
            $req->bindParam(":longitude-B-minute", $this->lesPoints[1]->minuteLong);
            $req->bindParam(":longitude-B-seconde", $this->lesPoints[1]->secondeLong);
            
             $req->bindParam(":latitude-C-degre", $this->lesPoints[2]->degreLat);
            $req->bindParam(":latitude-C-minute", $this->lesPoints[2]->minuteLat);
            $req->bindParam(":latitude-C-seconde", $this->lesPoints[2]->secondeLat);
            $req->bindParam(":longitude-C-degre", $this->lesPoints[2]->degreLong);
            $req->bindParam(":longitude-C-minute", $this->lesPoints[2]->minuteLong);
            $req->bindParam(":longitude-C-seconde", $this->lesPoints[2]->secondeLong);
            
             $req->bindParam(":latitude-D-degre", $this->lesPoints[3]->degreLat);
            $req->bindParam(":latitude-D-minute", $this->lesPoints[3]->minuteLat);
            $req->bindParam(":latitude-D-seconde", $this->lesPoints[3]->secondeLat);
            $req->bindParam(":longitude-D-degre", $this->lesPoints[3]->degreLong);
            $req->bindParam(":longitude-D-minute", $this->lesPoints[3]->minuteLong);
            $req->bindParam(":longitude-D-seconde", $this->lesPoints[3]->secondeLong);
            
            
            
            
            

            $req->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        //fermeture
        $pdo = null;
    }

    public static function getAllZones() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        /*$req = $pdo->prepare("select nomespece, nom_zone, quantite from espece, zone, zone_has_espece where espece.id = zone_has_espece.espece_id AND zone.id = zone_has_espece.zone_id ");*/

       $req = $pdo->prepare("select id, latitude-A-degre,latitude-A-minute,latitude-A-seconde,longitude-A-degre,longitude-A-minute,longitude-A-seconde,latitude-B-degre,latitude-B-minute,latitude-B-seconde,longitude-B-degre,longitude-B-minute,longitude-B-seconde, latitude-C-degre,latitude-C-minute,latitude-C-seconde,longitude-C-degre,longitude-C-minute,longitude-C-seconde, latitude-D-degre,latitude-D-minute,latitude-D-seconde,longitude-D-degre,longitude-D-minute,longitude-D-seconde, nom_zone from zone");

        $req->execute();

        if ($req->rowCount() >= 1) {
            $zones = array();

            while ($ligne = $req->fetch()) {
                $p1 = new GPS($ligne["latitude-A-degre"], $ligne["latitude-A-minute"], $ligne["latitude-A-seconde"], $ligne["longitude-A-degre"], $ligne["longitude-A-minute"], $ligne["longitude-A-seconde"]);
                $p2 = new GPS($ligne["latitude-B-degre"], $ligne["latitude-B-minute"], $ligne["latitude-B-seconde"], $ligne["longitude-B-degre"], $ligne["longitude-B-minute"], $ligne["longitude-B-seconde"]);
                $p3 = new GPS($ligne["latitude-C-degre"], $ligne["latitude-C-minute"], $ligne["latitude-C-seconde"], $ligne["longitude-C-degre"], $ligne["longitude-C-minute"], $ligne["longitude-C-seconde"]);
                $p4 = new GPS($ligne["latitude-D-degre"], $ligne["latitude-D-minute"], $ligne["latitude-D-seconde"], $ligne["longitude-D-degre"], $ligne["longitude-D-minute"], $ligne["longitude-D-seconde"]); 
                $zones[] = new Zone($p1, $p2, $p3, $p4);
            }
            return $zones;
        }
       

    }
    
        public static function getAllTriangles() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select id, xa, ya, xb, yb, xc, yc, couleur from triangles");

        $req->execute();

        if ($req->rowCount() >= 1) {
            $triangles = array();

            while ($ligne = $req->fetch()) {
                $p1 = new Point($ligne["xa"], $ligne["ya"]);
                $p2 = new Point($ligne["xb"], $ligne["yb"]);
                $p3 = new Point($ligne["xc"], $ligne["yc"]);
                $triangles[] = new Triangle($p1, $p2, $p3, $ligne["couleur"], $ligne["id"]);
            }
            return $triangles;
        }
    }
    

    public static function getById($cle) {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select id, latitude-A-degre,latitude-A-minute,latitude-A-seconde,longitude-A-degre,longitude-A-minute,longitude-A-seconde, latitude-B-degre,latitude-B-minute,latitude-B-seconde,longitude-B-degre,longitude-B-minute,longitude-B-seconde, latitude-C-degre,latitude-C-minute,latitude-C-seconde,longitude-C-degre,longitude-C-minute,longitude-C-seconde, latitude-D-degre,latitude-D-minute,latitude-D-seconde,longitude-D-degre,longitude-D-minute,longitude-D-seconde, nom_zone"
                . " where id=:cle");

        
        $req->bindParam(":cle", $cle);
        
        $req->execute();
        if ($req->rowCount() == 1) {
            $ligne = $req->fetch();

            $p1 = new Point($ligne["latitude-A-degre"], $ligne["latitude-A-minute"], $ligne["latitude-A-seconde"], $ligne["longitude-A-degre"], $ligne["longitude-A-minute"], $ligne["longitude-A-seconde"]);
            $p2 = new Point($ligne["latitude-B-degre"], $ligne["latitude-B-minute"], $ligne["latitude-B-seconde"], $ligne["longitude-B-degre"], $ligne["longitude-B-minute"], $ligne["longitude-B-seconde"]);
            $p3 = new Point($ligne["latitude-C-degre"], $ligne["latitude-C-minute"], $ligne["latitude-C-seconde"], $ligne["longitude-C-degre"], $ligne["longitude-C-minute"], $ligne["longitude-C-seconde"]);
            $p4 = new Point($ligne["latitude-D-degre"], $ligne["latitude-D-minute"], $ligne["latitude-D-seconde"], $ligne["longitude-D-degre"], $ligne["longitude-D-minute"], $ligne["longitude-D-seconde"]);
            $zone = new Zone($p1, $p2, $p3, $p4);

            return $zone;
        } else {
            return null;
        }
    }

    public function supprimer() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("delete from zone"
                . " where id=:cle");

        $req->bindParam(":cle", $this->id);

        $req->execute();
    }

}

