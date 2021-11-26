<?php
class FilmManager extends Model{
    public function getFilms(){
        $this->getBdd();
        return $this->getAll('Film','Film');

    }
}