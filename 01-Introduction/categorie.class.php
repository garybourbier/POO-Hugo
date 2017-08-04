<?php

//création d'une class article
//une class est un e entité regroupant des variable / propriétés

class Categorie{

    //Déclaration des propriétés de notre class article 

    private $Libelle,
            $CollectionArticles = [];
    

        //afin de pouvoir attribuer une valeur a mes différente variables, je vais mettre en place un constructeur 

        public function __construct(
        $Libelle) 
    {

        //ici, nous allons attribuer a chaque proprieter de notre class, 
        //la valeur qui a été passer au constructeur 

        $this->Libelle                = $Libelle;

    } //fin de mon constructeur

    //Getters : Fonction qui vont avoir la charge de nous renvoyer nos information 
    //Nous aurons une fonction par proprieter de notre classe

    public function getLibelle(){
        return $this->Libelle;
    }

    public function getCollectionArticles(){
        return $this->CollectionArticles;
    }


    //setters : function qui va avoir la charge de modifié les proprieter de notre classe

    public function setLibelle($nouveauLibelle){
        $this->Libelle = $nouveauLibelle;
    }
    
    
    //permet d'ajouté un objet article a notre tableau (collection) d'articles
        public function AjouterUnArticle(Article $Article){
        $this->CollectionArticles[] = $Article;
    }


} // fin de ma class article

?>