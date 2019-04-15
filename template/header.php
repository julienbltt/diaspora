<?php
	if (isset($_SESSION['id']) AND isset($_SESSION['email'])) 
		{
?>
			<header>
				<div id="titre"> 
					<img src="http://localhost/espace_travail/DIASPORA/design/img/BRAND/logo_titre.png" alt="Logo de la marque DIASPORA" />	
				</div>
				
				<div id="logo"> 
					<img src="http://localhost/espace_travail/DIASPORA/design/img/BRAND/logo.png" alt="Logo " /> 
				</div> 

				<nav>
					<ul>
						<li><a href="/espace_travail/DIASPORA/vetements">VETEMENTS</a></li>
						<li><a href="/espace_travail/DIASPORA/accessoires">ACCESSOIRES</a></li>
						<li><a href="/espace_travail/DIASPORA/mon_compte">Mon Compte</a></li>
					</ul>
				</nav>
			</header>
<?php
		}
		else
		{
?>
			<header>
				<div id="titre"> 
					<img src="http://localhost/espace_travail/DIASPORA/design/img/BRAND/logo_titre.png" alt="Logo de la marque DIASPORA" />	
				</div>
				
				<div id="logo"> 
					<img src="http://localhost/espace_travail/DIASPORA/design/img/BRAND/logo.png" alt="Logo " /> 
				</div> 

				<nav>
					<ul>
						<li><a href="/espace_travail/DIASPORA/vetements">VETEMENTS</a></li>
						<li><a href="/espace_travail/DIASPORA/accessoires">ACCESSOIRES</a></li>
						<li><a href="/espace_travail/DIASPORA/inscription">Inscription</a></li>
					</ul>
				</nav>
			</header>
<?php
		}
?>
