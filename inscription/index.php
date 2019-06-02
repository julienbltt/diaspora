<?php

$bdd = new PDO('mysql:host=localhost;dbname=diaspora', 'root','');

if (isset($_POST['forminscription'])) 
{
	if (!empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['password_confirm'])) 
	{
		$email = htmlspecialchars($_POST['email']);
		$password = $_POST['password'];
		$password_confirm = $_POST['password_confirm'];

		$emaillength = strlen($email);
		if ($emaillength <= 255) 
		{
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				$reqemail = $bdd->prepare('SELECT * FROM membres WHERE email = ?');
				$reqemail->execute(array($email));
				$emailexist = $reqemail->rowCount();
				if($emailexist ==0)
				{
					if ($password == $password_confirm) 
					{
						$password = password_hash($_POST['password'] , PASSWORD_DEFAULT);
						$insertmbr = $bdd->prepare('INSERT INTO membres(email, password, date_inscription) VALUES (?, ?, CURDATE())');
						$insertmbr->execute(array($email, $password));
						$erreur = "Votres compte a bien été créer <a href=\"connection.php\">Me connecter</a>";
					}
					else
					{
						$erreur = "Vos mods de passe ne corresponde pas";
					}
				}
				else
				{
					$erreur = "Adresse email déjà utiliser";
				}
			}
			else
			{
				$erreur = "Votre adresse email n'est pas valide";
			}
		}
		else
		{
			$erreur = "Votre email ne doit pas depasser 255 caractères";
		}
	}
	else
	{
		$erreur= "Tout les champs doivent étre completer";
	}
}

?>
<html>
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="design/style.css">
		<title>DIASPORA</title>
	</head>
	
	<body>

		<?php include("../template/header.php"); ?>

		<div align="center">

			<h2>Inscription</h3>
			<br /><br /><br />
			<form method="POST" action="">
				<table>
					<tr>
						<td align="right">
							<label for="email"></label>Email :
						</td>
						<td>
							<input type="email" name="email" id="email" placeholder="exemple@mail.fr" value="<?php if(isset($email)) { echo $email; } ?>" />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="password"></label>Mot de passe :
						</td>
						<td>
							<input type="password" name="password" id="password" />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="password_confirm"></label>Confirmez votre mot de passe :
						</td>
						<td>
							<input type="password" name="password_confirm" id="password_confirm">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="forminscription" value="Validez">
						</td>
					</tr>
				</table>
			</form>
<?php

if (isset($erreur)) 
{
	echo $erreur;
}

?>
		</div>
		
		<?php include("../template/footer.php"); ?>

	</body>
</html>