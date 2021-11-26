<?php
require_once('View/View.php');
class ControllerAuth{
    private $_AuthManager;
    private $_view;

    public function __construct($url){
        if(!isset($url) && count($url)>1){
            throw new Exception('Page introuvable');
        }else{
            $this->Auth();
        }
    }
    private function Auth(){
        require('Models/AuthManager.php');

        $this->_AuthManager = new AuthManager;

        
        $this->_view = new View('Auth');
        $this->_view->generate(array());
    }
}