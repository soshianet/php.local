<?php
include_once "user.php";


function get_number(){
    global $number;
    if($number>25)
        echo $number;
    else
        echo 'nothing';
}

function setNumber($arr){
    $res = '';
    switch ($arr){
        case 'number_1':
            $res = 'number is one';
        case 'number_2':
            $res = 'number is two';
        case 'number_3':
            $res = 'number is three';
        default:
            $res = 'number is not chosen';
        return $res;
    }
}