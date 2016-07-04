<?php

include_once 'Polygone.php';
include_once 'Config.php';

class Triangle extends Polygone {

    public $id;

    public function __construct($p1, $p2, $p3) {
        $desPoints = array($p1, $p2, $p3);
        $this->id = $cle;
        parent::__construct($desPoints);
    }



    //calcul avec la formule de héron
    //https://fr.wikipedia.org/wiki/Formule_de_H%C3%A9ron
    public function CalculerSurface() {
        $a = $this->lesPoints[0]->calculerDistance(
                $this->lesPoints[1]
        );
        $b = $this->lesPoints[2]->calculerDistance(
                $this->lesPoints[1]
        );
        $c = $this->lesPoints[0]->calculerDistance(
                $this->lesPoints[2]
        );

        $p = ($a + $b + $c) / 2;

        return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
    }

    
    
    
    
    public function Inserer() {

        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);


            // pour éviter les injections sql
            $req = $pdo->prepare("INSERT INTO zone "
                    . "(latitude-A,longitude-A,latitude-B,longitude-B,latitude-C, longitude-C,latitude-D, longitude-) "
                    . "values (:latitude-A, :longitude-A,:latitude-B,:longitude-B,:latitude-C, :longitude-C,:latitude-D, :longitude-D)");
            $req->bindParam(":latitude-A", $this->lesPoints[0]->latitudeNumerique);
            $req->bindParam(":longitude-A", $this->lesPoints[0]->longitudeNumerique);
            $req->bindParam(":latitude-B", $this->lesPoints[1]->latitudeNumerique);
            $req->bindParam(":longitude-B", $this->lesPoints[1]->longitudeNumerique);
            $req->bindParam(":latitude-C", $this->lesPoints[2]->latitudeNumerique);
            $req->bindParam(":longitude-C", $this->lesPoints[2]->longitudeNumerique);
            $req->bindParam(":latitude-D", $this->lesPoints[3]->latitudeNumerique);
            $req->bindParam(":longitude-D", $this->lesPoints[3]->longitudeNumerique);
            

         $req->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        //fermeture
        $pdo = null;
    }

    public static function getAllTriangles() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select id, latitude-A, longitude-A, latitude-B, longitude-B, latitude-C, longitude-C");

        $req->execute();

        if ($req->rowCount() >= 1) {
            $triangles = array();

            while ($ligne = $req->fetch()) {
                $p1 = new Point($ligne["latitude-A"], $ligne["longitude-A"]);
                $p2 = new Point($ligne["latitude-B"], $ligne["longitude-B"]);
                $p3 = new Point($ligne["latitude-C"], $ligne["longitude-C"]);
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

        $req = $pdo->prepare("select id, latitude-A, longitude-A, latitude-B, longitude-B, latitude-C, longitude-C, couleur from triangles"
                . " where id=:cle");

        
        $req->bindParam(":cle", $cle);
        
        $req->execute();
        if ($req->rowCount() == 1) {
            $ligne = $req->fetch();

            $p1 = new Point($ligne["latitude-A"], $ligne["longitude-A"]);
            $p2 = new Point($ligne["latitude-B"], $ligne["longitude-B"]);
            $p3 = new Point($ligne["latitude-C"], $ligne["longitude-C"]);
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
