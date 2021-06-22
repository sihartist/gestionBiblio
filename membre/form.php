<?php
session_start();
include '../templates/traduction.php';
	if(isset($_POST['pseudo']))
 		setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);

?>
<!DOCTYPE html>
<html>
<head>
<link href="../bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="../css/footer.css" rel="stylesheet"/>
<link href="../css/header.css" rel="stylesheet"/>
<meta charset="UTF-8" />
<title>Discussion</title>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
<?php
	include '../templates/header.php';
?>

<div class="row py-5 ">
	<div class="offset-md-2 col-md-8">
		<h5 class="mb-4">Chat</h5>
		<form id="chatform" name="chatform" method="POST" action="./traitement-chat.php">
			<div class="row">

				<div class="col-md-10">
					<div class="md-form">
						<textarea type="text" name="message" id="message" placeholder="<?php echo translate('msg');?>" class="form-control"></textarea>
					</div>
				</div>
				<div class="col-md-2">
					<button class="btn btn-primary" onclick="document.getElementById('chatform').submit();"><?php echo translate('envoyer');?></button>
				</div>
			</div>
		</form>
	</div>

</div>

<div class="row  py-5" style="height:400px;">
	<div class="offset-md-2 col-md-8 ">
	<?php
		$bdd = new PDO('mysql:host=localhost;dbname=aventus;charset=utf8','root','root');
					$messages = $bdd->query('SELECT pseudo,message FROM minichat ORDER BY ID DESC');
					$i=0;
					while(($msg = $messages->fetch()) && $i <= 10){
						echo '<p>' . '<strong>' . $msg['pseudo'] . '</strong> : ' . $msg['message'] . '</p>';
						$i++;
					}
 					?>
 </div>
</div>




<?php
	include '../templates/footer.php';
?>
<script src="../js/contact.js"></script>
</body>
</html>
