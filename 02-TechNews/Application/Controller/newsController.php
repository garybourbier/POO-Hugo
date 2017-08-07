<?php
namespace Application\Controller;

class NewsController extends \Core\Controller\AppController
{
    public function  index(){
        $this->render('news/index',["titre"=>"WebForce3", "accroche"=>"TrollForce3 !"]);
    }

    public function  categorie(){
        echo "<h1>Je suis la page Catégorie</h1>";
    }

    public function  article(){
        echo "<h1>Je suis la page d'article</h1>";
    }
}

?>