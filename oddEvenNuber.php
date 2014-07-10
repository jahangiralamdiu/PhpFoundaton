<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$_startNumber = 1;

$_endNumber = 100;

echo "The Odd Numbers between 1 to 100 are : ";

echo "<br/>";


for($i=$_startNumber; $i<=$_endNumber; $i++)
{
    if($i%2!=0)
    {
        echo $i;
        echo "<br/>";
    }
}
echo "--------------------------------------------- ";
echo "<br/>";
echo "The Even Numbers between 1 to 100 are : ";

echo "<br/>";


for($i=$_startNumber; $i<=$_endNumber; $i++)
{
    if($i%2==0)
    {
        echo $i;
        echo "<br/>";
    }
}