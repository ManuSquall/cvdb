<?php
/* Smarty version 3.1.30, created on 2020-06-30 01:19:47
  from "/opt/lampp/htdocs/projects/cvdb/src/view/domaine/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5efa7713d49ef8_36912375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc5264d450195f6d1e0a8415d10372fc6fa4f984' => 
    array (
      0 => '/opt/lampp/htdocs/projects/cvdb/src/view/domaine/add.html',
      1 => 1593471198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/header.html' => 1,
    'file:src/view/footer.html' => 1,
  ),
),false)) {
function content_5efa7713d49ef8_36912375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/Domaine/list" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> </a>

        <div class="page-header">


            <h2 class="pageheader-title " align="center">Ajouter un domaine</h2>




        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader  -->
<!-- ============================================================== -->




<!-- ############################################################################################## -->







<div class="splash-container">
    <div class="card ">
        <div class="card-body">
            <form action="insert" method="post" class="needs-validation">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="libelle">Libelle</label>
                        <input type="text" class="form-control" name="libelle" id="libelle" required>

                    </div>
                    

                </div>
                <br>
                <br>



                <button name="save" class="btn btn-primary" type="submit">Ajouter</button>
            </form>
        </div>


    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:src/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
