<?php
/* Smarty version 3.1.40, created on 2024-02-10 13:43:22
  from '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/ajax.messaging.conversation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_65c77d7a57e640_42294285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b568dc6c55dc458807384431865b59efc747b67f' => 
    array (
      0 => '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/ajax.messaging.conversation.tpl',
      1 => 1706567581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.messaging.conversation.messages.tpl' => 1,
    'file:__svg_icons.tpl' => 2,
  ),
),false)) {
function content_65c77d7a57e640_42294285 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card panel-messages" data-cid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
" data-color="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['color'];?>
" >
    <div class="card-header with-icon pb10 bg-transparent">
        <div class="float-right">
            <?php if (!$_smarty_tpl->tpl_vars['conversation']->value['multiple_recipients']) {?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['video_call_enabled']) {?>
                    <button type="button" class="btn btn-icon btn-rounded btn-success js_chat-call-start" data-type="video" data-uid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
">
                        <i class="fa fa-video fa-lg fa-fw"></i>
                    </button>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['audio_call_enabled']) {?>
                    <button type="button" class="btn btn-icon btn-rounded btn-info js_chat-call-start" data-type="audio" data-uid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
">
                        <i class="fa fa-phone-alt fa-lg fa-fw"></i>
                    </button>
                <?php }?>
            <?php }?>
            <button type="button" class="btn btn-sm btn-danger rounded-pill js_delete-conversation">
                <?php echo __("Delete");?>

            </button>
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['conversation']->value['multiple_recipients']) {?>
            <?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_html'];?>

        <?php } else { ?>
            <span title="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_list'];?>
"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
</span>
        <?php }?>
    </div>
    <div class="card-body">
        <div class="chat-conversations js_scroller" data-slimScroll-height="440px" data-slimScroll-start="bottom">
            <?php $_smarty_tpl->_subTemplateRender('file:ajax.messaging.conversation.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="chat-typing">
            <i class="far fa-comment-dots mr5"></i><span class="loading-dots"><span class="js_chat-typing-users"></span> <?php echo __("Typing");?>
</span>
        </div>
        <div class="chat-voice-notes">
            <div class="voice-recording-wrapper" data-handle="chat">
                <!-- processing message -->
                <div class="x-hidden js_voice-processing-message">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"upload",'class'=>"mr5",'width'=>"16px",'height'=>"16px"), 0, false);
?>
                    <?php echo __("Processing");?>
<span class="loading-dots"></span>
                </div>
                <!-- processing message -->

                <!-- success message -->
                <div class="x-hidden js_voice-success-message">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"mr5",'width'=>"16px",'height'=>"16px"), 0, true);
?>
                    <?php echo __("Voice note recorded successfully");?>

                    <div class="float-right">
                        <button type="button" class="close js_voice-remove">
                            <span>&times;</span>
                        </button>
                    </div>
                </div>
                <!-- success message -->

                <!-- start recording -->
                <div class="btn-voice-start js_voice-start">
                    <i class="fas fa-microphone mr5"></i><?php echo __("Record");?>

                </div>
                <!-- start recording -->

                <!-- stop recording -->
                <div class="btn-voice-stop js_voice-stop" style="display: none">
                    <i class="far fa-stop-circle mr5"></i><?php echo __("Recording");?>
 <span class="js_voice-timer">00:00</span>
                </div>
                <!-- stop recording -->
            </div>
        </div>
        <div class="chat-attachments attachments clearfix x-hidden">
            <ul>
                <li class="loading">
                    <div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div>
                </li>
            </ul>
        </div>
        <div class="x-form chat-form">
            <div class="chat-form-message">
                <textarea class="js_autosize js_post-message" dir="auto" rows="1" placeholder='<?php echo __("Write a message");?>
'></textarea>
            </div>
            <ul class="x-form-tools clearfix">
                <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_photos_enabled']) {?>
                    <li class="x-form-tools-attach">
                        <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="chat"></i>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['voice_notes_chat_enabled']) {?>
                    <li class="x-form-tools-voice js_chat-voice-notes-toggle">
                        <i class="fas fa-microphone fa-lg fa-fw"></i>
                    </li>
                <?php }?>
                <li class="x-form-tools-emoji js_emoji-menu-toggle">
                    <i class="far fa-smile-wink fa-lg fa-fw"></i>
                </li>
                <li class="x-form-tools-colors js_chat-colors-menu-toggle js_chat-color-me">
                    <i class="fa fa-circle fa-lg fa-fw"></i>
                </li>
                <li class="x-form-tools-post js_post-message">
                    <i class="far fa-paper-plane fa-lg fa-fw"></i>
                </li>
            </ul>
        </div>
    </div>
</div><?php }
}
