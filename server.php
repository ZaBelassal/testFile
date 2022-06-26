<?php
$uri = $_SERVER['REQUEST_URI'];

switch($uri){

    case "/":
        echo "Page Acceuil";
    break;
    
    case "/contact":
        echo "Page Acceuil";
    break;

    case "/info":
        echo "Page Acceuil";
    break;

    default : echo "404 Not found";
    break;

}
?>