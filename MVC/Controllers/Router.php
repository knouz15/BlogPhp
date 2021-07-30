<?php
class Router
{
    private $_ctrl;
    private $_view;
    public function routeReq()
    {
        try
        {   //CHARGEMENT AUTOMTIQUE DES CLASSES
            spl_autoload_register(function($class)//sert à charger automatiquement les classes
            {
                require_once('models/'.$class.'.php');// dans le dossier model, le nom du parametre classe.php. S'il détecte le .php par rapport au parametre class il va inclure directement ce fichier.php
            });

            $url = ''; //on cré une variable url qui sera égale à rien du tout
        
            // LE CONTROLLER EST INCLU SELON L'ACTION DE L'UTILISATEUR
            if(isset($_GET['url']))
            {
                $url = explode('/',filter_var($_GET['url'],
                FILTER_SANITIZE_URL));

                $controller = ucfirst(strtolower($url[0])); //on va créer une variable controller qui sera égale au 1er parametre qui sera dans l'rul donc url 0 c'est le 1er parametre puisqu'on commence par 0, la 1ere lettre en majuscule et strtolower c'est tt le reste en minuscule
                $controllerClass = "Controller".$Controller; // on crée une variable controllerClass égale à controller avec l'action   de l'utilisateur
                $controllerFile = "Controller/".controllerClass.".php"; //on cré une variable controllerFile, c'est le router qui va definir quel controller il va inclure selon l'action de l'utilisateur

                if(file_exists($controllerFile))//on verifie si le fichier .php existe par exemple controllerAccueil
                {
                    require_once($controllerFile)//alors on va requérir ce meme fichier 
                    $this->_ctrl = new $controllerClass($url);//$this->ctrl c'est l'attribut privé controller qu'on a créé au début. En parametre on va passer l'url
                }//donc pr pouvoir utiliser l'encapsulation pour un max de sécurité, l'attribut controller thiscontroller this->ctrl sera égal à new controllerClass qui sera ce qu'on va lancer ici ce sera l'instance de cette classe ici par exemple le contrller accueil ca sera une classe on lancera une instance de cette classe en récupérant tous les paramètres url
                else    
                    throw new Exception('page introuvable');
            }
            else
            {
                require_once('controllers/ControllerAccueil.php');// s'il n'y a pas de get ('url') il faut bien qu'une page se charge automatiquement et ce sera la page accueil donc ça sera le controlleur par défaut qui sera chargé càd le controllerAccueil
                $this->_ctrl = new ControllerAccueil($url);// y a pas besoin de passer pas une variable
                //en paramètre la variable url qui contiendra tous les paramètres de l'url
            }
        }
        // GESTION DES ERREURS
        catch(Exception $e)//pour les exceptions
        {
            $errorMsg = $e->getMessage();//on va créer une variable erreurmessage qui sera égale à: on va récupérer les erreurs en question
            require_once('views/viewError.php');//on va requérir pas un controller mais directement la page vue erreur donc je récupère la vue de cette manière pour l'instant
        }
    }
}