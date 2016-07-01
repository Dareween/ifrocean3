<?php
include_once'GPS.php';
include_once'Polygone.php';
include_once'Triangle.php';
include_once'Zone.php';

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>test de géometrie</title>
    </head>
    <body>
        <?php
        
        $a=new GPS(47,13, 02.40, 1, 33, 12.70);
        $b=new GPS(47,13, 02.30, 1, 33, 12.70);
        $c=new GPS(47,13, 02.20, 1, 33, 13.10);
        $d=new GPS(47,13, 02.60, 1, 33, 13.30);
        
        
      
       echo"AB=".$a->calculerDistance($b);
       
       echo"<br>BC=".$b->calculerDistance($c);
       echo"<br>CD=".$c->calculerDistance($d);
       echo"<br>DA=".$d->calculerDistance($a);
       
        
        $triangle=new Triangle($a, $b, $c);
        echo "<br>";
        echo "Surface triangle:".$triangle->calculerSurface();
        
              echo "<br>";
               $triangle2=new Triangle($c, $d, $a);
        echo "<br>";
        echo "Surface triangle2:".$triangle2->calculerSurface();
        
              echo "<br>";
           
        
        $zone=new Zone($a, $b, $c, $d);
        echo "<br>";
        echo "Surface zone:".$zone->calculerSurface();
        
              echo "<br>";
              
          
       
              
       
        
          
        ?>
        
    </body>
</html>
