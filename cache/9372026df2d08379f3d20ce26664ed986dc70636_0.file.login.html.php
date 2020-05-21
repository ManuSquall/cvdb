<?php
/* Smarty version 3.1.30, created on 2020-05-21 08:45:18
  from "/opt/lampp/htdocs/projects/cvdb/src/view/login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec6237e7db505_82834468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9372026df2d08379f3d20ce26664ed986dc70636' => 
    array (
      0 => '/opt/lampp/htdocs/projects/cvdb/src/view/login.html',
      1 => 1590042610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec6237e7db505_82834468 (Smarty_Internal_Template $_smarty_tpl) {
?>



<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Banque du peuple</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a class="navbar-brand" href="">GEST CV</a><span class="splash-description">Entrez votre login et mot de passe.</span></div>
            <div class="card-body">
                <!-- <form action="boot.php" method="post" > -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Login/logon" method="post" >
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="login" name="login" type="text" placeholder="Login" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="mdp" name="mdp" type="password" placeholder="Mot de passe" required>
                    </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['login_error']->value)) {?>
                        <div style="color: #ac2925"><?php echo $_smarty_tpl->tpl_vars['login_error']->value;?>
</div>
                    <?php }?>
                    <!-- <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Se souvenir de moi</span>
                        </label>
                    </div> -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Se connecter</button>
                </form>
            </div>
            
            <!-- <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div> -->
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/vendor/jquery/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/vendor/bootstrap/js/bootstrap.bundle.js"><?php echo '</script'; ?>
>
</body>
 
</html><?php }
}
