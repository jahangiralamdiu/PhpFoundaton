<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function getGrade($mark )
{
    
if($mark>100)
{
    $grade = "Wrong";
    //return $grade;
}

else if($mark>=80)
{
    $grade = "A+";
    //return $grade;
    
}

else if ($mark>=70)
{
    $grade = "A";
    //return $grade;
}


else if($mark>=60)
{
     $grade = "A-";
    //return $grade;
}

else if($mark>=50)
{
     $grade = "B";
    //return $grade;
}

else if($mark>=40)
{
    $grade = "C";
    //return $grade;
}

else if($mark>=33)
{
     $grade = "D";
    //return $grade;
  
}

else if($mark<=32)
{
     $grade = "F";
    //return $grade;
}

return $grade;

}

echo getGrade( 58);