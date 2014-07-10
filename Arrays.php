<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$cars = array('toyota', 'sedan', 'merchedize');
$cars [6] ='Premeo';
$cars [] ='Premeosecond';
echo "<pre>";
print_r($cars);

echo "</pre>";


foreach($cars as $key=>$car)
{
    echo $key."--".$car;
    echo "<br / >";
}