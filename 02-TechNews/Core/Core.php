<?php

namespace Core;

class Core {

    public function __construct($params) {
        //        echo '<pre>';
        //        print_r($params);
        //        echo '</pre>';


        if(empty($params)){
            $params['controller']   = 'news';
            $params['action']       = 'index';
        }

        //recuperation des parametre 
        $controller = 'Application\Controller\\'.ucfirst($params['controller']).'Controller';
        $action     = $params['action'];


        //on vérifie si le fichier éxiste avant de l'instancier
        if( file_exists( RACINE_SITE.'\\'.$controller.'.php')){
            $obj = new $controller;
            //si la method existe dans mon controller , alors je peut l'éxecuter
            if( method_exists($obj, $action)){
                //execution de l'action
                $obj->$action();
            }else{
                //sinon le fichier du controlleur n'existe pas, donc je renvoie erreur 404
                echo "<h1>Erreur 404 - Page Introuvable</h1><h3>Cette vu n'éxiste pas. </h3>";
            }



        }else{
            //sinon le fichier du controlleur n'existe pas, donc je renvoie erreur 404
            echo "<h1>Erreur 404 - Page Introuvable</h1><h3>Ce Controleur n'éxiste pas. </h3>";
        }






        //        if($controller == "news" && $action == "index"){
        //            echo '<h1>ACCUEIL !</h1>';
        //        }
        //
        //        if($controller == "news" && $action == "categorie"){
        //            echo '<h1>CATEGORIE !</h1>';
        //        }
        //
        //        if($controller == "news" && $action == "article"){
        //            echo '<h1>ARTICLE !</h1>';
        //        }
        //
        //        echo '<h1>Hello WF3 !!  </h1>';
    }
}
?>