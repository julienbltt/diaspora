<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>

	<body>

<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}

		$req = $bdd->prepare('SELECT email FROM jeux_video');
		$donnees = $reponse->fetch();

	if (!isset($_POST['email']) OR !isset($_POST['password'])) 
	{
?>
		<form action="index.php" method="post">
			<div>
				<label for="email">Email</label> : 
				<input type="email" name="email" id="email" placeholder="exemple@email.fr"/>
			</div>
			<div>
				<label for="password">Mot de passe</label> : 
				<input type="password" name="password" id="password"/>
			</div>
			<div>
				<label for="confirm_password">Confirmez votre mot de passe</label> : 
				<input type="password" name="confirm_password" id="confirm_password"/>
			</div>
			 <input type="submit" value="Valider"/>
		</form>
		<p><a href="/espace_travail/DIASPORA/inscription/connection.php">Cliquez ici si vous avez déjà un compte.</a></p>
<?php
	}
	elseif (isset($_POST['email']) AND isset($_POST['password']) AND $_POST['password']) != $_POST['confirm_password'])) 
	{
		echo 'Confimation du mots de passe incorrect';	
	}
	elseif (isset($_POST['email']) AND isset($_POST['password']) AND $_POST['email'] = $donnees['email'])
	{
		echo 'Cette email existe déja. <a href="/espace_travail/DIASPORA/inscription/connection.php">Connectez-vous.</a>'
	}
	else 
	{
		$password_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

		$req = $bdd->prepare('INSERT INTO membres(email, password, date_inscription) VALUES(:email, :password,  CURDATE())');
		$req->execute(array('email' => $_POST['email'], 'password' => $password_hache));
	}
?>
	</body>

</html>