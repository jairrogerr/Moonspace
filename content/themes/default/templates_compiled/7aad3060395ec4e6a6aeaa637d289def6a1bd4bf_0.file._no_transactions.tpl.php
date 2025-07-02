<?php
/* Smarty version 3.1.40, created on 2025-03-22 16:17:46
  from '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/_no_transactions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67dee2aa626e63_23522317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7aad3060395ec4e6a6aeaa637d289def6a1bd4bf' => 
    array (
      0 => '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/_no_transactions.tpl',
      1 => 1706366205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_67dee2aa626e63_23522317 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no transaction -->
<div class="text-center text-muted">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"transaction",'class'=>"mb20",'width'=>"96px",'height'=>"96px"), 0, false);
?>
    <div class="text-md">
        <span style="padding: 8px 20px; background: #ececec; border-radius: 18px; font-weight: bold;"><?php echo __("Looks like you don't have any transaction yet");?>
</span>
    </div>
</div>
<!-- no transaction --><?php }
}
