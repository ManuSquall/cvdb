<?php
/* Smarty version 3.1.30, created on 2020-07-01 22:41:43
  from "/opt/lampp/htdocs/projects/cvdb/src/view/demandeur/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5efcf507af0909_47244689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f09ba8f655cd8e47ceb5ce35d070910c6f07ff88' => 
    array (
      0 => '/opt/lampp/htdocs/projects/cvdb/src/view/demandeur/add.html',
      1 => 1593634966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/header.html' => 1,
    'file:src/view/footer.html' => 1,
  ),
),false)) {
function content_5efcf507af0909_47244689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/Demandeur/list" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> </a>

        <div class="page-header">


            <h2 class="pageheader-title " align="center">Ajouter un demandeur</h2>




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
                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustomUsername">Numéro</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">#</span>
                            </div>
                            <input type="text" class="form-control" value="AA-###" name="numero"
                                aria-describedby="inputGroupPrepend" readonly>
                        </div>
                    </div> -->




                    

                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="form-group">
                            <label for="input-select">Profil</label>
                            <select name="id_profil" class="form-control" id="input-select" required>
                                <option value="">-Selectionner un profil-</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeProfil']->value, 'profil');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['profil']->value) {
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getId();?>
"> <?php echo $_smarty_tpl->tpl_vars['profil']->value->getLibelle();?>

                                </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                            </select>
                        </div>

                    </div> -->



                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom" required>

                    </div>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="prenom">Prenom</label>
                        <input type="text" class="form-control" name="prenom" id="prenom" required>

                    </div>
                    <br>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="form-group">
                            <label for="input-select">Ville</label>
                            <select name="idville" class="form-control" id="input-select" required>
                                <option value="">-Selectionner une ville-</option>


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeVille']->value, 'ville');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ville']->value) {
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['ville']->value->getId();?>
"> <?php echo $_smarty_tpl->tpl_vars['ville']->value->getLibelle();?>

                                </option>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                            </select>
                        </div>

                    </div>
                    
                    <br>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="form-group">
                            <label for="input-select">Domaine</label>
                            <select name="iddomaine" class="form-control" id="input-select" required>
                                <option value="">-Selectionner un domaine-</option>


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeDomaine']->value, 'domaine');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['domaine']->value) {
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['domaine']->value->getId();?>
"> <?php echo $_smarty_tpl->tpl_vars['domaine']->value->getLibelle();?>

                                </option>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                            </select>
                        </div>

                    </div>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" name="adresse" id="adresse" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="mail">Email</label>
                        <input type="text" class="form-control" name="email" id="email" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <br>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="tel">Telephone</label>
                        <input type="text" class="form-control" name="tel" id="tel" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="datenaiss">Date de naissance</label>
                        <input type="date" class="form-control" name="datenaiss" id="datenaiss" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" name="cv" id="customFile">
                            <label class="custom-file-label" for="customFile">Ajouter un CV</label>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" name="photo" id="customFile">
                            <label class="custom-file-label" for="customFile">Ajouter une photo</label>
                        </div>
                    </div>
                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="tel">Telephone</label>
                        <input type="text" class="form-control" name="tel" id="tel" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div> -->

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
