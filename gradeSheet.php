<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$mark =43;

if($mark<=32)
{
    echo "The grade is F";
}

if($mark<40 && $mark>=33)
{
    echo "The grade is D";
}

if($mark<50 && $mark>=40)
{
    echo "The grade is C";
}

if($mark<60 && $mark>=50)
{
    echo "The grade is B";
}

if($mark<70 && $mark>=60)
{
    echo "The grade is A-";
}

if($mark<80 && $mark>=70)
{
    echo "The grade is A";
}

if($mark<=100 && $mark>=80)
{
    echo "The grade is A+";
}