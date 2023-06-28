<?php

function randomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }

    return $str;
}


function formatTime($dateTime) {
    try {
        $inputFormat = "Y-m-d H:i:s";
        $date = DateTime::createFromFormat($inputFormat, $dateTime);
        $outputFormat = "g:i a F, Y";
        return $date->format($outputFormat);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return $dateTime;
}