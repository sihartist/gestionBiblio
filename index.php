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

	<div class="container-fluid">


<section class="row banner py-5">
	<div class="col-lg-6 d-none d-lg-flex">
			<div class="row">
			<h1 class="offset-md-3 col-md-8 py-5" style="font-size:4.5em;color:rgb(10,0,60);"><?php echo translate('MainTitle'); ?></h1>
			<?php
      if(!isset($_SESSION['id'])){?>
      <a class="offset-md-4 col-md-4 btn btn-primary btn-lg"  href="./signup.php" role="buttons" style="height:50px">
			<?php echo translate('join');?>
    </a><?php
    }
      ?>
		</div>
	</div>
<div class="offset-lg-1 col-lg-4 offset-md-4 col-md-4  d-md-block d-none">
<img src="./assets/bg3.png" alt="" class="img-fluid"/>
</div>



</section>

<div>
  <script>
  function openwindow(src){
     window.open(src);
  }
  </script>


  <?php
  include './templates/programme.php';
   ?>

<article class="row  bg-light text-center py-5">
	<div class="offset-md-3 col-md-6">
		<div class="row">
	 <div class="col-md-12 h1" ><h1>AVENTUS</h1></div>
	 <article class="col-md-12"><p><b style="font-size:1.2em"><?php echo translate('apropos');?>
			</p>
    </article>
	</div>
	</div>
</article>
<article class="row text-center py-5 d-none d-md-flex">
	<section class="offset-1 col-md-6 ">
    <iframe width="699" height="393" src="https://www.youtube.com/embed/RMic5gyKzbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </section>
	<div class="col-md-5 py-5 ">
		<div class="row">
	 <div class="offset-md-2 col-md-8 h1 "><h1>Découvrez Notre Espace</h1></div>
	 <article class="offset-md-2 col-md-9 "><p><?php echo translate('attente-text');?>

			</p>
    </article>
	</div>
	</div>

</article>



</div>
<?php
	include './templates/footer.php';
?>
</body>
</html>
