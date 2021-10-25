<?php
$frase=$_POST['mensaje'];
echo $frase;

//Esto es X''
//Establecemos dos variables una para par y otra para impar

$par="";
$impar="";

//Hacemos un for para recorrer la frase entera

for ($i=0;$i<strlen($frase);$i++){
    if ($i % 2 == 0){
        $par=$par.$frase{$i};
    } else {
        $impar=$impar.$frase{$i};
    }
}

$impar=strrev($impar);
$fraseTerminada=$par.$impar;
echo '</br>';
echo $fraseTerminada;

//Esto es X'

$fraseX=$fraseTerminada;

$ultimo="";
$consecutivos="";

for ($i=0;$i<strlen($fraseX);$i++){ 
    if ($fraseX{$i}=='a' || $fraseX{$i}=='e' || $fraseX{$i}=='i' ||  $fraseX{$i}=='o' ||  $fraseX{$i}=='u'){
        $consecutivos=strrev($consecutivos);
        $ultimo=$ultimo.$consecutivos.$fraseX{$i};
        $consecutivos="";
    } else {
        $consecutivos=$consecutivos.$fraseX{$i};
    }
}
$consecutivos=strrev($consecutivos);
$fraseFinal=$ultimo.$consecutivos;
echo "<br>";
echo $fraseFinal;
