<?php
session_start();
include './templates/traduction.php';
 ?>
<!DOCTYPE html>
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
<title>Sign In</title>
</head>

<body style="background-image:url('./assets/bg1.jpg');background-size:cover;">

<?php
	include './templates/header.php';
?>

<?php
if(isset($_POST['pseudo']) && isset($_POST['pass'])){
$bdd = new PDO('mysql:host=localhost;dbname=aventus;charset=utf8','root','root');
$req = $bdd->prepare('SELECT id, password FROM membres WHERE pseudo = :pseudo');
$req->execute(array(
    'pseudo' => $_POST['pseudo']));
$resultat = $req->fetch();
$isPasswordCorrect = password_verify($_POST['pass'], $resultat['password']);

if (!$resultat)
{
  ?>
    <section class="container py-5" >
    <div class="row ">
      <div class=" offset-lg-4 col-lg-4  border bg-transparent rounded px-5 "   >
    <div class="row mb-5" >
      <div class="col-lg-12">
        <h2 class="h1-responsive font-weight-bold my-5 text-center  py-2"><?php echo translate('espace membre');?></h2>
        <form id="connexion" name="inscription-form" action="./signin.php" method="POST">

          <div class="row">
            <div class="col-lg-12">
              <div class="md-form">
                <input type="text" id="pseudo" name="pseudo" class="form-control bg-transparent"/>
                <label for="pseudo">Pseudo</label>
              </div>
          </div>
        </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="md-form">
                <input type="password" id="pass" name="pass" class="form-control bg-transparent"/>
                <label for="pass"><?php echo translate('pass');?></label>
              </div>
            </div>
          </div>
          <div class="row mt-2 mb-3">
            <div class="col-lg-12">
              <div class="md-form">
                <input type="checkbox" id="auto" >
                <label for="auto"><?php echo translate('autoco');?></label>
              </div>
            </div>
          </div>
        </form>
        <div class="row">
        <div class="col-lg-6 text-center text-md-left">
            <a class="btn btn-primary text-white" id="send" onclick="document.getElementById('connexion').submit()"><?php echo translate('signin');?></a>
            <p style="color:red"><?php echo translate('incorrectid');?></p>
        </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </section>
<?php
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $_POST['pseudo'];
        header('Location: ./membre/tableaudebord.php');
    }
    else {?>
      <section class="container py-5" >
      <div class="row ">
        <div class=" offset-lg-4 col-lg-4  border bg-transparent rounded px-5 "   >
      <div class="row mb-5" >
        <div class="col-lg-12">
          <h2 class="h1-responsive font-weight-bold my-5 text-center  py-2"><?php echo translate('espace membre');?></h2>
          <form id="connexion" name="inscription-form" action="./signin.php" method="POST">

            <div class="row">
              <div class="col-lg-12">
                <div class="md-form">
                  <input type="text" id="pseudo" name="pseudo" class="form-control bg-transparent"/>
                  <label for="pseudo">Pseudo</label>
                </div>
            </div>
          </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="md-form">
                  <input type="password" id="pass" name="pass" class="form-control bg-transparent"/>
                  <label for="pass"><?php echo translate('pass');?></label>
                </div>
              </div>
            </div>
            <div class="row mt-2 mb-3">
              <div class="col-lg-12">
                <div class="md-form">
                  <input type="checkbox" id="auto" >
                  <label for="auto"><?php echo translate('autoco');?></label>
                </div>
              </div>
            </div>
          </form>
          <div class="row">
          <div class="col-lg-6 text-center text-md-left">
              <a class="btn btn-primary text-white" id="send" onclick="document.getElementById('connexion').submit()"><?php echo translate('signin');?></a>
              <p style="color:red"><?php echo translate('incorrectid');?></p>
          </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      </section>
<?php
    }
}
}
else{
  ?>
  <section class="container py-5"  >
  <div class="row ">
    <div class=" offset-lg-4 col-lg-4  border bg-transparent rounded px-5 "   >
  <div class="row mb-5" >
    <div class="col-lg-12">
      <h2 class="h1-responsive font-weight-bold my-5 text-center  py-2"><?php echo translate('espace membre');?></h2>
      <form id="connexion" name="inscription-form" action="./signin.php" method="POST">

        <div class="row">
          <div class="col-lg-12">
            <div class="md-form">
              <input type="text" id="pseudo" name="pseudo" class="form-control bg-transparent"/>
              <label for="pseudo">Pseudo</label>
            </div>
        </div>
      </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="md-form">
              <input type="password" id="pass" name="pass" class="form-control bg-transparent"/>
              <label for="pass"><?php echo translate('pass');?></label>
            </div>
          </div>
        </div>
        <div class="row mt-2 mb-3">
          <div class="col-lg-12">
            <div class="md-form">
              <input type="checkbox" id="auto" >
              <label for="auto"><?php echo translate('autoco');?></label>
            </div>
          </div>
        </div>
      </form>
      <div class="row">
      <div class="col-lg-6 text-center text-md-left">
          <a class="btn btn-primary text-white" id="send" onclick="document.getElementById('connexion').submit()"><?php echo translate('signin');?></a>
      </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </section>

  <?php
}
?>



<?php
	include './templates/footer.php';
?>


</body>
</html>
