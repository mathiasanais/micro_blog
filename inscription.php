<?php
include('includes/connexion.inc.php');

$message="";
$errmessage="";

require("tpl/smarty.class.php");

$tpl1 = new Smarty();


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
		
		header("Location: ./connexion.php"); 

	}
	elseif($nb_mail->rowCount() == 1 )
	{
		$errmessage = 'Cet email est déjà utilisé';
		header("Location: ./inscription.php?message=".$errmessage);

	}	

}

$tpl1->assign('connect',$connect);

$tpl1->display("inscription.tpl");

?>
