<?php
include('includes/connexion.inc.php');
include('includes/haut.inc.php');


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

  ?>

  <div class="container col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-4 col-xs-12">
    <form class="form-signin" method="POST" action="connexion.php" id="form">
      <div style="border: 2px solid #2C3E50; border-radius : 5px; padding-top: 2%; padding-left: 8%;padding-right: 8%;padding-bottom: 8%;">
      <h3 class="form-signin-heading" style ="margin-bottom:6%; text-align:center;">Connectez vous !</h3>
        <label for="inputEmail" class="sr-only" >Adresse mail</label>
        <input style ="margin-bottom:5%;" type="email" id="inputEmail" name="email" class="form-control" placeholder="Adresse mail" >
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input style ="margin-bottom:5%;" type="password" id="inputPassword" name="mdp" class="form-control" placeholder="Mot de passe">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Valider</button>
      <div class="row hidden" id="msgErreur">
      </div>
    </div>
    </form>
  </div> 


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
include('includes/bas.inc.php');
?>