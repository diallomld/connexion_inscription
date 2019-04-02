<?php include("traitement/traitement_insc.php"); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Day 001 Login Form</title>
  
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="login-wrap">
  	<!-- on inclut le traitement -->
	<div class="login-html">

		<input id="tab-1" type="radio" name="tab" class="sign-in" ><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">


			<div class="sign-in-htm">

			<form method="POST" action="connexion.php">
				
				<div class="group">
					<label for="user" class="label">E-mail *</label>
					<input id="user" name="mail" type="text" placeholder="Enter Email" class="input">
					
				<span>remplissez</span>
				</div>
				<div class="group">
					<label for="pass" class="label">Password *</label>
					<input id="pass" type="password" placeholder="Enter password" name="pwd" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" name="signc" value="Sign In">
				</div>
				<div class="hr"></div>
			</form>
				
			</div>
			<div class="sign-up-htm">

			<form method="POST">
					<?php if (isset($errors) and !empty($errors) ) {
						?>
						<div class="group" style="background:orangered;border-radius: 10px;border:2px solid; height: 35px;color: #fff;padding-top: 5px; text-align: center; margin-top: 3px;">		
	  					<?php 
	  					// ici on affiche les erreurs une à une s'il yen a
				
						for ($i=0; $i <count($errors); $i++) { 
							echo $errors[$i]."<br>";
							break;
						}
	  					 ?>	
					</div>
						<?php
						} 
						include("traitement/include.php");
						?>	
				
				<div class="group">
					<label for="user" class="label">Nom *</label>
					<input id="user" type="text" name="nom" placeholder="Enter Nom" class="input" value="<?php if(isset($_POST['nom'])) echo $_POST['nom']; ?>">
				</div>
				<div class="group">
					<label for="user" class="label">Prenom *</label>
					<input id="user" type="text" name="prenom" placeholder="Enter Prenom" class="input" value="<?php if(isset($_POST['prenom'])) echo $_POST['prenom']; ?>">
				</div>
				<div class="group">
					<label for="user" class="label">Number Phone *</label>
					<input id="user" type="text" name="tel" class="input" placeholder="Enter Tel" value="<?php if(isset($_POST['tel'])) echo $_POST['tel']; ?>">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address *</label>
					<input id="pass" type="text" class="input" placeholder="Enter Email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
				</div>
				<div class="group">
					<label for="pass" class="label">Password *</label>
					<input id="pass" type="password" placeholder="Enter Password" name="password" class="input" data-type="password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>">
				</div>
				<div class="group">
					<label for="pass" class="label">Password Confirm *</label>
					<input id="pass" type="password" placeholder="Enter Confirm" name="confirme" class="input" data-type="password" value="<?php if(isset($_POST['confirme'])) echo $_POST['confirme']; ?>">
				</div>
				<div class="group">
					<input type="submit" class="button" name="sign" value="Sign Up">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
  
  

</body>

</html>
