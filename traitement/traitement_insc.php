<?php
			
	$errors = array();
	$b_err = true;

	if(isset($_POST["sign"])){
		if (!empty($_POST['nom'])) {
			$nom=htmlspecialchars(trim($_POST['nom']));
		} else {
			$b_err = false;
			$errors[] = "Entrez un nom valide";
		}

		if (!empty($_POST['prenom'])) {
			$prenom=htmlspecialchars(trim($_POST['prenom']));
		} else {
			$b_err = false;
			$errors[] = "Entrez un prenom valide";
		}

		if (!empty($_POST['tel'])) {
			$tel=htmlspecialchars(trim($_POST['tel']));
		} else {
			$b_err = false;
			$errors[] = "Entrez un tel valide";
		}

		if (!empty($_POST['email'])) {
			$email=htmlspecialchars(trim($_POST['email']));

			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$email = $email;
			}else{
				$b_err = false;
				$errors[] = "Format Email invalide";
			}
		} else {
			$b_err = false;
			$errors[] = "Entrez un email valide";
		}

		if (!empty($_POST['password'])) {
			$password=htmlspecialchars(trim($_POST['password']));
		} else {
			$b_err = false;
			$errors[] = "Entrez votre mot de passe";
		}

		if (!empty($_POST['confirme'])) {
			$confirme=htmlspecialchars(trim($_POST['confirme']));
		} else {
			$b_err = false;
			$errors[] = "Confirmez votre mot de passe";
		}

		if (isset($password, $confirme) AND ($password === $confirme)) {
			$mdp =$password;
		} else {
			$b_err = false;
			$errors[] = "Mot de passe non identique";
		}
		
	}
?>