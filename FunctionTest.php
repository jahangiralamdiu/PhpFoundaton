<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function getTitleAndStar ($type="")
{
    $keyValue = 0;
    
$films = array(
   "genres" => array("comedy", "tragedy", "action", "romance"),
    "film_titles" => array("Big", "Star War", "Titanic", "French Key"),
    "stars" => array("Bill Murry", "Mark Hammels", "Leonard Deaprio", "Cate Blanchett"),
    
);

foreach ($films as $fkey => $first) {
    
    if($fkey=="genres")
    {
        foreach ($first as $key => $second)
        {
            if($second==$type)
            {
               $keyValue=$key; 
               
            }
            
        }
    }
  
}

  echo $films['film_titles'][$key];

}
getTitleAndStar ("tragedy");