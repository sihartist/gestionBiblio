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
<script type="text/javascript" src="./js/signup.js"></script>
</head>
<meta charset="UTF-8" />
<title>Sign Up</title>
</head>

<body style="background-image:url('./assets/bg1.jpg');background-size:cover;">



<?php
	include './templates/header.php';
?>

<?php
if(isset($_POST['pseudo'])){

  $bdd = new PDO('mysql:host=localhost;dbname=aventus;charset=utf8','root','root');

  $req = $bdd->prepare('SELECT id, password FROM membres WHERE pseudo = :pseudo');
  $req->execute(array(
      'pseudo' => $_POST['pseudo']));
  $resultat = $req->fetch();

  if(!$resultat){
  $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
  $req = $bdd->prepare('INSERT INTO membres (pseudo, password, email) VALUES(?,?,?)');
  $req->execute(array($_POST['pseudo'],$pass_hache,$_POST['email']));
  session_start();
  $_SESSION['id'] = $resultat['id'];
  $_SESSION['pseudo'] = $_POST['pseudo'];
  header('Location: ./membre/tableaudebord.php');
  }
  else{
    ?>
    <section class="container" >
    <div class="row ">
      <div class=" offset-lg-3 col-lg-6 bg-transparent border rounded px-5 my-5">
    <div class="row mb-5">
      <div class="offset-lg-2 col-lg-10">
        <h2 class="h1-responsive font-weight-bold my-5   py-2"><?php echo translate('signinup');?></h2>
        <form id="inscription" name="inscription-form" action="./signup.php" method="POST">
          <div class="row">
            <div class="col-lg-9">
              <div class="md-form">
                <input type="text" id="pseudo" name="pseudo" class="form-control bg-transparent"/>
                <label for="name">Pseudo</label>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-lg-9">
              <div class="md-form">
                <input type="email"  id="email" name="email" class="form-control bg-transparent"/>
                <label for="email">Email</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-9">
              <div class="md-form">
                <input type="password" id="pass1" name="pass" class="form-control bg-transparent"/>
                <label for="pass" ><?php echo translate('pass');?></label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-9">
              <div class="md-form">
                <input type="password" id="pass2" class="form-control bg-transparent"/>
                <label for="pass2" ><?php echo translate('ressaisir');?></label>
              </div>
            </div>
          </div>
        </form>
        <div class="row">
        <div class="col-lg-4 text-center text-md-left">
            <button class="btn btn-primary" id="send" onclick="verifsignup();"><?php echo translate('signup');?></button>
        </div>
        <div class="col-lg-6 text-center text-md-left">
            <p id="for-pass" style="color:red"><?php echo translate('used');?></p>
        </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </section>
    <?php }
  }

else{
?>
<section class="container" >
<div class="row ">
  <div class=" offset-lg-3 col-lg-6 bg-transparent border rounded px-5 my-5">
<div class="row mb-5">
  <div class="offset-lg-2 col-lg-10">
    <h2 class="h1-responsive font-weight-bold my-5   py-2"><?php echo translate('signinup');?></h2>
    <form id="inscription" name="inscription-form" action="./signup.php" method="POST">
      <div class="row">
        <div class="col-lg-9">
          <div class="md-form">
            <input type="text" id="pseudo" name="pseudo" class="form-control bg-transparent"/>
            <label for="name">Pseudo</label>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-lg-9">
          <div class="md-form">
            <input type="email"  id="email" name="email" class="form-control bg-transparent"/>
            <label for="email">Email</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <div class="md-form">
            <input type="password" id="pass1" name="pass" class="form-control bg-transparent"/>
            <label for="pass" ><?php echo translate('pass');?></label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <div class="md-form">
            <input type="password" id="pass2" class="form-control bg-transparent"/>
            <label for="pass2" ><?php echo translate('ressaisir');?></label>
          </div>
        </div>
      </div>
    </form>
    <div class="row">
    <div class="col-lg-4 text-center text-md-left">
        <button class="btn btn-primary" id="send" onclick="verifsignup();"><?php echo translate('signup');?></button>
    </div>
    <div class="col-lg-6 text-center text-md-left">
        <p id="for-pass"></p>
    </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
<?php }
 ?>

<?php
	include './templates/footer.php';
?>

</body>
</html>
