<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="design/style.css">
		<title>DIASPORA</title>
	</head>
	
	<body>
		<div id="bloc_page">
			
			<?php include("template/header.php"); ?>

			<?php

			if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])) 
			{
				echo '<p>Voici votre email' . $_SESSION['email'] . '</p>';
			}

			?>

			<p>Home > Mon compte</p>
			<?php include("template/footer.php"); ?>

		</div>
	</body>
</html>