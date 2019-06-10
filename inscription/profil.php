<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=diaspora', 'root','');

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
	$requser->execute(array($getid));
	$userInfo = $requser->fetch();
}
?>
<html>
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="/espace_travail/DIASPORA/design/style.css">
		<title>DIASPORA</title>
	</head>
	
	<body>
		
		<?php include("../template/header.php"); ?>
		
		<div align="center">
			<h2>Profil</h3>
			<br /><br /><br />
			Mail = <?php echo $userInfo['email']; ?>
			<br />
<?php
if ($userInfo['id'] == $_SESSION['id']) 
{
?>
			<a href="">Editer mon profil</a>
			<a href="deconnection.php">Deconnection</a>

<?php
}
?>
		</div>
		
		<?php include("../template/footer.php"); ?>

	</body>
</html>







































