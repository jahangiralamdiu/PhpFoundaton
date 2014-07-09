<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$mark =32;

if($mark>100)
{
    echo "The input is wrong";
}

else if($mark>=80)
{
    echo "The grade is A+";
}

else if ($mark>=70)
{
    echo "The grade is A";
}


else if($mark>=60)
{
    echo "The grade is A-";
}

else if($mark>=50)
{
    echo "The grade is B";
}

else if($mark>=40)
{
    echo "The grade is C";
}

else if($mark>=33)
{
    echo "The grade is D";
  
}

else if($mark<=32)
{
    echo "The grade is F";
    
}