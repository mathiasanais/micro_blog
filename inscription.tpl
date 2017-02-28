{include file="haut.tpl"}

<div class="container">
	<div class="row main">
		<div class="panel-heading">
			<div class="panel-title text-center">
				<h3 class="title">N'hésitez pas vous inscrire !</h3>
				<h4 class="title" style="color:red;">
					   
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

{include file="bas.tpl"}