<?php
include('includes/connexion.inc.php');
if( isset($_GET['action']) &&  $_GET['action']== 'update')
{
	if ((isset($_GET['id_msg']) &&  !empty($_GET['id_msg']) && (isset($_GET['nbVote']) &&  !empty($_GET['nbVote']))))
	{

		$query = 'UPDATE messages SET votes = :votes WHERE id = :id';
		$prep = $pdo->prepare($query);
		$prep ->bindValue(':votes',$_GET['nbVote']+1);
		$prep ->bindValue(':id',$_GET['id_msg']);
		$prep -> execute();
		echo json_encode('Update!');
	}
	else
	{
		$query = 'SELECT * FROM messages';
		$stmt = $pdo->query($query);

		$data = $stmt -> fetchAll() ;

		header('Content-type : application/json');
		echo json_encode($data);
	}
}
?>