<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Function name chr($ascii)

$str = "The String is ended by the first letter of English alphabet : ";

$str.=chr(65);

echo $str;

//Function name chop()

echo "<pre>";
echo chop("   Jahangir   ");//right spaces are eliminated
echo "&nbsp;";
echo chop("Alam257444", "0..9");
echo "</pre>"; //The Out put is Jahangir Alam

//Function name bin2hex()

$str2=01011110;

echo bin2hex($str2); 