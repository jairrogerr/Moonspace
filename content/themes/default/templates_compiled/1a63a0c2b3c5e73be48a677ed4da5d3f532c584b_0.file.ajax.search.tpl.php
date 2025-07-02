<?php
/* Smarty version 3.1.40, created on 2024-02-10 13:42:54
  from '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/ajax.search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_65c77d5e0008c4_35769617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a63a0c2b3c5e73be48a677ed4da5d3f532c584b' => 
    array (
      0 => '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/ajax.search.tpl',
      1 => 1706366170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
  ),
),false)) {
function content_65c77d5e0008c4_35769617 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="js_scroller">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['result']->value['type'] == "user") {?>
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_user'=>$_smarty_tpl->tpl_vars['result']->value,'_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['result']->value['connection'],'_search'=>true), 0, true);
?>
            
            <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type'] == "page") {?>
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_page'=>$_smarty_tpl->tpl_vars['result']->value,'_tpl'=>"list",'_search'=>true), 0, true);
?>
            
            <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type'] == "group") {?>
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_group'=>$_smarty_tpl->tpl_vars['result']->value,'_tpl'=>"list",'_search'=>true), 0, true);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type'] == "event") {?>
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_event'=>$_smarty_tpl->tpl_vars['result']->value,'_tpl'=>"list",'_search'=>true), 0, true);
?>

            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div><?php }
}
