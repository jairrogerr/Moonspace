<?php
/* Smarty version 3.1.40, created on 2024-02-10 13:42:54
  from '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/__feeds_post.text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_65c77d5e5ca1b5_84757918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a7949fe2608a63a562c8462d32337efee563d6' => 
    array (
      0 => '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/__feeds_post.text.tpl',
      1 => 1706366217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c77d5e5ca1b5_84757918 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="post-replace">
	<?php if ($_smarty_tpl->tpl_vars['post']->value['colored_pattern']) {?>
		<div class="post-colored" <?php if ($_smarty_tpl->tpl_vars['post']->value['colored_pattern']['type'] == "color") {?> style="background-image: linear-gradient(45deg, <?php echo $_smarty_tpl->tpl_vars['post']->value['colored_pattern']['background_color_1'];?>
, <?php echo $_smarty_tpl->tpl_vars['post']->value['colored_pattern']['background_color_2'];?>
);" <?php } else { ?> style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['colored_pattern']['background_image'];?>
)" <?php }?>>
			<div class="post-colored-text-wrapper js_scroller" data-slimScroll-height="240">
				<div class="post-text" dir="auto" style="color: <?php echo $_smarty_tpl->tpl_vars['post']->value['colored_pattern']['text_color'];?>
;">
					<?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>

				</div>
			</div>
		</div>
	<?php } else { ?>
		<div class="post-text js_readmore" dir="auto"><?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
</div>
	<?php }?>
    <div class="post-text-translation x-hidden" dir="auto"></div>
    <div class="post-text-plain x-hidden"><?php echo $_smarty_tpl->tpl_vars['post']->value['text_plain'];?>
</div>
</div><?php }
}
