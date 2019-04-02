	<?php
				// on peut demmarrer la session
				session_start();
				// on inclut la page qui traite les infos de connexion
				include("traitement_connect.php");
				
				/* $b_conn nous permet de s'assurer que toutes les infos saisies par l'user respectent nos conditions*/
				if ($b_conn) {
					try {
						$bdd = new PDO('mysql:host=localhost;dbname=git;charset=utf8', "root", "");

						if (isset($mail_conn, $pwd_conn)) {
							
							$verif_conn = $bdd->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
							$verif_conn->execute(array($mail_conn, $pwd_conn));

							$user_existe = $verif_conn->rowCount();

							$inf_user = $verif_conn->fetch();
							
							if ($user_existe == 1) {
							 	// on peut utliser les informations de sessions
								$_SESSION['id'] = $inf_user['id'];
								$_SESSION['nom'] = $inf_user['nom'];
								$_SESSION['prenom']=$inf_user['prenom'];
															
								?>

								<script type="text/javascript">
									alert(" Bravo !!! vous etes maintenant connecte");
								</script>
		            			<meta http-equiv="refresh" content="0;url=index.php">
		            			<?php
								
							}else{
									?>
									<div class="group" style="background:orangered;border-radius: 10px;border:2px solid; height: 35px;color: #fff; padding-top: 5px; text-align: center; margin-top: 3px;">	
										Email et Mot de Passe ne correspondent pas	
									</div>
									<?php								
							}
								
							}
						}catch (PDOException $e) {
						die("Error ".$e->getMessage());
					}
				}
				
			?>
	