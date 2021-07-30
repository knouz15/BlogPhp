<?php //on ouvre la balise php
// on va lancer notre router
require_once('controllers/Router.php'); // on va requérir notre fichier Router.php qui se trouve dans le dossier controllers

$router = new Router(); // on crée une variable router qui sera égale à new.. donc on fait une instance de la classe router dans l'objet router 
$router->routeReq(); // on lance la fonction la méthode qu'on a créé qui s'appele routeReq




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>