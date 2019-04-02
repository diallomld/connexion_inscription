<?php 
	
	 require "traitement_insc.php";
	 
				// si y a pas d'erreur
				if ($b_err) {

					// Insertion dans la BD de l'utilisateur
					try {

						$bdd = new PDO("mysql:host=localhost;dbname=git;charset=utf8","root","");
						if (isset($nom, $prenom,$tel, $email, $mdp)) {
							# code...
						$insertUser = $bdd->prepare("INSERT INTO user(nom, prenom, tel, email, password, date_inscription) VALUES (?, ?, ?, ? ,?,?)");
						$insertUser->execute(array($nom, $prenom,$tel, $email, $mdp, date("d/m/Y H:i:s")));
            			?>
            			<script type="text/javascript">alert("Bravo !!! veuillez entrer vos identifiants");</script>

            			<meta http-equiv="refresh" content="0;url=connexion.php">
						<?php
						}
					} catch (PDOException $e) {
						die("Error ".$e->getMessage());
					}
				}
			?>

