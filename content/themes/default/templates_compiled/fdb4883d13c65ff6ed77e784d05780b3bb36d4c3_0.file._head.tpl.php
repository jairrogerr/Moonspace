<?php
/* Smarty version 3.1.40, created on 2024-02-12 00:06:18
  from '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_65c960faa585a6_85889839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdb4883d13c65ff6ed77e784d05780b3bb36d4c3' => 
    array (
      0 => '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/_head.tpl',
      1 => 1707696157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.css.tpl' => 1,
  ),
),false)) {
function content_65c960faa585a6_85889839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vol5_3/infinityfree.com/if0_35869757/htdocs/includes/libs/Smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!doctype html>

<html lang="<?php echo $_smarty_tpl->tpl_vars['system']->value['language']['code'];?>
" <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "RTL") {?> dir="RTL" <?php }?>>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Moonspace">
    <meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_version'];?>
">

    <!-- Title -->
    <title><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,70);?>
</title>
    <!-- Title -->

    <!-- Meta -->
    <meta name="description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_description']->value,300);?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_keywords'];?>
">
    <!-- Meta -->

    <!-- OG-Meta -->
    <meta property="og:title" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,70);?>
"/>
    <meta property="og:description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_description']->value,300);?>
"/>
    <meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
"/>
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['page_image']->value;?>
"/>
    <!-- OG-Meta -->

    <!-- Twitter-Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,70);?>
"/>
    <meta name="twitter:description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_description']->value,300);?>
"/>
    <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['page_image']->value;?>
"/>
    <!-- Twitter-Meta -->

    <!-- Favicon -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_favicon_default']) {?>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/favicon.png" />
    <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['system_favicon']) {?>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_favicon'];?>
" />
    <?php }?>
    <!-- Favicon -->

    <!-- Fonts [Poppins|Roboto|Font-Awesome] -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "LTR") {?>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" crossorigin="anonymous" />
    <?php } else { ?>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" crossorigin="anonymous" />
    <?php }?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous">
    <!-- Fonts [Poppins|Roboto|Font-Awesome] -->
    
    <!-- CSS -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "LTR") {?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/style.min.css">
    <?php } else { ?>
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
        <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/style.rtl.min.css">
    <?php }?>
    <!-- CSS -->

    <!-- CSS Customized -->
    <?php $_smarty_tpl->_subTemplateRender('file:_head.css.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- CSS Customized -->

    <!-- Header Custom JavaScript -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['custome_js_header']) {?>
        <?php echo '<script'; ?>
>
            <?php echo html_entity_decode($_smarty_tpl->tpl_vars['system']->value['custome_js_header'],ENT_QUOTES);?>

        <?php echo '</script'; ?>
>
    <?php }?>
    <!-- Header Custom JavaScript -->

</head><?php }
}
