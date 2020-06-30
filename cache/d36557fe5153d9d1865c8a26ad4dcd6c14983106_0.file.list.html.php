<?php
/* Smarty version 3.1.30, created on 2020-06-30 01:19:45
  from "/opt/lampp/htdocs/projects/cvdb/src/view/domaine/list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5efa77118e3c28_88443870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd36557fe5153d9d1865c8a26ad4dcd6c14983106' => 
    array (
      0 => '/opt/lampp/htdocs/projects/cvdb/src/view/domaine/list.html',
      1 => 1593472781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/header.html' => 1,
    'file:src/view/footer.html' => 1,
  ),
),false)) {
function content_5efa77118e3c28_88443870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- SQUALL -->

                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="page-header">


                                <h2 class="pageheader-title " align="center"><u>Liste des domaines</u></h2>




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
                            Ajouter un domaine</a>
                        <div class="card">

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th>ID</th>
                                                <th>Domaine</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listedomaine']->value, 'domaine');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['domaine']->value) {
?>
                                            <tr>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['domaine']->value->getId();?>
 </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['domaine']->value->getLibelle();?>
 </td>
                                                <td>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Domaine/edit/<?php echo $_smarty_tpl->tpl_vars['domaine']->value->getId();?>
"
                                                        class="btn btn-sm btn-warning text-white ml-2"><i
                                                        class="fa fa-edit"></i>Modifier</a>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Domaine/delete/<?php echo $_smarty_tpl->tpl_vars['domaine']->value->getId();?>
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
