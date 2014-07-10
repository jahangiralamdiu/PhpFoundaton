<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

for ($i = 0; $i <= 5; $i++) 
{
    for ($j = 1; $j <= $i; $j++) 
    {
        echo "*&nbsp;";
    }
    echo "<br>";
}
$arryOne = array("Result");
$arrayTwo= array ($arryOne);
$array3D = array($arrayTwo);

echo $array3D[0][0][0];