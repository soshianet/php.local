<?php

include_once "users.php";
function select_bg_color($color){
    $result="";
    switch ($color){
        case "red";
            $result = "#c00";
            break;
        case "green";
            $result = "#0c0";
            break;
        case "blue";
            $result = "#00c";
            break;

    }
    return $result;
}

function set_numbers($num1,$num2){
    $arr = array("number_1"=>$num1, "number_2"=>$num2);
    return implode(",",$arr);
}

function greater_than(){
    if ($user > 25)
        echo $user;
    else
        echo 'the number is smaller than 25.';
}