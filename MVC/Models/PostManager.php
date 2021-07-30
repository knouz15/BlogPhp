<?php
class PostManager extends model  //on crée notre classe portant le meme nom que le fichier pour que l'autoload puisse retrouver le fichier.php par rapport au nom de la classe 
{
    return $this->getAll('posts','Post');//on récupère les données dans la table posts. Post va etre un objet
}