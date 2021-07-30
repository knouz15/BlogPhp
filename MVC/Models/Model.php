<?php
abstrate class model//on crée une classe abstraite car elle ne pourra pas etre instanciée
{
    private static $_bdd// $_bdd est la cnx à la bdd, c'est un attribut qui sera privé en static

    // INSTANCIE LA CNX A LA BDD
    private static function setBdd() // si la cnx n'existe pas alors on fera appel à cette fn là
    {
        self::$_bdd = new PDO('mysql:host=localhost;dbname=dbblog;charset=utf8',
        'root','root'); // on a écrit la cnx à la bd
        self::$_bdd->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_WARNING); // on utilise des constantes PDO qui existent déjà. Avec ERRMODE ça permet de préciser au niveau des erreurs
    }

    // RECUPERE LA CNX A LA BDD
    protected function getBdd()// on va créer la méthode qui va récupérer la cnx à la bdd
    {
        if(self::$_bdd == null) // on verifie si l'attibut bdd est null dans s'il n'y a rien  on appelle la fn qu'on a créé setBdd pour mettre à jour la cnx à la bdd
            self::setBdd(); // on met à jour la cnx à la bdd
        return self::setBdd;
    }

    protected function getAll($table, $obj) // on va créer dans table l'objet avec toutes les données qu'on va récupérer 
    {
        $var = []; // la variable var est un tableau vide
        $req = $this->getBdd()->prepare('SELECT * FROM' .table. 'ORDER BY id desc');// notre requete req: on récupère la cnx ensuite on prépare la requete
        $req->execute(); // on execute la requete donc on va créer une boucle
        while($data = $req->fetch(PDO::FETCH_ASSOC)) //en parametre de cette boucle on va créer une variable data 
        {
            $var[] = new $obj($data); //dans le tableau on met les données sous forme d'objet
        }
        return $var; // on retourne notre variable qui contiendra tous nos objets
        $req->closeCurser(); //on ferme le cursor
    }

}