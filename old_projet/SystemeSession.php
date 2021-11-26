<?php
require_once('connexionDB.php');
error_reporting(E_ALL ^ E_WARNING);

 
if(isset($_POST['submit'])){
    $identifiant=$_POST['identifiant'];
    $mdp=$_POST['mdp'];
    
    $req1 = "SELECT * from utilisateurs where login = '$identifiant' ";
    $result = $bd->prepare($req1);
    $result->execute();

    if($identifiant == "" or $result->rowCount() == 0){
        header('location: ConnexionPage.php?error=1');
    }





    else{
        echo "bienvenu";
        $reqMdp = "SELECT mdp from utilisateurs where identifiant = '$identifiant' ";
        $resultatMdp = $bd->prepare($req1);
        $resultatMdp->execute();
        $mdpVerification = $resultatMdp->fetch();

        if($mdp == $mdpVerification-> pwd){
            session_start();
            $_SESSION['login'] = $identifiant;
            $_SESSION['password'] = $password;
            $_SESSION['logged'] = true;
            $_SESSION['admin'] = false;
            header('location: Accueil.php');

        }
        else{
            header('location: ConnexionPage.php?error=1');
        }
    }

}

?>