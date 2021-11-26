<?php

  $host = 'localhost';
  $user = 'root';
  $db = 'SystemeConnexion';
  $pwd = '';

  $bd=new PDO('mysql:host=localhost;dbname=dbFilm',$user,$pwd);

  $bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

?>
