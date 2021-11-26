<?php

abstract class Model{
    private static $_bdd;
    // instancie la connexion
    private static function setBdd(){
        self::$_bdd = new PDO('mysql:host=localhost;dbname=dbFilm','root','');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }
    // recupere la connexion a la BDD
    protected function getBdd(){
        if(self::$_bdd == null){
            self::setBdd();
            return self::$_bdd;
        }
    }
    protected function getAll($table,$obj){
        $var = [];
        $req = self::$_bdd->prepare('SELECT * FROM '.$table.' ;');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data); 
        }
        return $var;
        req->closeCursor();

    }

    protected function delete($table,$id){
        $bool = 0;
        $req = self::$_bdd->prepare('DELETE FROM '.$table.' WHERE id = '.$id);

        if($req->execute()){
            $req->execute();
            $bool = 1;

        }
        else{
            $bool = 0;
        }
        return $bool;
        $req->closeCursor();
    }
    protected function requete($req){
        $req = self::$_bdd->prepare($req);
        if($req->execute()){

            $bool = 1;

        }
        else{
            $bool = 0;
        }
        return $bool;
        $req->closeCursor();

    }

}
