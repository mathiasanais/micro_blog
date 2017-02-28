{include file="haut.tpl"}
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
  {include file="bas.tpl"}