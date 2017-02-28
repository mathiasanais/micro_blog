<?php
/* Smarty version 3.1.30, created on 2017-01-31 18:56:07
  from "C:\UwAmp\www\micro_blogv2\connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5890cfb75b20f7_12063863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '807f86bc9ba36eb76e9c264efa1659dccb16a77d' => 
    array (
      0 => 'C:\\UwAmp\\www\\micro_blogv2\\connexion.tpl',
      1 => 1485885346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:haut.tpl' => 1,
    'file:bas.tpl' => 1,
  ),
),false)) {
function content_5890cfb75b20f7_12063863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
  <?php $_smarty_tpl->_subTemplateRender("file:bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
