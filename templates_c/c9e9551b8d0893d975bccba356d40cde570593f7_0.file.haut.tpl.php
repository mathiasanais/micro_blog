<?php
/* Smarty version 3.1.30, created on 2017-03-29 18:58:41
  from "C:\UwAmp\www\micro_blogv2\haut.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbe7c17681e7_20955020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9e9551b8d0893d975bccba356d40cde570593f7' => 
    array (
      0 => 'C:\\UwAmp\\www\\micro_blogv2\\haut.tpl',
      1 => 1490806713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dbe7c17681e7_20955020 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Micro blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!---Marche pas-->
    <link href="lib/min/?f=micro_blogv2/css/style.css">
    <!---->

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
      
    </head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">Micro blog</a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                          <?php if ($_smarty_tpl->tpl_vars['connect']->value == true) {?>
                          <form class="navbar-form navbar-left" action="index.php" method="GET">
                            <div class="form-group">
                              <input type="text" class="form-control" name="search" placeholder="Rechercher">
                          </div>
                           <button type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span> 
                            </button>
                      </form>
                      <?php }?>
                  </li>
                  <li class="page-scroll">
                    <?php if ($_smarty_tpl->tpl_vars['connect']->value == false) {?><a href="inscription.php">Inscription</a>
                    <?php }?>
                </li>
                <li class="page-scroll">
                    <?php if ($_smarty_tpl->tpl_vars['connect']->value == false) {?><a href="connexion.php">Connexion</a>
                    <?php } else { ?>
                    <a href="deconnexion.php">Déconnexion </a>
                    
                </li><?php }?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">Le fil</span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section>
    <div class="container"><?php }
}
