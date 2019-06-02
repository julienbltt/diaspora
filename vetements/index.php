<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	    <link rel="stylesheet" type="text/css"; href="/espace_travail/DIASPORA/design/style.css" />
		<title>DIASPORA - Vetements</title>
	</head>
	
	<body>
		<div id="block_page">
			
			<?php include("C:/wamp/www/espace_travail/DIASPORA/template/header.php"); ?>

			<div id="categorie_vetements">
				<figure class="categorie_pull">
					<a href="pull.php">PULL<!--<img src="design/img/banniere/pull.jpg">--></a>
					<figcaption>Categorie PULL</figcaption>
				</figure>
				<figure class="categorie_tee_shirt">
					<a href="tee_shirt.php">TEE-SHIRT<!--<img src="design/img/banniere/tee_shirt.jpg">--></a>
					<figcaption>Categorie TEE-SHIRT</figcaption>
				</figure>
			</div>

			<p>Home > Vetements > </p>
			<?php include("C:/wamp/www/espace_travail/DIASPORA/template/footer.php"); ?>

		</div>
	</body>
</html>