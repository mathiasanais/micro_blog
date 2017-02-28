<?php
include('includes/connexion.inc.php');


require("tpl/smarty.class.php");

$tpl1 = new Smarty();


if(isset($_POST['email'])&&!empty($_POST['email']) && isset($_POST['mdp'])&&!empty($_POST['mdp']))
{
  $mail = $_POST['email'];
  $mdp = $_POST['mdp'];

  $stmt = $pdo->prepare("SELECT * FROM utilisateur  WHERE email = ? LIMIT 1") ;
  $stmt->bindParam('1', $mail);
  $stmt->execute();   

  if($resultat = $stmt -> fetch())
  {
    $id = $resultat['id'];
    $pseudo= $resultat['pseudo'];
    $db_mdp = $resultat['mdp'];
    $mdp = hash('md5',$mdp); //cryptage du mot de passe en md5

    if ($db_mdp == $mdp) // verifie que le mot de passe de l'on recupère et que l'on a crypter est égale a celui de la base de données
    {
      
      $sid = md5($mail.time());
      setcookie('CookieBlog', $sid, time() + 3600); // création du cookie
      if(!empty($sid))
      {
        $stmt = $pdo->prepare("UPDATE utilisateur SET sid=:sid WHERE id = :id ");
        $stmt->bindParam(':sid',$sid);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
      } 
      header("Location: ./index.php"); 
    } 
   else 
    {
      $message ="Le mot de passe est incorrect";
      header("Location: ./connexion.php?message=".$message);

    }

  }
  else 
  {
   $message ="Vous n'êtes pas inscrit !";
   header("Location: ./connexion.php?message=".$message);
 }

}
else
{
$tpl1->assign('connect',$connect);
$tpl1->display("connexion.tpl");

?>


<script>
  $(function(){

    $('#form').submit(function(){

      var email = $("#inputEmail").val();
      var mdp = $("#inputPassword").val();

      if(email=="")
      {
          $("#msgErreur").html("Veuillez saisir un email !");
          $("#msgErreur").removeClass();
          $("#msgErreur").addClass("alert alert-danger");
          return false;
      }
      else if(mdp=="")
      {
          $("#msgErreur").html("Veuillez saisir un mot de passe !");
          $("#msgErreur").removeClass();
          $("#msgErreur").addClass("alert alert-danger");
          return false;
      }
      else
      {
        return true;
      }
        // . slideDown()
        //return true/false
    });

  });
</script>

  <?php
}
?>