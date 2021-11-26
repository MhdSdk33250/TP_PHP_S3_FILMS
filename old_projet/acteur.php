<!DOCTYPE html>
<?php require_once('connexionDB.php'); 

  require_once('sessionVerif.php');


?>
<html>
    <head>


        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/Style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <title>
        Page des films
        </title>
    </head>
    <body>


      <div class="container-fluid">

        <div class="row">
              <div class="col-sm-2" id="menu">
                <nav id="sidebar">
                  <div class="sidebar-header">
                    <h5 id="titreMenu">Menu</h5>
                  </div>

                  <ul id="ulid">
                    <li id="ulid" id="pageselectionnee">
                      <a href="accueil.PHP" data-toogle="collapse" aria-expanded="falsee" id="elementListe"  >Films</a>
                      
                      
                    </li>
                    <li class="active" id="pageselectionnee">
                      <a href="acteur.PHP" data-toogle="collapse" aria-expanded="falsee" id="elementListe"  >Acteurs</a>
                      
                      
                    </li>


                    <li id="ulid">
                    <a href="deconexion.PHP" data-toogle="collapse" aria-expanded="falsee" id="elementListe"  >Deconexion</a>

                    </li>
                  </ul>
                </nav>
              </div>
              <div class="col-sm-6" id="divstyle" >
              
              <?php 
                $stmt = $bd->query('SELECT * from acteurs');
              ?>        <div class="overflow">


              
                        <table width="100%" class="styled-table"  >
                      <thead>
                        <tr >
                            <th>nom</th>
                            <th>prenom</th>
                            <th></th>
                        </tr>
                      </thead>

                      <tbody >
                      <?php
                      while( $row = $stmt->fetch()){
                        ?>
                      
                      

                        <tr>
                          <td><?php echo $row-> nom_acteur ;?></td>
                          <td><?php echo $row-> prenom_acteur ;?></td>
                          <td><a href="supprimeracteur.php?mod=<?php echo $row-> id?>">supprimer </a><img height='20' width='20' src="https://icon-library.com/images/icon-delete/icon-delete-9.jpg"></td>


                        </tr>
                        
                      <?php } ?>
                      </tbody>

                    </table>
                    </div>


              </div>


              <div class="col-sm-2" id="divstyle3" ><?php echo 'Connecté sur le compte de : '. $login; ?></div>

        </div>

      </div>

      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./app.js"></script>
    </body>
</html>
