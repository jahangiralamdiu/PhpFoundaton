<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function getGrade($mark )
{
   $grade="";
   
if($mark>100)
    
{
    $grade = "Wrong";

}

else if($mark>=80)
{
    $grade = "A+";

    
}

else if ($mark>=70)
{
    $grade = "A";

}


else if($mark>=60)
{
     $grade = "A-";
}

else if($mark>=50)
{
     $grade = "B";

}

else if($mark>=40)
{
    $grade = "C";
}

else if($mark>=33)
{
     $grade = "D";
  
}

else if($mark<=32)
{
     $grade = "F";
}

return $grade;

}

echo getGrade( 58);