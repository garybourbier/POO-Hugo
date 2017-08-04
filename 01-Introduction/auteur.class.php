<?php

//création d'une class article
//une class est un e entité regroupant des variable / propriétés

class Auteur{

    //Déclaration des propriétés de notre class article 

    private $Nom,
    $Prenom,
    $Email;


    //afin de pouvoir attribuer une valeur a mes différente variables, je vais mettre en place un constructeur 

    public function __construct(
        $Nom,
        $Prenom,
        $Email) 
    {

        //ici, nous allons attribuer a chaque proprieter de notre class, 
        //la valeur qui a été passer au constructeur 

        $this->Nom                = $Nom;
        $this->Prenom             = $Prenom;
        $this->Email              = $Email;

    } //fin de mon constructeur

    //Getters : Fonction qui vont avoir la charge de nous renvoyer nos information 
    //Nous aurons une fonction par proprieter de notre classe

    public function getNom(){
        return $this->Nom;
    }

    public function getPrenom(){
        return $this->Prenom;
    }
    
    public function getNomComplet(){
        return $this->Prenom." ".$this->Nom;
    }

    public function getEmail(){
        return $this->Email;
    }




    //setters : function qui va avoir la charge de modifié les proprieter de notre classe

    public function setNom($nouveauNom){
        $this->Nom = $nouveauNom;
    }


} // fin de ma class article

?>