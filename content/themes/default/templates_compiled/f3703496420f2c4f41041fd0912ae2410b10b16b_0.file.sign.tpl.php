<?php
/* Smarty version 3.1.40, created on 2024-02-12 18:59:11
  from '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/sign.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_65ca6a7f4c6b47_27544219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3703496420f2c4f41041fd0912ae2410b10b16b' => 
    array (
      0 => '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/sign.tpl',
      1 => 1706366190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sign_form.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_65ca6a7f4c6b47_27544219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container mt30">
	<div class="row">
        <div class="col-md-6 col-lg-5 mx-md-auto">
        	<!-- sign in/up form -->
            <?php $_smarty_tpl->_subTemplateRender('file:_sign_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!-- sign in/up form -->
        </div>
    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
