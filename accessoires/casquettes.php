<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	    <link rel="stylesheet" type="text/css" href="/espace_travail/DIASPORA/design/style.css" />
		<title>DIASPORA - CASQUETTES</title>
	</head>
	
	<body>
		<div id="block_page">
			
			<?php include("../template/header.php"); ?>

			<!--------------------- Articles -------------------------------------- -->
			<div id="articles_casquettes">
				<div class="article_casquette_img">
					<img src="../design/img/articles/[name_of_img_article]">
				</div>
				<div class="article_info">
					<p>[Nom] <br /> [Prix]</p>
					<div>
						<img src="../design/img/couleurs/[name_of_color]" alt="couleur" class="couleur">
						<img src="../design/img/couleurs/[name_of_color]" alt="couleur" class="couleur">						
						<img src="../design/img/couleurs/[name_of_color]" alt="couleur" class="couleur">
					</div>
				</div>
			</div>
			<!-- ------------------------------------------------------------------ -->
			<!-- ------------------- Articles (reverse) --------------------------- -->
			<div id="articles_casquettes_reverse">
				<div class="article_casquette_img">
					<img src="../design/img/articles/[name_of_img_article]">
				</div>
				<div class="article_info">
					<p>[Nom] <br /> [Prix]</p>
					<div class="dot_color">
						<img src="../design/img/couleurs/[name_of_color]" alt="couleur" class="couleur">
						<img src="../design/img/couleurs/[name_of_color]" alt="couleur" class="couleur">
						<img src="../design/img/couleurs/[name_of_color]" alt="couleur" class="couleur">
					</div>
				</div>
			</div>
			<!-- ------------------------------------------------------------------ -->
			
			<!-- Here increments new articles -->

			<!-- ------------------------------------------------------------------ -->
			<p>Home > Vetements > Casquettes </p>
			<?php include("../template/footer.php"); ?>

		</div>
	</body>
</html>