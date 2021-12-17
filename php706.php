<?php

$personal = function(){
    return "LOL";
};
$personal2 = fn()=>"Asshole gaming";

$nope= function($x,$y){
    return $x +$y;
};
$ee =fn($x,$y)=>$x+$y;
echo $personal();
echo $personal2();
echo $nope(10,5);
$ee(20,90);