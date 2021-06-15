<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $lista = array(77,5,5,22,13,55,97,4,796,1,0,9);
        $listb = array(0,1,2,3,4,5,6,7,8,9);
        $listc = array();
        $listd = array();
        $liste = array();
        $cpos=0;
        $dpos=0;
        $epos=0;
        //Bubble_sort
         for($i=0; $i<count($lista); $i++){
             for($j=0; $j<count($listb); $j++)
                    if($lista[$i] == $listb[$j]){
                      $listc[$cpos++] = $listb[$j];
                    }
         }
          echo "A交集B : ";
         for($i=0; $i<count($listc); $i++){
             echo $listc[$i]." ";
         }
         echo "<br>";
         
          for($i=0; $i<count($lista); $i++){
             for($j=0; $j<count($listb); $j++){
                    if($lista[$i] == $listb[$j]){
                      break;
                } 
            }
            if(count($listb) == $j){
                $listd[$dpos++] = $lista[$i];
            }
         }
          echo "A差集B : ";
         for($i=0; $i<count($listd); $i++){
             echo $listd[$i]." ";
         }
         echo "<br>";
         
            for($i=0; $i<count($lista); $i++){
                $liste[$epos++] = $lista[$i];
            }
           for($i=0; $i<count($listb); $i++){
             for($j=0; $j<count($liste); $j++){
                   if($liste[$j] == $listb[$i]){
                      break;
                   }
            }
            if(count($liste) == $j){
                $liste[$epos++] = $listb[$i]; 
            }
         }
         
          echo "A聯集B : ";
         for($i=0; $i<count($liste); $i++){
             echo $liste[$i]." ";
         }
         echo "<br>";
      
       ?>
    </body>
</html>
