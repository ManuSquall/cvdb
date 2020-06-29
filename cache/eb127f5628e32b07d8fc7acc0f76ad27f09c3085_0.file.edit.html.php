<?php
/* Smarty version 3.1.30, created on 2020-06-30 00:46:48
  from "/opt/lampp/htdocs/projects/cvdb/src/view/ville/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5efa6f58dc9ff5_11764948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb127f5628e32b07d8fc7acc0f76ad27f09c3085' => 
    array (
      0 => '/opt/lampp/htdocs/projects/cvdb/src/view/ville/edit.html',
      1 => 1593470803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/header.html' => 1,
    'file:src/view/footer.html' => 1,
  ),
),false)) {
function content_5efa6f58dc9ff5_11764948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/Ville/list" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> </a>

        <div class="page-header">


            <h2 class="pageheader-title " align="center">Modifier une ville</h2>




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
            <form action="update" method="post" class="needs-validation">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <input class="form-control" readonly type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ville']->value->getId();?>
"/>
                        <label for="libelle">Libelle</label>
                        <input type="text" class="form-control" name="libelle" id="libelle" required>

                    </div>
                    

                </div>
                <br>
                <br>



                <button name="save" class="btn btn-primary" type="submit">Modifier</button>
            </form>
        </div>


    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:src/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
