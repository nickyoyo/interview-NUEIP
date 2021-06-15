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
        $list="人易科技:上 機 測 驗 - 演算法";
        $test1=$list;
        //:換全型
         $test1=str_replace(":","：",$test1);
         echo "第一題  ".$test1."<br>";
         
         //清空格，保留-的空格
         $test2=$list;
         $test2 = str_replace( " ", "",$test2);
         $test2 = str_replace( "-", " - ",$test2);
         echo "第二題  ".$test2."<br>";
         
         //輸出特定範圍字元
         $test3=$list;
          $pos1 = strrpos($test3,':');
          $pos2 = strrpos($test3,'-');
          $test3 = substr( $test3 , $pos1+1 , $pos2-$pos1-1 );
            echo "第三題  ".$test3."<br>";;
        ?>
    </body>
</html>
