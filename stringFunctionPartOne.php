<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Function name chr($ascii)

$str = "The String is ended by the first letter of English alphabet : ";

$str.=chr(65);

echo $str;

//Function name chop()

echo "<pre>";
echo chop("   Jahangir   ");//right spaces are eliminated
echo "&nbsp;";
echo chop("Alam257444", "0..9");
echo "</pre>"; //The Out put is Jahangir Alam

//Function name bin2hex()

$str2=01011110;

echo bin2hex($str2); 

//Function chunk_split()

$str3="JahangirAlam";
echo "<br>";
echo chunk_split($str3, 8);
echo "<br>";

//Function convert_uudecode
echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`");
echo "<br>";

//Function convert_uudecode convert_uuencode()

$some_string = "test\ntext text\r\n";

echo convert_uuencode($some_string);
echo "<br>";

//Function count_chars()

$data = "Two Ts and one F.";

foreach (count_chars($data, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
}

//Function array_change_key_case

$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));

$input_array2 = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array2, 2));
print_r(array_chunk($input_array2, 2, true));