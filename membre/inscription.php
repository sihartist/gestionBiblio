<?php
session_start();
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
  header('Location: ./tableaudebord.php');
  }
  else{
    header('Location: ../signup.php');

  }
?>
