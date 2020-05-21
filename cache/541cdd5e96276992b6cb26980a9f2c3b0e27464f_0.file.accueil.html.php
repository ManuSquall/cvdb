<?php
/* Smarty version 3.1.30, created on 2020-05-21 09:39:48
  from "/opt/lampp/htdocs/projects/cvdb/src/view/accueil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec63044f38423_39671290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '541cdd5e96276992b6cb26980a9f2c3b0e27464f' => 
    array (
      0 => '/opt/lampp/htdocs/projects/cvdb/src/view/accueil.html',
      1 => 1590046785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/header.html' => 1,
    'file:src/view/footer.html' => 1,
  ),
),false)) {
function content_5ec63044f38423_39671290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- SQUALL -->

                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="page-header">


                                <h2 class="pageheader-title " align="center"><u>Liste des CV</u></h2>




                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->




                    <!-- ############################################################################################## -->


                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Achat/form_achat" class="btn btn-primary"><i class="fas fa-user-plus"></i>
                            Ajouter un Cv</a>
                        <div class="card">

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th>ID</th>
                                                <th>Nom</th>
                                                <th>Ville</th>
                                                <th>Domaine</th>
                                                <th>Détails</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeAchat']->value, 'achat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['achat']->value) {
?>
                                            <tr>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['achat']->value->getId();?>
 </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['achat']->value->getDate();?>
 </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['achat']->value->getProduit();?>
 </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['achat']->value->getQte();?>
 </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['achat']->value->getPrix();?>
 </td>

                                            </tr>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 -->

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->

                    <!-- /SQUALL -->

<?php $_smarty_tpl->_subTemplateRender("file:src/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
