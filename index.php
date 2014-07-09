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
        // put your code here
        echo "Hello FTFL <br>";
        echo "The length of Jahangir &nbsp", strlen("Jahangir"), "<br>";
        echo strpos("Hello world!","world");
        echo strpos("Hello world!","world"), "<br>";
        echo strpos("My name is Jahangir", "Jahangir"), "<br>";
        
        //Data Type
        $_anumber = 1234;
        echo "_anumber is an ", gettype($_anumber);
        echo "<br>the valu of _anumber is $_anumber";
        
        echo gettype($_anumber);
        
        $_aString = 'abcd$_anmber';
        $_anotherString="abcd$_anumber";
        
        echo $_aString;
        echo "<br/>";
        echo $_anotherString;
        $aFloatedNumber = 12.5;
        echo gettype($aFloatedNumber);
        $aBoolean = true;
        $anotherBoolean = false;
        echo gettype($anotherBoolean);
        echo gettype($aBoolean);
        //echo $aBoolean;
        echo $anotherBoolean;
        
        $a=2*3+5;
        echo $a."\n";
        echo $a."\n";
        
        echo nl2br($a."\n".$a);
     
        
        ?>
    </body>
</html>
