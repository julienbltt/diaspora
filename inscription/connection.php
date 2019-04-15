<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=diaspora', 'root','');

if(isset($_POST['formConnect']))
{
	$emailConnect = htmlspecialchars($_POST['emailConnect']);
	$passwordConnect = htmlspecialchars($_POST['passwordConnect']);
	if(!empty($emailConnect) AND !empty($passwordConnect))
	{
		if (filter_var($emailConnect, FILTER_VALIDATE_EMAIL))
		{
			$reqUser = $bdd->prepare('SELECT * FROM membres WHERE email = ?');
			$reqUser->execute(array($emailConnect));
			$userInfo = $reqUser->fetch();
			$passwordCorrect = password_verify($_POST['passwordConnect'], $userInfo['password']);
			if (!$userInfo) 
			{
				$erreur = "Mauvais identifiant ou mot de passe";
			}
			else
			{
				if ($passwordCorrect) 
				{
			        $_SESSION['id'] = $userInfo['id'];
			        $_SESSION['email'] = $userInfo['email'];
			        $erreur = "Vous êtes connecté";
			        header('Location: profil.php?id='. $_SESSION['id'] );
				}
				else
				{
					$erreur = "Mauvais identifiant ou mot de passe";
				}
			}
		}
		else
		{
			$erreur = "Mauvais identifiant ou mot de passe";
		}
	}
	else
	{
		$erreur = "Tout les champs doivent éter completer";
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

		<div align="center">
			<h2>Connection</h3>
			<br /><br /><br />
			<form method="POST" action="">
				<table>
					<tr>
						<td align="right">
							<label for="emailConnect"></label>Email :
						</td>
						<td>
							<input type="email" name="emailConnect" id="emailConnect" placeholder="exemple@mail.fr" />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="passwordConnect"></label>Mot de passe :
						</td>
						<td>
							<input type="password" name="passwordConnect" id="passwordConnect" />
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="formConnect" value="Se connecter">
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
	
	</body>
</html>

