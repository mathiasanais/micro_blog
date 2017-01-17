<?php
include('includes/connexion.inc.php');

if(isset($_POST['id'])&& !empty($_POST['id']))

{
	$query = 'UPDATE messages SET contenu = :contenu, date= UNIX_TIMESTAMP() WHERE id = :id';
	$prep = $pdo->prepare($query);
	$prep ->bindValue(':id',$_POST['id']);
}

else if (isset($_POST['message']) && !empty($_POST['message']))
{
	$query = 'INSERT INTO messages (contenu,date,user_id) VALUES (:contenu , UNIX_TIMESTAMP(),:id_user)';
	$prep = $pdo->prepare($query);
	$prep->bindValue(':id_user',$id);
}

	$prep->bindValue(':contenu', $_POST['message']);
	$prep->execute();

header ('Location:index.php');
exit();

?>
