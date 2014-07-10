<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User {
    
    protected function  userAger(){}
    
}

class Person extends User {
    public function  getUserAge ()
    {
        return $this->userAger();
    }
}

$user = new Person();

echo $user->getUserAge();

echo $user->userAge(); // Fatal Error