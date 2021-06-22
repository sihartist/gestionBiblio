<?php
session_start();
include './templates/traduction.php';
 ?>
<html>
<head>
<link href="./css/footer.css" rel="stylesheet"/>
<link href="./css/header.css" rel="stylesheet"/>
<link href="./bootstrap/bootstrap.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<meta charset="UTF-8" />
<title>Forum</title>
</head>

<body style="background-image:url('./assets/bg1.jpg');background-size:cover;">
  <?php
    include './templates/header.php';
  ?>

<div class="container">
<h1 class="h1-responsive pt-5" style="font-family:futura">Forums</h1>
<h3 class="h1-responsive"><?php echo translate('maintenance');?></h3>
<div class="row py-5" style="height:450px">
  <div class="col-md-4">
    <div class="card mb-4 shadow-sm" style="height:200px">
        <div class="card-body">
        <h3 class="card-text">Questions</h3></br>
        <p>Des questions sur le fonctionnement de la Bibliothèque ?</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a type="button" class="btn btn-sm btn-outline-secondary" href=''>Vers le forum</a>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card mb-4 shadow-sm">

      <div class="card-body">
        <h3 class="card-text"><?php echo translate('partage');?></h3></br>
        <p><?php echo translate('espace');?></p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a type="button" class="btn btn-sm btn-outline-secondary" href=''><?php echo translate('toforum');?></a>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card mb-4 shadow-sm">

      <div class="card-body">
        <h3 class="card-text"><?php echo translate('issues');?></h3></br>
        <p><?php echo translate('issuestext');?></p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a type="button" class="btn btn-sm btn-outline-secondary" href=''>Vers le forum</a>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>
</div>

<?php
	include './templates/footer.php';
?>

</body>
</html>
