<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function getTitleAndStar ($type="")
{
    $keyValue = 0;
    $filmTitle = "";    
    
$films = array(
   "genres" => array("comedy", "tragedy", "romance", "action"),
    "film_titles" => array("Big", "Star War", "French Key", "Titanic",),
    "stars" => array("Bill Murry", "Mark Hammels",  "Cate Blanchett", "Leonard Deaprio"),
    
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

  echo "Film Title: ".$films['film_titles'][$keyValue];
  echo "<br/>";
  echo "Film Star: ".$films['stars'][$keyValue];

}


function printTitleAndStar()
{
    getTitleAndStar ("action");
}