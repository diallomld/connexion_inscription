<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<meta charset="utf-8"/>
</head>
<body>
<h1>Bienvenue <?php if (isset($_SESSION['nom'])) {
	
				echo $_SESSION['nom'];
				}  ?>
 à la page d'accueil</h1>
</body>
</html>