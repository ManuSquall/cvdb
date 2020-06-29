<?php
/* Smarty version 3.1.30, created on 2020-06-30 00:48:01
  from "/opt/lampp/htdocs/projects/cvdb/src/view/ville/list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5efa6fa1b17462_79499585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b5504b08bfef17a9a7829061ddf099376096949' => 
    array (
      0 => '/opt/lampp/htdocs/projects/cvdb/src/view/ville/list.html',
      1 => 1593470876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/header.html' => 1,
    'file:src/view/footer.html' => 1,
  ),
),false)) {
function content_5efa6fa1b17462_79499585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- SQUALL -->

                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="page-header">


                                <h2 class="pageheader-title " align="center"><u>Liste des villes</u></h2>




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
                        <a href="add" class="btn btn-primary"><i class="fas fa-user-plus"></i>
                            Ajouter une ville</a>
                        <div class="card">

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th>ID</th>
                                                <th>Ville</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeville']->value, 'ville');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ville']->value) {
?>
                                            <tr>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['ville']->value->getId();?>
 </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['ville']->value->getLibelle();?>
 </td>
                                                <td>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Ville/edit/<?php echo $_smarty_tpl->tpl_vars['ville']->value->getId();?>
"
                                                        class="btn btn-sm btn-warning text-white ml-2"><i
                                                        class="fa fa-edit"></i>Modifier</a>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Ville/delete/<?php echo $_smarty_tpl->tpl_vars['ville']->value->getId();?>
" onclick="return confirm('Voulez-vous supprimer ?');" class="btn btn-sm btn-danger text-white ml-2"><i
                                                            class="fa fa-trash"></i>Supprimer</a>

                                                           

                                            </tr>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


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
