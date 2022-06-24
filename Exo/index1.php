<?php

$myfile = fopen("decimal.txt","r+w");
$myNewFile = fopen("binaire.txt","r+w");


var_dump(file('decimal.txt'));

$nmbrs = file('decimal.txt');
echo "<br>";
var_dump($nmbrs);
echo"<br>";

function conversion($L){

for($i=0;$i<count($L);$i++){

    file_put_contents("binaire.txt",base_convert($L[$i],10,2)."\n", FILE_APPEND);
}
return $L;
}

var_dump(conversion($myNewFile));
echo"<br>";
var_dump(conversion($myNewFile));


?>