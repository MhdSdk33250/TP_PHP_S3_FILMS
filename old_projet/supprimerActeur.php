<?php require_once('connexionDB.php'); 

  require_once('sessionVerif.php');

  echo "suppression de l'acteur num = ".$_GET['mod'].';';

  $sql = "DELETE FROM Acteurs
        WHERE id = ".$_GET['mod'].";";
  try{
    $statement = $bd->prepare($sql);
  }catch(PDOException $ex){
    echo $ex;
  }

        $statement->execute();
        header('location: Acteur.php');
        
?>