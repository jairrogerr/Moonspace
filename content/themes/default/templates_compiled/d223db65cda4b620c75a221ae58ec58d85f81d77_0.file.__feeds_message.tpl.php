<?php
/* Smarty version 3.1.40, created on 2024-02-10 13:43:22
  from '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/__feeds_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_65c77d7a5c25e2_72122560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd223db65cda4b620c75a221ae58ec58d85f81d77' => 
    array (
      0 => '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/__feeds_message.tpl',
      1 => 1706366214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c77d7a5c25e2_72122560 (Smarty_Internal_Template $_smarty_tpl) {
?><li>
    <div class="conversation clearfix <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>right<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['message']->value['message_id'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] != $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
            <div class="conversation-user">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['user_name'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['user_picture'];?>
" alt="">
                </a>
            </div>
        <?php }?>
        <div class="conversation-body">
            <!-- message text -->
            <div class="text <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>js_chat-color-me<?php }?>">
                <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

                <?php if ($_smarty_tpl->tpl_vars['message']->value['image']) {?>
                    <span class="text-link js_lightbox-nodata <?php if ($_smarty_tpl->tpl_vars['message']->value['message'] != '') {?>mt5<?php }?>" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['image'];?>
">
                        <img alt="" class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['image'];?>
">
                    </span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['message']->value['voice_note']) {?>
                    <audio class="js_audio" id="audio-<?php echo $_smarty_tpl->tpl_vars['message']->value['message_id'];?>
" controls preload="auto" style="width: 100%; min-width: 120px;">
                        <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['voice_note'];?>
" type="audio/mpeg">
                        <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['voice_note'];?>
" type="audio/mp3">
                        <?php echo __("Your browser does not support HTML5 audio");?>

                    </audio>
                <?php }?>
            </div>
            <!-- message text -->

            <!-- message time -->
            <div class="time js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['message']->value['time'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['message']->value['time'];?>

            </div>
            <!-- message time -->

            <!-- seen status -->
            <?php if ($_smarty_tpl->tpl_vars['last_seen_message_id']->value == $_smarty_tpl->tpl_vars['message']->value['message_id']) {?>
                <div class="seen">
                    <?php echo __("Seen by");?>
 <?php echo $_smarty_tpl->tpl_vars['conversation']->value['seen_name_list'];?>

                </div>
            <?php }?>
            <!-- seen status -->
        </div>
    </div>
</li><?php }
}
