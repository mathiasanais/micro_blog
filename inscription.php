<?php
include('includes/connexion.inc.php');
include('includes/haut.inc.php');
$message="";
$errmessage="";
?>
<html>

<?php 


if(isset($_POST['nom'])&& !empty($_POST['nom']) && isset($_POST['prenom'])&& !empty($_POST['prenom']) &&  isset($_POST['pseudo'])&& !empty($_POST['pseudo']) && isset($_POST['email'])&&!empty($_POST['email']) && isset($_POST['mdp'])&&!empty($_POST['mdp']))
{
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$pseudo = $_POST['pseudo'];
  	$mail = $_POST['email'];
  	$mdp = $_POST['mdp'];
 	$mdp = hash('md5',$mdp);
  	

  	$nb_mail = $pdo -> prepare ("SELECT id FROM utilisateur WHERE email = ? LIMIT 1");
	$nb_mail -> bindParam ('1',$mail);
	$nb_mail -> execute();

	if ($nb_mail -> rowCount() == 0)
	{

	  	$rqt = $pdo->prepare("INSERT INTO utilisateur (nom, prenom, email, mdp, pseudo) VALUES ( :nom, :prenom, :email, :mdp, :pseudo)");
		$rqt->bindValue(':nom',$nom);
		$rqt->bindValue(':prenom',$prenom);
		$rqt->bindValue(':email',$mail);
		$rqt->bindValue(':mdp',$mdp);
		$rqt->bindValue(':pseudo',$pseudo);
		$rqt->execute();
		$message = 'Vous êtes bien inscrit sur le blog !!';
		header("Location: ./inscription.php?message=".$message); 
	}
	elseif($nb_mail->rowCount() == 1 )
	{
		
		$errmessage = 'Cet email est déjà utilisé';
		header("Location: ./inscription.php?message=".$errmessage);
	}	
}

?>

<div class="container">
	<div class="row main">
		<div class="panel-heading">
			<div class="panel-title text-center">
				<h3 class="title">N'hésitez pas vous inscrire !</h3>
				<h4 class="title" style="color:red;">
					   <?php 
					    if(!empty($_GET['errmessage']))
					    {
					      $errmessage = $_GET['errmessage']; 
					
					      echo $errmessage;
					    }
					   ?>
				</h4>
				<h4 class="title" style="color:green;">
					   <?php 
					    if(!empty($_GET['message']))
					    {
					      $message = $_GET['message']; 
					
					      echo $message;
					    }
					   ?>
				</h4>
			</div>
		</div> 
		<div class="container col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-4 col-xs-12 ">
			<form class="form-horizontal" method="post" action="inscription.php">
				<div style="border: 2px solid #2C3E50; border-radius : 5px; padding-top: 2%; padding-left: 8%;padding-right: 8%;padding-bottom: 8%;">
					<div class="form-group">
						<label for="nom" class="cols-sm-2 control-label">Nom</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="nom" id="nom"  placeholder="Votre nom"/>
							</div>
						</div>
					</div>


					<div class="form-group">
						<label for="prenom" class="cols-sm-2 control-label">Prénom</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="prenom" id="prenom"  placeholder="Votre prénom"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="pseudo" class="cols-sm-2 control-label">Pseudo</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="pseudo" id="pseudo"  placeholder="Votre pseudo"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="cols-sm-2 control-label">Email</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="email" id="email"  placeholder="Votre Email"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="mdp" class="cols-sm-2 control-label">Mot de passe</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="mdp" id="mdp"  placeholder="Mot de passe"/>
							</div>
						</div>
					</div>

					<div class="form-group ">
						<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">S'inscrire</button>
					</div>
					
				</div>
			</form>

		</div>
	</div>
</div>
</html>
<?php
include('includes/bas.inc.php');
?>