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
        $list1 = array(77,5,5,22,13,55,97,4,796,1,0,9);
        $list2 = array(77,5,5,22,13,55,97,4,796,1,0,9);
        $ans2 = array();
        //Bubble_sort
         for($i=0; $i<count($list1)-1; $i++){
             for($j=0; $j<count($list1)-1; $j++)
                    if($list1[$j]>$list1[$j+1]){
                        $tmp = $list1[$j];
                        $list1[$j] = $list1[$j+1];
                        $list1[$j+1] = $tmp;
                    }
         }
          echo "Bubble_sort : ";
         for($i=0; $i<count($list1); $i++){
             echo $list1[$i]." ";
         }
         echo "<br>";
         
         //Insert_sort
          for ($i=1;$i < count($list2);$i++){
                $tmp = $list2[$i];
                $j = $i-1;
                while(($j >= 0) && ($list2[$j] > $tmp)) {
                        $list2[$j+1] = $list2[$j];
                        $j--;
                }
                $list2[$j+1] = $tmp;
        }
        echo "Insert_sort : ";
           for($i=0; $i<count($list2); $i++){
             echo $list2[$i]." ";
         }
       ?>
    </body>
</html>
