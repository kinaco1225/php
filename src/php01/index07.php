<?php

function text($score1, $score2, $score3){
    $add = $score1 + $score2 + $score3;
    if ($add > 210){
        echo "合計点が" . $add ."なので合計です";
    }else {
        echo "合計点が" . $add ."なので不合計です";
    } 
}

echo (text(80,60,90));

function getSquareArea($base, $height){
  return $base * $height;
}
function getTriangleArea($base, $height){
  return $base * $height /2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height){
  return ($upperBase + $lowerBase) * $height /2; 
}

echo getSquareArea(5, 5);
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);