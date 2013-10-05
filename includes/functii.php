<?php 

function increment($x){
   return ++$x;    
}


function sum($x){
    $suma=0;
    for($i=0;$i<=$x;$i++)
             $suma+=$i;

    return $suma;   
}


function double($x){
    return $x*=2;    
}

function multiply_by_three($x){
    return $x*=3;
    
}

function add_two($x){
    return $x+=2; 
}
   
?>