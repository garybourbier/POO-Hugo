<?php
namespace Core\Controller;

class AppController {

    private $_viewparams;

    //permet de générer l'affichage de la vu passer en parametre
    protected function render($view, $viewparams = '') {

        //Recuperation et affectation des parametre de la vu
        $this->_viewparams = $viewparams;
        
        //affichage du header
        require (HEADER_SITE);

        //inclusion de la vu 
        include_once VIEW_SITE.'/'.$view.'.php';

        //affichage du footer
        require (FOOTER_SITE);
        
        
        
        
    }

    public function getParams(){
        return $this->_viewparams;
    }
}



?>