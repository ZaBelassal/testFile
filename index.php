<?php


echo nl2br(file_get_contents('zakaria.txt'));

//nl2br pour garder la mise en page;
// var_dump(file('zakaria.txt')[count(file('zakaria.txt'))-1]);
// readfile('zakaria.txt');

//Creer et écrire ;

//file_put_contents('zakaria.txt',"\nJ'aime PHP", FILE_APPEND);
//$file_put_contents('test.text',"c+b");
//fwrite($fichier,"Bonjour les amis");
//fclose($fichier);


?>