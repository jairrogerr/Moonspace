<?php
/* Smarty version 3.1.40, created on 2024-02-10 13:43:22
  from '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/ajax.messaging.conversation.messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_65c77d7a58fcf5_70476663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6d73de1526b9976dad9d6587450c2b637dba3e0' => 
    array (
      0 => '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/ajax.messaging.conversation.messages.tpl',
      1 => 1706567581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.messaging.messages.tpl' => 1,
  ),
),false)) {
function content_65c77d7a58fcf5_70476663 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['conversation']->value['total_messages'] >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
	<!-- see-more -->
	<div class="alert alert-chat see-more small js_see-more" data-id=<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
  data-get="messages">
	    <span><?php echo __("Loading Older Messages");?>
</span>
	    <div class="loader loader_small x-hidden"></div>
	</div>
	<!-- see-more -->
<?php }?>

<ul>
    <?php $_smarty_tpl->_subTemplateRender('file:ajax.messaging.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('messages'=>$_smarty_tpl->tpl_vars['conversation']->value['messages']), 0, false);
?>
</ul><?php }
}
