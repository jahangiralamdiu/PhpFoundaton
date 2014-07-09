<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Function array_change_key_case

$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));

$input_array2 = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array2, 2));
print_r(array_chunk($input_array2, 2, true));