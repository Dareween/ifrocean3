

<?php

include_once 'GPS.php';

/**
 * Représente un polygone dans un repère à 2 dimensions
 *
 * @author Alan
 */
abstract class Polygone {

    //un tableau de point
    public $lesPoints;

    /**
     * 
     * @param array(Points) $desPoints des points pour faire un polygone
     */
    public function __construct($desPoints) {
        $this->lesPoints = $desPoints;
    }

    public function calculerPerimetre() {
        $res = 0;
        for ($i = 0; $i < count($this->lesPoints); $i++) {
            $j = $i + 1;
            if ($j == count($this->lesPoints)) {
                $j = 0;
            }
            $res+=$this->lesPoints[$i]->calculerDistance(
                    $this->lesPoints[$j]
            );
        }

        return $res;
    }

    public abstract function CalculerSurface();
}
