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
        return $this->name;
    }
    
      
}
 
$user = new User();
 $user2 = new User();
 $user3 = new User();
var_dump($user);
echo $user->name;
echo $user->getName();

echo $user->name="Jahangir";

echo $user2->name;