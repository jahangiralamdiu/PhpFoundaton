<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function getTitleAndStar ($genre="")
{
    
$films = array(
   "genres" => array("comedy", "tragedy", "action", "romance"),
    "film_titles" => array("Big", "Star War", "Titanic", "French Key"),
    "stars" => array("Bill Murry", "Mark Hammels", "Leonard Deaprio", "Cate Blanchett"),
    
);
    echo $films['genres'][0];
}
getTitleAndStar ();