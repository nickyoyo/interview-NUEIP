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
        $list = array(0,1,2,3,4,5,6,7,8,9);
        $Oddlist = array();
        $Evenlist = array();
        $odd=0;
        $oddpos=0;
        $even=0;
        $evenpos=0;
         for($i=0; $i<count($list); $i++){
             if($list[$i]%2 == 1){
                 $odd+=$list[$i];
                  $Oddlist[$oddpos++]=$list[$i];
             }
             else{
                 $even+=$list[$i];
                 if($list[$i]!=0){
                     $Evenlist[$evenpos++]=$list[$i];
                 }
             }
         }
         echo "第一題 : ".$odd-$even."<br>";
         echo "第二題 : 奇數值->";
          for($i=0; $i<count($Oddlist); $i++){
              echo $Oddlist[$i]." ";
          }
          echo "<br>";
         echo "第二題 : 偶數值->";
          for($i=0; $i<count($Evenlist); $i++){
              echo $Evenlist[$i]." ";
          }
          echo "<br>";
         
          ?>
    </body>
</html>
