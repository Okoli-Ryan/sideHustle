<?php

$rechargePin = array();

function genPin(){
    return rand(100000000000, 999999999999);
}

function checkArr($pin){
    global $rechargePin;
    if(in_array($pin, $rechargePin)){
        return checkArr(genPin());
    }
    return $pin;
}

for ($i = 0; $i < 200; $i++){
    $pin = genPin();

    array_push($rechargePin, checkArr($pin));
    echo $rechargePin[$i] .= "\n";
}