<?php
	session_start();
	$user = "etudiant";
	$mdp = "azerty123";
	$connextion = False;
	
	if(isset($_POST['username'])){
		 try{
			 $pdo = new PDO("mysql:host=localhost;dbname=utilisateur",$user,$mdp);
			 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			 $req = "Select * from user";
			 $pdoreq = $pdo->query($req);
			 $pdoreq->setFetchMode(PDO::FETCH_ASSOC);
			
			foreach($pdoreq as $ligne){
				if($ligne['username'] == $_POST['username'] && $ligne['mdp'] == $_POST['mdp']){
					
					$_SESSION['id'] = $ligne['id_user'];
					$_SESSION['nom'] = $ligne['username'];
					$_SESSION['password'] = $ligne['mdp'];
					$connextion = True;
					
					header('Location:../html/presentation.php');
				}
				
			}
			if($connextion == False){
				header('Location:../html/connexion.html');
			}
				
			
		}
				
		catch(PDOException $e){
			echo "Error :".$e->getMessage();
			die();
				
		}
			
		
	}
	else{
		header('Location:../html/connexion.html');
		
	}



?>
