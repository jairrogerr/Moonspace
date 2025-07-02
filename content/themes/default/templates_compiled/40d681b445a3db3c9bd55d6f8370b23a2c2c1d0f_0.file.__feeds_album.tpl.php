<?php
/* Smarty version 3.1.40, created on 2024-10-24 23:23:28
  from '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/__feeds_album.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_671ad6f0adb6d8_33960531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d681b445a3db3c9bd55d6f8370b23a2c2c1d0f' => 
    array (
      0 => '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/__feeds_album.tpl',
      1 => 1706366210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671ad6f0adb6d8_33960531 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-sm-6 col-md-4 col-lg-3">
	<div class="album-card">
		<?php if ($_smarty_tpl->tpl_vars['album']->value['cover']['blur']) {?><div class="x-blured"><?php }?>
			<a class="album-cover" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['album']->value['path'];?>
/album/<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['album']->value['cover']['source'];?>
);">
			</a>
		<?php if ($_smarty_tpl->tpl_vars['album']->value['cover']['blur']) {?></div><?php }?>
		<div class="album-details">
			<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['album']->value['path'];?>
/album/<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['album']->value['title']);?>
</a>
			<div>
				<?php echo $_smarty_tpl->tpl_vars['album']->value['photos_count'];?>
 <?php echo __("photos");?>

				<div class="float-right">
					<?php if ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "me") {?>
						<i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
: <?php echo __("Only Me");?>
'></i>
					<?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "friends") {?>
						<i class="fa fa-users" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
: <?php echo __("Friends");?>
'></i>
					<?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "public") {?>
						<i class="fa fa-globe" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
: <?php echo __("Public");?>
'></i>
					<?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "custom") {?>
                    	<i class="fa fa-cog" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Custom People");?>
'></i>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
