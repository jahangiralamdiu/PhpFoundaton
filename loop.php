<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$_startNum = 1;
$_endNum = 10;

$_total=0;

for($i=$_startNum; $i<=$_endNum; $i++)
{
    $_total +=  $i;
    
}
echo $_total;