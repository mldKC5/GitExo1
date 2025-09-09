<?php

$ident = ($_POST["ident"]);
$mdp = ($_POST["mdp"]);

if($ident == "admin" && $mdp == "azerty"){
    $host = $_SERVER['HTTP_HOST'];
    $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host$uri/profil.html");
}else{
    $host = $_SERVER['HTTP_HOST'];
    $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host$uri/index.html");
}
?>