<?php
$pdo = new PDO('mysql:host=localhost;dbname=micro_blog', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_COOKIE['CookieBlog'])&&!empty($_COOKIE['CookieBlog']))
{
	$stmt = $pdo->prepare("SELECT * FROM utilisateur  WHERE sid = ? LIMIT 1") ;
	$stmt->bindParam('1', $_COOKIE['CookieBlog']);
  	$stmt->execute();    // Exécute la déclaration. 

  	if($resultat = $stmt -> fetch())
  	{
  		$id=$resultat['id'];
  		$pseudo = $resultat['pseudo'];
  		$connect=true;
  	}
}
else
{
  $connect=false;
}
?>