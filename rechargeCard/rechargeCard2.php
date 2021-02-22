<?php


function genPin()
{
    return rand(100000000000, 999999999999);
}

function checkArr()
{
    static $rechargePin = array();
    static $n = 0;
    $pin = genPin();
    if (in_array($pin, $rechargePin)) {
        return checkArr();
    } else {
        array_push($rechargePin, $pin);
        $n += 1;
        echo $pin .= "\n";
    }
    if ($n < 200)
        return checkArr();
}

checkArr();
