<?php

function checkIfInArea($x, $y, $r)
{
    $part = getNumberOfPart($x, $y);
    switch ($part) {
        case 2:
            if ($x ** 2 + $y ** 2 <= $r ** 2) {
                return true;
            }
            break;
        case 3:
            // y = -x - r
            $minPossibleY = -$x - $r;
            if ($y >= $minPossibleY) {
                return true;
            }
            break;
        case 4:
        case 0:
            if ($x <= $r && abs($y) <= $r) {
                return true;
            }
    }
    return false;
}

function getNumberOfPart($x, $y)
{
    /*     2 | 1
     *     3 | 4
     *
     */
    if ($x === 0 || $y === 0) return 0;
    if ($x * $y > 0) {
        if ($x > 0) return 1;
        else return 3;
    } else {
        if ($x > 0) return 4;
        else return 2;
    }
}


session_start();
date_default_timezone_set('Europe/Moscow');
$currentTime = date("H:i:s");
$start = microtime(true);

if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = array();
}

$x = (int) $_GET['x'] ;
$y = (double) $_GET['y'] ;
$r = (double) $_GET['r'];
//in seconds
$time = microtime(true) - $start;
$result = array($x, $y, $r, checkIfInArea($x, $y, $r), $currentTime, $time);
array_push($_SESSION['history'], $result);


include "set_data_in_table.php";