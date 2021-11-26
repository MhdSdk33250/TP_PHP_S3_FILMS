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
                    <li class="active" id="pageselectionnee">
                      <a href="accueil.PHP" data-toogle="collapse" aria-expanded="falsee" id="elementListe"  >Films</a>
                      
                      
                    </li>


                    <li id="ulid">
                    <a href="deconexion.PHP" data-toogle="collapse" aria-expanded="falsee" id="elementListe"  >Deconexion</a>

                    </li>
                  </ul>
                </nav>
              </div>
              <div class="col-sm-6" id="divstyle" ></div>
              
              
        </div>

      </div>

      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./app.js"></script>
    </body>
</html>
