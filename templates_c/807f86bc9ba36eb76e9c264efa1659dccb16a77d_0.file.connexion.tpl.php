<?php
/* Smarty version 3.1.30, created on 2017-03-29 17:08:16
  from "C:\UwAmp\www\micro_blogv2\connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbcde0b8ee30_76817848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '807f86bc9ba36eb76e9c264efa1659dccb16a77d' => 
    array (
      0 => 'C:\\UwAmp\\www\\micro_blogv2\\connexion.tpl',
      1 => 1490800092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:haut.tpl' => 1,
    'file:bas.tpl' => 1,
  ),
),false)) {
function content_58dbcde0b8ee30_76817848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="container col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-4 col-xs-12">
    <form class="form-signin" method="POST" action="connexion.php" id="form">
      <div class="cadreCo">
      <h3 class="form-signin-heading" class ="textCo">Connectez vous !</h3>
        <label for="inputEmail" class="sr-only" >Adresse mail</label>
        <input type="email" id="inputEmail" name="email" class="form-control marginBottom5" placeholder="Adresse mail" >
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" id="inputPassword" name="mdp" class="form-control marginBottom5" placeholder="Mot de passe">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Valider</button>
      <div class="row hidden" id="msgErreur">
      </div>
    </div>
    </form>
  </div> 
  <?php $_smarty_tpl->_subTemplateRender("file:bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
