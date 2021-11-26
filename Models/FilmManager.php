<?php
require_once("Model.php");
class FilmManager extends Model{
    public function getFilms(){
        $this->getBdd();
        return $this->getAll('Film','Film');

    }
    public function supprFilm($id){
        $this->getBdd();
        $this->delete('Film',$id);
    }

    public function voterFilm($id){
        $this->getBdd();
        $this->requete("UPDATE Film
                        SET nbVotants = nbVotants +1 
                        WHERE id =". $id.";");
    }
}