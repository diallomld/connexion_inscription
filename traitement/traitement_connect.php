<?php

			
	$errors = array();
	$b_conn = true;

	if(isset($_POST["signc"])){

		if (!empty($_POST['mail'])) {
			$mail_conn=htmlspecialchars(trim($_POST['mail']));
		} else {
			$b_conn = false;
			$errors[] = "Veuillez saisir une adresse email";
		}

		if (!empty($_POST['pwd'])) {
			$pwd_conn=htmlspecialchars($_POST['pwd']);
			//$pwd_conn=sah1($password);
		}else {
			$b_conn = false;
			$errors[] = "Veuillez saisir un mdp valide";
		}
		
	}
?>