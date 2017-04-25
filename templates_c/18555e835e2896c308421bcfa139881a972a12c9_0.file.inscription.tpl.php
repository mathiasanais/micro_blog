<?php
/* Smarty version 3.1.30, created on 2017-03-29 18:52:02
  from "C:\UwAmp\www\micro_blogv2\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbe6326c8480_86602717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18555e835e2896c308421bcfa139881a972a12c9' => 
    array (
      0 => 'C:\\UwAmp\\www\\micro_blogv2\\inscription.tpl',
      1 => 1490799909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:haut.tpl' => 1,
    'file:bas.tpl' => 1,
  ),
),false)) {
function content_58dbe6326c8480_86602717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
				<div class="cadreInscription"style="">
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

<?php $_smarty_tpl->_subTemplateRender("file:bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
