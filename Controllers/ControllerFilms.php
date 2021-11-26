<?php
require_once('View/View.php');
class ControllerFilms{
    private $_FilmManager;
    private $_view;

    public function __construct($url){
        if(!isset($url) && count($url)>1){
            throw new Exception('Page introuvable');
        }else{
            $this->films();
        }
    }
    private function films(){
        require('Models/FilmManager.php');
        // probl : peut pas instancier le manager
        $this->_FilmManager = new FilmManager;
        $films = $this->_FilmManager->getFilms();
        
        $this->_view = new View('Films');
        $this->_view->generate(array('films'=>$films,'FilmManager'=>$this->_FilmManager));
    }
}