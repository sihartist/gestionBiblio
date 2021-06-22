<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=aventus;charset=utf8','root','root');

$envoyer = $bdd->prepare('INSERT INTO minichat(pseudo,message) VALUES (?,?)');

if(isset($_POST['message']))
  if(strlen($_POST['message'])>0)
    $envoyer->execute(array(htmlspecialchars($_SESSION['pseudo']),htmlspecialchars($_POST['message'])));

header('Location: ./form.php');
?>
