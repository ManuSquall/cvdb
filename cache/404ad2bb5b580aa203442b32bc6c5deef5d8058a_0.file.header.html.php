<?php
/* Smarty version 3.1.30, created on 2020-06-29 13:05:27
  from "/opt/lampp/htdocs/projects/cvdb/src/view/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef9caf70e66d7_44632617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '404ad2bb5b580aa203442b32bc6c5deef5d8058a' => 
    array (
      0 => '/opt/lampp/htdocs/projects/cvdb/src/view/header.html',
      1 => 1590144615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef9caf70e66d7_44632617 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet"
        href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/template/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <!-- squall -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/css/squall.css">
    <title>GEST CV</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">

        <!-- ============================================================== -->
        <!-- header -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">GEST CV</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                </button>

            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Menu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            


                            <!-- ############################################## -->

                            <!-- ############################################## -->


                            <li class="nav-divider">
                                Services
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-1" aria-controls="submenu-1"><i
                                        class="fa fa-fw fa-user-circle"></i>Demandeurs : <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Demandeur/add">Ajouter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Demandeur/list">Gestion</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- ################# -->
                            <li class="nav-divider">
                            </li>
                            <!-- ################# -->
                            
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-2" aria-controls="submenu-2"><i
                                        class="fab fa-fw fa-wpforms"></i>Domaines : <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-2" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Domaine/add">Ajouter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Domaine/list">Gestion</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <!-- ################# -->
                            <li class="nav-divider">
                            </li>
                            <!-- ################# -->

                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-3" aria-controls="submenu-3"><i
                                        class="fab fa-fw fa-wpforms"></i>Villes : <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-3" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Ville/add">Ajouter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Ville/list">Gestion</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <!-- ############################################## -->


                            <li class="nav-divider">
                                <a href="#"> Info</a>

                            </li>
                            <li class="nav-divider">
                                <a href="Login/logout"> Déconnecter</a>

                            </li>





                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->

<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">


<div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">



        <!-- ########################################################################### -->

       



        <?php }
}
