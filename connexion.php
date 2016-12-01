<?php
include('includes/connexion.inc.php');
include('includes/haut.inc.php');

if(isset($_POST['email'])&&!empty($_POST['email']) && isset($_POST['mdp'])&&!empty($_POST['mdp']))
{
	
}
else
{
	
?>
<form method="POST">
  <div class="form-group col-md-7">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
  </div>
  <div class="form-group col-md-7">
    <label for="mdp">Password</label>
    <input type="password" class="form-control" name ="mdp" id="mdp" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default col-md-2">Submit</button>
</form>
<?php
}


?>