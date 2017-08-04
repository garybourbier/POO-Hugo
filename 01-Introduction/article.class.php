<?php

//création d'une class article
//une class est un e entité regroupant des variable / propriétés

class Article{

    //Déclaration des propriétés de notre class article 

    private $Titre,
    $Accroche,
    $Description,
    $FeaturedImage,
    $DateCreationArticle,
    $Auteur;

    //afin de pouvoir attribuer une valeur a mes différente variables, je vais mettre en place un constructeur 

    public function __construct(
        $Titre,
        $Accroche,
        $Description,
        $FeaturedImage,
        $DateCreationArticle) 
    {

        //ici, nous allons attribuer a chaque proprieter de notre class, 
        //la valeur qui a été passer au constructeur 

        $this->Titre                = $Titre;
        $this->Accroche             = $Accroche;
        $this->Description          = $Description;
        $this->FeaturedImage        = $FeaturedImage;
        $this->DateCreationArticle  = $DateCreationArticle;

    } //fin de mon constructeur

    //Getters : Fonction qui vont avoir la charge de nous renvoyer nos information 
    //Nous aurons une fonction par proprieter de notre classe

    public function getTitre(){
        return $this->Titre;
    }

    public function getAccroche(){
        return $this->Accroche;
    }

    public function getDescription(){
        return $this->Description;
    }

    public function getFeaturedImage(){
        return $this->FeaturedImage;
    }

    public function getDateCreationArticle(){
        return $this->DateCreationArticle;
    }

        public function getAuteur(){
        return $this->Auteur;
    }

    //setters : function qui va avoir la charge de modifié les proprieter de notre classe

    public function setTitre($nouveauTitre){
        $this->Titre = $nouveauTitre;
    }

    public function setAuteur(Auteur $Auteur){
        $this->Auteur = $Auteur;
    }
    
} // fin de ma class article

?>