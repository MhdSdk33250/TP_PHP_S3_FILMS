<?php
require_once('View/View.php');
class ControllerAjoutFilm{
    private $_FilmAjoutManager;
    private $_view;

    public function __construct($url){
        if(!isset($url) && count($url)>1){
            throw new Exception('Page introuvable');
        }else{
            $this->filmAjout();
        }
    }
    private function filmAjout(){
        require('Models/FilmManager.php');
        // probl : peut pas instancier le manager
        $this->_FilmManager = new FilmManager;

        
        $this->_view = new View('FilmAjout');
        $this->_view->generate(array());
    }
}