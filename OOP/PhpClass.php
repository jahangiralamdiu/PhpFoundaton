<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class User {
    
    var $name = "FTFL";
    
    var $email = '';
    
    function getName()
    {
        return "FTFL2";
    }
    
      
}
 
$user = new User();
 
var_dump($user);
echo $user->name;
echo $user->getName();