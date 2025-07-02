<?php
/* Smarty version 3.1.40, created on 2024-03-07 21:08:18
  from '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/_no_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_65ea2cc2538c56_26475371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae53ec1d0db5917b855093f50927627e36f4712c' => 
    array (
      0 => '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/_no_data.tpl',
      1 => 1706366205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_65ea2cc2538c56_26475371 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no data -->
<div class="text-center text-muted">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"96px",'height'=>"96px"), 0, false);
?>
    <div class="text-md">
        <span style="padding: 8px 20px; background: #ececec; border-radius: 18px; font-weight: bold;"><?php echo __("No data to show");?>
</span>
    </div>
</div>
<!-- no data --><?php }
}
