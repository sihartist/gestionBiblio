<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=aventus;charset=utf8','root','root');
$req = $bdd->prepare('INSERT INTO contact_form (nom, email,sujet,message) VALUES(?,?,?,?)');
$req->execute(array($_POST['name'],$_POST['email'],$_POST['sujet'],$_POST['message']));
header('Location: ../contact.php');
 ?>
