<?php

include 'article.class.php';
include 'auteur.class.php';
include 'categorie.class.php';


//Création d'une instance de la classe article 
//ici , notre variable $UnArticle est un Objet de la classe Article.
//en ce sens, elle a acces a l'ensemble des propriéter et fonction qui la compose.



$UnArticle = new Article("La Formation WF3", "Une formation certifiante en 3 mois ! ", "Rejoingnez-nous à Limas et vous verrez bien ! ", "wf3.jpg", "04/08/2017");

$Article2 = new Article("Les Jack Russel", "Des petit chien plein de vie ", "Il aime les bisous et les calin", "zarzaille.jpg", "04/08/2017");

$Article3 = new Article("Les Jack Russel3", "Des petit chien plein de vie ", "Il aime les bisous et les calin", "zarzaille.jpg", "04/08/2017");

$Article4 = new Article("Les Jack Russel4", "Des petit chien plein de vie ", "Il aime les bisous et les calin", "zarzaille.jpg", "04/08/2017");

$Auteur = new Auteur("LIDON", "Nicolas", "kiki-mixtomatoz@hotmail.fr");

$Auteur2 = new Auteur("LIEGAR", "Hugo", "Hugo@hugo.fr");

$UneCategorie = new Categorie("Formation Informatique");
$UneCategorie->AjouterUnArticle($UnArticle);
$UneCategorie->AjouterUnArticle($Article2);

$Categorie2 = new Categorie("Chien de la casse2");
$Categorie2->AjouterUnArticle($UnArticle);
$Categorie2->AjouterUnArticle($Article2);

$Categorie3 = new Categorie("Chien de la casse3");
$Categorie3->AjouterUnArticle($UnArticle);
$Categorie3->AjouterUnArticle($Article2);

$Categorie4 = new Categorie("Chien de la casse4");
$Categorie4->AjouterUnArticle($UnArticle);
$Categorie4->AjouterUnArticle($Article2);
//$UneCategorie->AjouterUnArticle("Titre de mon article");

$UnArticle->setAuteur($Auteur);
$Article2->setAuteur($Auteur2);
$Article3->setAuteur($Auteur2);
$Article4->setAuteur($Auteur2);



echo '<ol>';
echo '<li>';
echo $UneCategorie->getLibelle();
echo '</li>';
echo '<ul>';
$Articles = $UneCategorie->getCollectionArticles();
foreach ($Articles as $Article) :
echo '<li>'. $Article->getTitre()." - ". $Article->getAuteur() ->getNomComplet() .'</li>';

endforeach;
echo '</ul>';
echo '</ol>';

echo '<hr>';

echo '<pre>';
print_r($UneCategorie);

echo '</pre>';

//affichez l'objet UnArticle

echo '<pre>';
print_r($UnArticle);
print_r($Article2);
echo '</pre>';

//je veut affichez le titre de mon premier article 
// echo $UnArticle->Titre;
//Uncaught Error: Cannot access private property Article::$Titre 


echo $UnArticle->getTitre();
echo '<br/>';
echo $UnArticle->getAccroche();
echo '<br/>';
echo $UnArticle->getDescription();
echo '<br/>';
echo $UnArticle->getFeaturedImage();
echo '<br/>';
echo $UnArticle->getDateCreationArticle();
echo '<br/>';

echo '<br/>';
echo $Article2->getTitre();
echo '<br/>';
echo $Article2->getAccroche();
echo '<br/>';
echo $Article2->getDescription();
echo '<br/>';
echo $Article2->getFeaturedImage();
echo '<br/>';
echo $Article2->getDateCreationArticle();
echo '<br/>';


//ici je vais modifié le titre de mon article
echo '<br><br>';
$UnArticle->setTitre('La Formation WebForce3');
echo $UnArticle->getTitre();


echo '<pre>';
print_r($UnArticle);
echo '</pre>';

echo '<br/>';
echo $UnAuteur->getNom();
echo '<br/>';
echo $UnAuteur->getPrenom();
echo '<br/>';
echo $UnAuteur->getEmail();
echo '<br/>';

echo '<br/>';
echo $Auteur2->getNom();
echo '<br/>';
echo $Auteur2->getPrenom();
echo '<br/>';
echo $Auteur2->getEmail();
echo '<br/>';




echo '<br/>';
echo $Categorie->getlibelle();
echo '<br/>';


echo '<br/>';
echo $Categorie2->getlibelle();
echo '<br/>';




?>