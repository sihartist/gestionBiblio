<?php session_start();
include './templates/traduction.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<link href="./css/index.css" rel="stylesheet"/>
<link href="./css/footer.css" rel="stylesheet"/>
<link href="./css/header.css" rel="stylesheet"/>
<link href="./bootstrap/bootstrap.css" rel="stylesheet"/>
<title>Accueil</title>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
  <?php
    include './templates/header.php';
  ?>

<div class="my-3  row">
  <div class="offset-md-1 col-md-10">
    <h4 class="my-4">Catégorie Choisie</h4>
    <!--Selection affichage-->
    <div class="container">
      <div class="row">
         <div class="col-lg-12">
           <div class="button-group">
            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Affichage<span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><button type="button" class="btn btn-sm" onclick="">Liste</button></li>
              <li><button type="button" class="btn btn-sm" onclick="">Grille</button></li>
            </ul>
          </div>
        </div>
      </div>

      <!--garder un seul include selon le mode d'affichage selectionné-->
    <?php
      include './templates/livres_miniatures.php';
      include './templates/livres_liste.php';
    ?>
  </div>
  </div>
</div>
<div class="container-fluid">
</div>
  <?php
  	include './templates/footer.php';
  ?>
</body>
</html>
