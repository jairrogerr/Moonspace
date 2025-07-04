<?php
/* Smarty version 3.1.40, created on 2024-02-11 23:35:33
  from '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_65c959c5610dc2_35979667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61bcb248ce146d405513baf8cc1252a6a8a0507d' => 
    array (
      0 => '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/settings.tpl',
      1 => 1706366190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__custom_fields.tpl' => 5,
    'file:__svg_icons.tpl' => 12,
    'file:_no_data.tpl' => 3,
    'file:__feeds_user.tpl' => 2,
    'file:_no_transactions.tpl' => 5,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_65c959c5610dc2_35979667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vol5_3/infinityfree.com/if0_35869757/htdocs/includes/libs/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-md-4 col-lg-3 offcanvas-sidebar">
            <div class="card">
                <div class="card-body with-nav">
                    <ul class="side-nav">
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings">
                                <i class="fa fa-cog fa-fw mr10"></i><?php echo __("Account Settings");?>

                            </a>
                        </li>

                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "profile") {?>class="active"<?php }?>>
                            <a href="#info-settings" data-toggle="collapse" <?php if ($_smarty_tpl->tpl_vars['view']->value == "profile") {?>aria-expanded="true"<?php }?>>
                                <i class="fa fa-user fa-fw mr10" style="color: #2b53a4;"></i><?php echo __("Edit Profile");?>

                            </a>
                            <div class='collapse <?php if ($_smarty_tpl->tpl_vars['view']->value == "profile") {?>show<?php }?>' id="info-settings">
                                <ul>
                                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "profile" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile">
                                            <?php echo __("Basic");?>

                                        </a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['work_info_enabled']) {?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "profile" && $_smarty_tpl->tpl_vars['sub_view']->value == "work") {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile/work">
                                                <?php echo __("Work");?>

                                            </a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['location_info_enabled']) {?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "profile" && $_smarty_tpl->tpl_vars['sub_view']->value == "location") {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile/location">
                                                <?php echo __("Location");?>

                                            </a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['education_info_enabled']) {?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "profile" && $_smarty_tpl->tpl_vars['sub_view']->value == "education") {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile/education">
                                                <?php echo __("Education");?>

                                            </a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['other']) {?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "profile" && $_smarty_tpl->tpl_vars['sub_view']->value == "other") {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile/other">
                                                <?php echo __("Other");?>

                                            </a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['social_info_enabled']) {?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "profile" && $_smarty_tpl->tpl_vars['sub_view']->value == "social") {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile/social">
                                                <?php echo __("Social Links");?>

                                            </a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_profile_background_enabled']) {?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "profile" && $_smarty_tpl->tpl_vars['sub_view']->value == "design") {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile/design">
                                                <?php echo __("Design");?>

                                            </a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </li>

                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "security") {?>class="active"<?php }?>>
                            <a href="#security-settings" data-toggle="collapse" <?php if ($_smarty_tpl->tpl_vars['view']->value == "security") {?>aria-expanded="true"<?php }?>>
                                <i class="fa fa-shield-alt fa-fw mr10" style="color: #8bc34a"></i><?php echo __("Security Settings");?>

                            </a>
                            <div class='collapse <?php if ($_smarty_tpl->tpl_vars['view']->value == "security") {?>show<?php }?>' id="security-settings">
                                <ul>
                                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "security" && $_smarty_tpl->tpl_vars['sub_view']->value == "password") {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/security/password">
                                            <?php echo __("Password");?>

                                        </a>
                                    </li>
                                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "security" && $_smarty_tpl->tpl_vars['sub_view']->value == "sessions") {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/security/sessions">
                                            <?php echo __("Manage Sessions");?>

                                        </a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_enabled']) {?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "security" && $_smarty_tpl->tpl_vars['sub_view']->value == "two-factor") {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/security/two-factor">
                                                <?php echo __("Two-Factor Authentication");?>

                                            </a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </li>

                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "privacy") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/privacy">
                                <i class="fa fa-user-secret fa-fw mr10" style="color: #ffb307;"></i><?php echo __("Privacy");?>

                            </a>
                        </li>

                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "notifications") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/notifications">
                                <i class="fa fa-bell fa-fw mr10" style="color: #673ab7;"></i><?php echo __("Notifications");?>

                            </a>
                        </li>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "linked") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/linked">
                                        <i class="fa fa-share-alt fa-fw mr10" style="color: #009da0;"></i><?php echo __("Linked Accounts");?>

                                    </a>
                                </li>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "membership") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/membership">
                                    <i class="fa fa-id-card fa-fw mr10" style="color: #009688;"></i><?php echo __("Membership");?>

                                </a>
                            </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_invite_users']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "invitations") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/invitations">
                                    <i class="fa fa-handshake fa-fw mr10" style="color: #2196f3;"></i><?php echo __("Invitations");?>

                                </a>
                            </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_enabled']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "affiliates") {?>class="active"<?php }?>>
                                <a href="#affiliates-settings" data-toggle="collapse" <?php if ($_smarty_tpl->tpl_vars['view']->value == "affiliates") {?>aria-expanded="true"<?php }?>>
                                    <i class="fa fa-exchange-alt fa-fw mr10" style="color: #e91e63"></i><?php echo __("Affiliates");?>

                                </a>
                                <div class='collapse <?php if ($_smarty_tpl->tpl_vars['view']->value == "affiliates") {?>show<?php }?>' id="affiliates-settings">
                                    <ul>
                                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "affiliates" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/affiliates">
                                                <?php echo __("My Affiliates");?>

                                            </a>
                                        </li>
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_money_withdraw_enabled']) {?>
                                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "affiliates" && $_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>class="active"<?php }?>>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/affiliates/payments">
                                                    <?php echo __("Payments");?>

                                                </a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['points_enabled']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "points") {?>class="active"<?php }?>>
                                <a href="#points-settings" data-toggle="collapse" <?php if ($_smarty_tpl->tpl_vars['view']->value == "points") {?>aria-expanded="true"<?php }?>>
                                    <i class="fa fa-piggy-bank fa-fw mr10" style="color: #3f51b5;"></i><?php echo __("Points");?>

                                </a>
                                <div class='collapse <?php if ($_smarty_tpl->tpl_vars['view']->value == "points") {?>show<?php }?>' id="points-settings">
                                    <ul>
                                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "points" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/points">
                                                <?php echo __("My Points");?>

                                            </a>
                                        </li>
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['points_money_withdraw_enabled']) {?>
                                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "points" && $_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>class="active"<?php }?>>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/points/payments">
                                                    <?php echo __("Payments");?>

                                                </a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_raise_funding']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "funding") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/funding">
                                    <i class="fa fa-hand-holding-usd fa-fw mr10" style="color: #4caf50;"></i><?php echo __("Funding");?>

                                </a>
                            </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['coinpayments_enabled']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "coinpayments") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/coinpayments">
                                    <i class="fab fa-bitcoin fa-fw mr10" style="color: #4caf50;"></i><?php echo __("CoinPayments");?>

                                </a>
                            </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['bank_transfers_enabled']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "bank") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/bank">
                                    <i class="fa fa-university fa-fw mr10" style="color: #4caf50;"></i><?php echo __("Bank Transfers");?>

                                </a>
                            </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['verification_requests']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "verification") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/verification">
                                    <i class="fa fa-check-circle fa-fw mr10" style="color: #2196f3"></i><?php echo __("Verification");?>

                                </a>
                            </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "apps") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/apps">
                                    <i class="fa fa-cubes fa-fw mr10" style="color: #424242;"></i><?php echo __("Apps");?>

                                </a>
                            </li>
                        <?php }?>

                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "blocking") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/blocking">
                                <i class="fa fa-minus-circle fa-fw mr10" style="color: #f44336;"></i><?php echo __("Blocking");?>

                            </a>
                        </li>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['download_info_enabled']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "information") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/information">
                                    <i class="fa fa-file-invoice fa-fw mr10" style="color: #28a745;"></i><?php echo __("Your Information");?>

                                </a>
                            </li>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['delete_accounts_enabled']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "delete") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/delete">
                                    <i class="fa fa-trash fa-fw mr10" style="color: #f44336;"></i><?php echo __("Delete Account");?>

                                </a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-md-8 col-lg-9 offcanvas-mainbar">
            <div class="card">

                <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-cog mr10"></i><?php echo __("Account Settings");?>

                    </div>
                    <form class="js_ajax-forms" data-url="users/settings.php?edit=account">
                        <div class="card-body">
                            <div class="heading-small mb20">
                                <?php echo __("Email Address");?>

                            </div>
                            <div class="pl-md-4">
                                <?php if (!$_smarty_tpl->tpl_vars['user']->value->_data['user_email_verified']) {?>
                                    <div class="alert alert-danger">
                                        <div class="icon">
                                            <i class="fa fa-exclamation-circle fa-2x"></i>
                                        </div>
                                        <div class="text">
                                            <strong><?php echo __("Email Verification Required");?>
</strong><br>
                                            <?php echo __("Check your email inbox");?>
 <?php echo __("to complete the verification process");?>

                                            <button class="btn btn-sm btn-success ml10" data-toggle="modal" data-url="core/activation_email_resend.php"><?php echo __("Resend Verification Email");?>
</button>
                                        </div>
                                    </div>
                                <?php }?>

                                <div class="form-group form-row">
                                    <label class="col-md-3 form-control-label">
                                        <?php echo __("Email Address");?>

                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input type="email" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php if (($_smarty_tpl->tpl_vars['system']->value['activation_enabled'] && $_smarty_tpl->tpl_vars['system']->value['activation_type'] == "sms") || ($_smarty_tpl->tpl_vars['system']->value['two_factor_enabled'] && $_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "sms")) {?>
                                <div class="divider"></div>

                                <div class="heading-small mb20">
                                    <?php echo __("Phone Number");?>

                                </div>
                                <div class="pl-md-4">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_phone_verified']) {?>
                                        <div class="alert alert-danger">
                                            <div class="icon">
                                                <i class="fa fa-exclamation-circle fa-2x"></i>
                                            </div>
                                            <div class="text">
                                                <strong><?php echo __("Phone Verification Required");?>
</strong><br>
                                                <?php echo __("Check your phone SMS");?>
 <?php echo __("to complete phone verification process");?>

                                                <button class="btn btn-sm btn-success ml10" data-toggle="modal" data-url="#activation-phone"><?php echo __("Enter Code");?>
</button>
                                            </div>
                                        </div>
                                    <?php }?>

                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Phone Number");?>

                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_phone'];?>
">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div>
                                            </div>
                                            <span class="form-text">
                                                <?php echo __("Your phone number i.e +1234567890");?>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>

                            <div class="divider"></div>

                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_verified']) {?>
                                <div class="alert alert-warning">
                                    <div class="icon">
                                        <i class="fa fa-exclamation-triangle fa-2x"></i>
                                    </div>
                                    <div class="text">
                                        <strong><?php echo __("Attention");?>
</strong><br>
                                        <?php echo __("Your account is already verified if you changed your username you will lose the verification badge");?>

                                    </div>
                                </div>
                            <?php }?>

                            <div class="heading-small mb20">
                                <?php echo __("Username");?>

                            </div>
                            <div class="pl-md-4">
                                <div class="form-group form-row">
                                    <label class="col-md-3 form-control-label">
                                        <?php echo __("Username");?>

                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text d-none d-sm-block"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/</span>
                                            </div>
                                            <input type="text" class="form-control" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
">
                                        </div>
                                        <span class="form-text">
                                            <?php echo __("Can only contain alphanumeric characters (A–Z, 0–9) and periods ('.')");?>

                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Secuirty Check -->
                            <div class="js_hidden-section x-hidden">
                                <div class="divider"></div>
                                <div class="heading-small mb20">
                                    <?php echo __("Secuirty Check");?>

                                </div>
                                <div class="pl-md-4">
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Current Password");?>

                                        </label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" name="password">
                                            <span class="form-text">
                                                <?php echo __("You need to enter your current password for security check");?>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Secuirty Check -->
                                
                            <!-- success -->
                            <div class="alert alert-success mb0 x-hidden"></div>
                            <!-- success -->

                            <!-- error -->
                            <div class="alert alert-danger mb0 x-hidden"></div>
                            <!-- error -->
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                        </div>
                    </form>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "profile") {?>
                    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
                        <div class="card-header with-icon">
                            <i class="fa fa-user mr10" style="color: #2b53a4;"></i><?php echo __("Basic");?>

                            <div class="float-right">
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-info">
                                    <i class="fa fa-user"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("View Profile");?>
</span>
                                </a>
                            </div>
                        </div>
                        <form class="js_ajax-forms" data-url="users/settings.php?edit=basic">
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_verified']) {?>
                                    <div class="alert alert-warning">
                                        <div class="icon">
                                            <i class="fa fa-exclamation-triangle fa-2x"></i>
                                        </div>
                                        <div class="text">
                                            <strong><?php echo __("Attention");?>
</strong><br>
                                            <?php echo __("Your account is already verified if you changed your name you will lose the verification badge");?>

                                        </div>
                                    </div>
                                <?php }?>
                                
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("First Name");?>
</label>
                                        <input type="text" class="form-control" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Last Name");?>
</label>
                                        <input type="text" class="form-control" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("I am");?>
</label>
                                        <select name="gender" class="form-control">
                                            <option value="none"><?php echo __("Select Sex");?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_gender'] == $_smarty_tpl->tpl_vars['gender']->value['gender_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['gender']->value['gender_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['gender']->value['gender_name']);?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['relationship_info_enabled']) {?>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label"><?php echo __("Relationship Status");?>
</label>
                                            <select name="relationship" class="form-control">
                                                <option value="none"><?php echo __("Select Relationship");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "single") {?>selected<?php }?> value="single"><?php echo __("Single");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "relationship") {?>selected<?php }?> value="relationship"><?php echo __("In a relationship");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "married") {?>selected<?php }?> value="married"><?php echo __("Married");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "complicated") {?>selected<?php }?> value="complicated"><?php echo __("It's complicated");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "separated") {?>selected<?php }?> value="separated"><?php echo __("Separated");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "divorced") {?>selected<?php }?> value="divorced"><?php echo __("Divorced");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "widowed") {?>selected<?php }?> value="widowed"><?php echo __("Widowed");?>
</option>
                                            </select>
                                        </div>
                                    <?php }?>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Country");?>
</label>
                                        <select name="country" class="form-control">
                                            <option value="none"><?php echo __("Select Country");?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_country'] == $_smarty_tpl->tpl_vars['country']->value['country_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['website_info_enabled']) {?>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label"><?php echo __("Website");?>
</label>
                                            <input type="text" class="form-control" name="website" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_website'];?>
">
                                            <span class="form-text">
                                                <?php echo __("Website link must start with http:// or https://");?>

                                            </span>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label"><?php echo __("Birthdate");?>
</label>
                                    <div class="form-row">
                                        <div class="col">
                                            <select class="form-control" name="birth_month">
                                                <option value="none"><?php echo __("Select Month");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Jan");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Feb");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Mar");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Apr");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("May");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Jun");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Jul");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Aug");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Sep");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo __("Oct");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo __("Nov");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo __("Dec");?>
</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-control" name="birth_day">
                                                <option value="none"><?php echo __("Select Day");?>
</option>
                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                <?php }
}
?>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-control" name="birth_year">
                                                <option value="none"><?php echo __("Select Year");?>
</option>
                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2022+1 - (1905) : 1905-(2022)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                <?php }
}
?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <?php if ($_smarty_tpl->tpl_vars['system']->value['biography_info_enabled']) {?>
                                    <div class="form-group">
                                        <label class="form-control-label"><?php echo __("About Me");?>
</label>
                                        <textarea class="form-control" name="biography"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_biography'];?>
</textarea>
                                    </div>
                                <?php }?>

                                <!-- custom fields -->
                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false), 0, false);
?>
                                <?php }?>
                                <!-- custom fields -->

                                <!-- success -->
                                <div class="alert alert-success mb0 x-hidden"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 x-hidden"></div>
                                <!-- error -->
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                            </div>
                        </form>

                    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "work") {?>
                        <div class="card-header with-icon">
                            <i class="fa fa-briefcase mr10" style="color: #2b53a4;"></i><?php echo __("Work");?>

                            <div class="float-right">
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-info">
                                    <i class="fa fa-user"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("View Profile");?>
</span>
                                </a>
                            </div>
                        </div>
                        <form class="js_ajax-forms" data-url="users/settings.php?edit=work">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-control-label"><?php echo __("Work Title");?>
</label>
                                    <input type="text" class="form-control" name="work_title" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_title'];?>
">
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Work Place");?>
</label>
                                        <input type="text" class="form-control" name="work_place" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_place'];?>
">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Work Website");?>
</label>
                                        <input type="text" class="form-control" name="work_url" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_url'];?>
">
                                        <span class="form-text">
                                            <?php echo __("Website link must start with http:// or https://");?>

                                        </span>
                                    </div>
                                </div>

                                <!-- custom fields -->
                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['work']) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['work'],'_registration'=>false), 0, true);
?>
                                <?php }?>
                                <!-- custom fields -->
                                
                                <!-- success -->
                                <div class="alert alert-success mb0 x-hidden"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 x-hidden"></div>
                                <!-- error -->
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                            </div>
                        </form>

                    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "location") {?>
                        <div class="card-header with-icon">
                            <i class="fa fa-map-marker mr10" style="color: #2b53a4;"></i><?php echo __("Location");?>

                            <div class="float-right">
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-info">
                                    <i class="fa fa-user"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("View Profile");?>
</span>
                                </a>
                            </div>
                        </div>
                        <form class="js_ajax-forms" data-url="users/settings.php?edit=location">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-control-label"><?php echo __("Current City");?>
</label>
                                    <input type="text" class="form-control js_geocomplete" name="city" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_current_city'];?>
">
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label"><?php echo __("Hometown");?>
</label>
                                    <input type="text" class="form-control js_geocomplete" name="hometown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_hometown'];?>
">
                                </div>

                                <!-- custom fields -->
                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['location']) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['location'],'_registration'=>false), 0, true);
?>
                                <?php }?>
                                <!-- custom fields -->
                                
                                <!-- success -->
                                <div class="alert alert-success mb0 x-hidden"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 x-hidden"></div>
                                <!-- error -->
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                            </div>
                        </form>

                    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "education") {?>
                        <div class="card-header with-icon">
                            <i class="fa fa-graduation-cap mr10" style="color: #2b53a4;"></i><?php echo __("Education");?>

                            <div class="float-right">
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-info">
                                    <i class="fa fa-user"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("View Profile");?>
</span>
                                </a>
                            </div>
                        </div>
                        <form class="js_ajax-forms" data-url="users/settings.php?edit=education">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-control-label"><?php echo __("School");?>
</label>
                                    <input type="text" class="form-control" name="edu_school" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_school'];?>
">
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Major");?>
</label>
                                        <input type="text" class="form-control" name="edu_major" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_major'];?>
">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Class");?>
</label>
                                        <input type="text" class="form-control" name="edu_class" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_class'];?>
">
                                    </div>
                                </div>
                                
                                <!-- custom fields -->
                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['education']) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['education'],'_registration'=>false), 0, true);
?>
                                <?php }?>
                                <!-- custom fields -->
                                
                                <!-- success -->
                                <div class="alert alert-success mb0 x-hidden"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 x-hidden"></div>
                                <!-- error -->
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                            </div>
                        </form>

                    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "other") {?>
                        <div class="card-header with-icon">
                            <i class="fa fa-plus mr10" style="color: #2b53a4;"></i><?php echo __("Other");?>

                            <div class="float-right">
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-info">
                                    <i class="fa fa-user"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("View Profile");?>
</span>
                                </a>
                            </div>
                        </div>
                        <form class="js_ajax-forms" data-url="users/settings.php?edit=other">
                            <div class="card-body">
                                <!-- custom fields -->
                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['other']) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['other'],'_registration'=>false), 0, true);
?>
                                <?php }?>
                                <!-- custom fields -->
                                
                                <!-- success -->
                                <div class="alert alert-success mb0 x-hidden"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 x-hidden"></div>
                                <!-- error -->
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                            </div>
                        </form>

                    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "social") {?>
                        <div class="card-header with-icon">
                            <i class="fab fa-facebook mr10" style="color: #2b53a4;"></i><?php echo __("Social Links");?>

                            <div class="float-right">
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-info">
                                    <i class="fa fa-user"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("View Profile");?>
</span>
                                </a>
                            </div>
                        </div>
                        <form class="js_ajax-forms" data-url="users/settings.php?edit=social">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Facebook Profile URL");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent"><i class="fab fa-facebook fa-lg" style="color: #3B579D"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="facebook" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_facebook'];?>
">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Twitter Profile URL");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent"><i class="fab fa-twitter fa-lg" style="color: #55ACEE"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="twitter" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_twitter'];?>
">
                                        </div>
                                    </div>
                                
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("YouTube Profile URL");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent"><i class="fab fa-youtube fa-lg" style="color: #E62117"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="youtube" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_youtube'];?>
">
                                        </div>
                                    </div>
                                
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Instagram Profile URL");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent"><i class="fab fa-instagram fa-lg" style="color: #3f729b"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="instagram" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_instagram'];?>
">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Twitch Profile URL");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent"><i class="fab fa-twitch fa-lg" style="color: #9146ff"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="twitch" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_twitch'];?>
">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("LinkedIn Profile URL");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent"><i class="fab fa-linkedin fa-lg" style="color: #1A84BC"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="linkedin" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_linkedin'];?>
">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Vkontakte Profile URL");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent"><i class="fab fa-vk fa-lg" style="color: #527498"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="vkontakte" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_vkontakte'];?>
">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- success -->
                                <div class="alert alert-success mb0 x-hidden"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 x-hidden"></div>
                                <!-- error -->
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                            </div>
                        </form>

                    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "design") {?>
                        <div class="card-header with-icon">
                            <i class="fa fa-paint-brush mr10" style="color: #2b53a4;"></i><?php echo __("Design");?>

                            <div class="float-right">
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-info">
                                    <i class="fa fa-user"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("View Profile");?>
</span>
                                </a>
                            </div>
                        </div>
                        <form class="js_ajax-forms" data-url="users/settings.php?edit=design">
                            <div class="card-body">
                                <div class="form-group form-row">
                                    <label class="col-md-3 form-control-label">
                                        <?php echo __("Profile Background");?>

                                    </label>
                                    <div class="col-md-9">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_profile_background'] == '') {?>
                                            <div class="x-image">
                                                <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                                    <span>×</span>
                                                </button>
                                                <div class="x-image-loader">
                                                    <div class="progress x-progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                                <input type="hidden" class="js_x-image-input" name="user_profile_background" value="">
                                            </div>
                                        <?php } else { ?>
                                            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_profile_background'];?>
')">
                                                <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                                    <span>×</span>
                                                </button>
                                                <div class="x-image-loader">
                                                    <div class="progress x-progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                                <input type="hidden" class="js_x-image-input" name="user_profile_background" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_profile_background'];?>
">
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>

                                <!-- success -->
                                <div class="alert alert-success mb0 x-hidden"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 x-hidden"></div>
                                <!-- error -->
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                            </div>
                        </form>

                    <?php }?>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "security") {?>

                    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "password") {?>
                        <div class="card-header with-icon">
                            <i class="fa fa-shield-alt mr10" style="color: #8bc34a"></i><?php echo __("Change Password");?>

                        </div>
                        <form class="js_ajax-forms" data-url="users/settings.php?edit=password">
                            <div class="card-body">
                                <div class="alert alert-warning">
                                    <div class="icon">
                                        <i class="fa fa-exclamation-triangle fa-2x"></i>
                                    </div>
                                    <div class="text pt5">
                                        <?php echo __("Changing password will log you out from all other sessions");?>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label"><?php echo __("Confirm Current Password");?>
</label>
                                    <input type="password" class="form-control" name="current">
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Your New Password");?>
</label>
                                        <input type="password" class="form-control" name="new">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Confirm New Password");?>
</label>
                                        <input type="password" class="form-control" name="confirm">
                                    </div>
                                </div>

                                <!-- success -->
                                <div class="alert alert-success mb0 x-hidden"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 x-hidden"></div>
                                <!-- error -->
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                            </div>
                        </form>

                    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "sessions") {?>
                        <div class="card-header with-icon">
                            <div class="float-right">
                                <button class="btn btn-sm btn-danger js_session-delete-all">
                                    <i class="fa fa-sign-out-alt"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Log Out Of All Sessions");?>
</span>
                                </button>
                            </div>
                            <i class="fa fa-shield-alt mr10" style="color: #8bc34a"></i><?php echo __("Manage Sessions");?>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo __("ID");?>
</th>
                                            <th><?php echo __("Browser");?>
</th>
                                            <th><?php echo __("OS");?>
</th>
                                            <th><?php echo __("Date");?>
</th>
                                            <th><?php echo __("IP");?>
</th>
                                            <th><?php echo __("Actions");?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sessions']->value, 'session');
$_smarty_tpl->tpl_vars['session']->iteration = 0;
$_smarty_tpl->tpl_vars['session']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['session']->value) {
$_smarty_tpl->tpl_vars['session']->do_else = false;
$_smarty_tpl->tpl_vars['session']->iteration++;
$__foreach_session_2_saved = $_smarty_tpl->tpl_vars['session'];
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['session']->iteration;?>
</td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['session']->value['user_browser'];?>
 <?php if ($_smarty_tpl->tpl_vars['session']->value['session_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['active_session_id']) {?><span class="badge badge-pill badge-lg badge-success"><?php echo __("Active Session");?>
</span><?php }?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['session']->value['user_os'];?>
</td>
                                                <td>
                                                    <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['session']->value['session_date'];?>
"><?php echo $_smarty_tpl->tpl_vars['session']->value['session_date'];?>
</span>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['session']->value['user_ip'];?>
</td>
                                                <td>
                                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("End Session");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_session-deleter" data-id="<?php echo $_smarty_tpl->tpl_vars['session']->value['session_id'];?>
">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php
$_smarty_tpl->tpl_vars['session'] = $__foreach_session_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "two-factor") {?>
                        <div class="card-header with-icon">
                            <i class="fa fa-shield-alt mr10" style="color: #8bc34a"></i><?php echo __("Two-Factor Authentication");?>

                        </div>
                        <form class="js_ajax-forms" data-url="users/settings.php?edit=two-factor">
                            <div class="card-body">
                                <div class="alert alert-primary">
                                    <div class="icon">
                                        <i class="fa fa-shield-alt fa-2x"></i>
                                    </div>
                                    <div class="text">
                                        <strong><?php echo __("Two-Factor Authentication");?>
</strong><br>
                                        <?php echo __("Log in with a code from your");?>
 
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "email") {
echo __("email");
}?> 
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "sms") {
echo __("phone");
}?> 
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "google") {
echo __("Google Authenticator App");
}?> 
                                        <?php echo __("as well as a password");?>

                                    </div>
                                </div>
                                <?php if (!$_smarty_tpl->tpl_vars['user']->value->_data['user_two_factor_enabled'] && $_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "google") {?>
                                    <div class="heading-small mb20">
                                        <?php echo __("Configuring your authenticator");?>

                                    </div>
                                    <div class="pl-md-4">
                                        <ol class="mtb20">
                                            <li class="mb5">
                                                <?php echo __("You need to download Google Authenticator app for");?>
 <a target="_blank" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"><?php echo __("Android");?>
</a> <?php echo __("or");?>
 <a target="_blank" href="https://itunes.apple.com/eg/app/google-authenticator/id388497605?mt=8"><?php echo __("IOS");?>
</a>
                                            </li>
                                            <li>
                                                <?php echo __("In your app, add a new account using the details below");?>
:
                                            </li>
                                        </ol>

                                        <div class="row text-center">
                                            <div class="form-group col-md-6">
                                                <h6><?php echo __("Scanning the QR code");?>
</h6>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['two_factor_QR']->value;?>
">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><?php echo __("Manually by entering this token");?>
</h6>
                                                <h3>
                                                    <span class="badge badge-warning pt10 plr20"><?php echo $_smarty_tpl->tpl_vars['two_factor_gsecret']->value;?>
</span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="heading-small mb20">
                                        <?php echo __("Activate your authenticator");?>

                                    </div>
                                    <div class="pl-md-4">
                                        <div class="form-group form-row">
                                            <label class="col-md-3 form-control-label">
                                                <?php echo __("Verification Code");?>

                                            </label>
                                            <div class="col-md-9">
                                                <input name="gcode" type="text" class="form-control" placeholder="######" required autofocus>
                                                <span class="form-text">
                                                    <?php echo __("Enter the code shown on your app");?>

                                                </span>
                                            </div>
                                        </div>

                                        <!-- success -->
                                        <div class="alert alert-success mb0 x-hidden"></div>
                                        <!-- success -->

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 x-hidden"></div>
                                        <!-- error -->
                                    </div>
                                <?php } else { ?>
                                    <div class="form-table-row">
                                        <div>
                                            <div class="form-control-label h6"><?php echo __("Two-Factor Authentication");?>
</div>
                                            <div class="form-text d-none d-sm-block"><?php echo __("Enable two-factor authentication to log in with a code from your email/phone as well as a password");?>
</div>
                                        </div>
                                        <div class="text-right">
                                            <label class="switch" for="two_factor_enabled">
                                                <input type="checkbox" name="two_factor_enabled" id="two_factor_enabled" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_two_factor_enabled']) {?>checked<?php }?>>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- success -->
                                    <div class="alert alert-success mb0 x-hidden"></div>
                                    <!-- success -->

                                    <!-- error -->
                                    <div class="alert alert-danger mb0 x-hidden"></div>
                                    <!-- error -->
                                <?php }?>
                            </div>
                            <div class="card-footer text-right">
                                <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['two_factor_type'];?>
">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                            </div>
                        </form>

                    <?php }?>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "privacy") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-user-secret mr10" style="color: #ffb307"></i><?php echo __("Privacy");?>

                    </div>
                    <form class="js_ajax-forms" data-url="users/settings.php?edit=privacy">
                        <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_enabled']) {?>
                                    <div class="form-table-row">
                                        <div class="avatar">
                                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"chat",'width'=>"40px",'height'=>"40px"), 0, false);
?>
                                        </div>
                                        <div>
                                            <div class="form-control-label h6"><?php echo __("Chat Enabled");?>
</div>
                                            <div class="form-text d-none d-sm-block"><?php echo __("If chat disabled you will appear offline and will no see who is online too");?>
</div>
                                        </div>
                                        <div class="text-right">
                                            <label class="switch" for="user_chat_enabled">
                                                <input type="checkbox" name="user_chat_enabled" id="user_chat_enabled" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled']) {?>checked<?php }?>>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                <?php }?>

                                <div class="form-table-row">
                                    <div class="avatar">
                                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"account_activation",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                                    </div>
                                    <div>
                                        <div class="form-control-label h6"><?php echo __("Email you with our newsletter");?>
</div>
                                        <div class="form-text d-none d-sm-block"><?php echo __("From time to time we send newsletter email to all of our members");?>
</div>
                                    </div>
                                    <div class="text-right">
                                        <label class="switch" for="user_privacy_newsletter">
                                            <input type="checkbox" name="user_privacy_newsletter" id="user_privacy_newsletter" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_newsletter']) {?>checked<?php }?>>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['pokes_enabled']) {?>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label"><?php echo __("Who can poke you");?>
</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-hand-point-right"></i></span>
                                                </div>
                                                <select class="form-control" name="user_privacy_poke">
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_poke'] == "public") {?>selected<?php }?> value="public">
                                                        <?php echo __("Everyone");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_poke'] == "friends") {?>selected<?php }?> value="friends">
                                                        <?php echo __("Friends");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_poke'] == "me") {?>selected<?php }?> value="me">
                                                        <?php echo __("No One");?>

                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['gifts_enabled']) {?>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label"><?php echo __("Who can send you gifts");?>
</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-gift"></i></span>
                                                </div>
                                                <select class="form-control" name="user_privacy_gifts">
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_gifts'] == "public") {?>selected<?php }?> value="public">
                                                        <?php echo __("Everyone");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_gifts'] == "friends") {?>selected<?php }?> value="friends">
                                                        <?php echo __("Friends");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_gifts'] == "me") {?>selected<?php }?> value="me">
                                                        <?php echo __("No One");?>

                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['wall_posts_enabled']) {?>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label"><?php echo __("Who can post on your wall");?>
</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-newspaper"></i></span>
                                                </div>
                                                <select class="form-control" name="user_privacy_wall">
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_wall'] == "public") {?>selected<?php }?> value="public">
                                                        <?php echo __("Everyone");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_wall'] == "friends") {?>selected<?php }?> value="friends">
                                                        <?php echo __("Friends");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_wall'] == "me") {?>selected<?php }?> value="me">
                                                        <?php echo __("Just Me");?>

                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    <?php }?>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Who can see your");?>
 <?php echo __("gender");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                            </div>
                                            <select class="form-control" name="user_privacy_gender">
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_gender'] == "public") {?>selected<?php }?> value="public">
                                                    <?php echo __("Everyone");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_gender'] == "friends") {?>selected<?php }?> value="friends">
                                                    <?php echo __("Friends");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_gender'] == "me") {?>selected<?php }?> value="me">
                                                    <?php echo __("Just Me");?>

                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['relationship_info_enabled']) {?>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label"><?php echo __("Who can see your");?>
 <?php echo __("relationship");?>
</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-heart"></i></span>
                                                </div>
                                                <select class="form-control" name="user_privacy_relationship">
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_relationship'] == "public") {?>selected<?php }?> value="public">
                                                        <?php echo __("Everyone");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_relationship'] == "friends") {?>selected<?php }?> value="friends">
                                                        <?php echo __("Friends");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_relationship'] == "me") {?>selected<?php }?> value="me">
                                                        <?php echo __("Just Me");?>

                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    <?php }?>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Who can see your");?>
 <?php echo __("birthdate");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                                            </div>
                                            <select class="form-control" name="user_privacy_birthdate">
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "public") {?>selected<?php }?> value="public">
                                                    <?php echo __("Everyone");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "friends") {?>selected<?php }?> value="friends">
                                                    <?php echo __("Friends");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "me") {?>selected<?php }?> value="me">
                                                    <?php echo __("Just Me");?>

                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Who can see your");?>
 <?php echo __("basic info");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <select class="form-control" name="user_privacy_basic">
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_basic'] == "public") {?>selected<?php }?> value="public">
                                                    <?php echo __("Everyone");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_basic'] == "friends") {?>selected<?php }?> value="friends">
                                                    <?php echo __("Friends");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_basic'] == "me") {?>selected<?php }?> value="me">
                                                    <?php echo __("Just Me");?>

                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['work_info_enabled']) {?>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label"><?php echo __("Who can see your");?>
 <?php echo __("work info");?>
</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                                </div>
                                                <select class="form-control" name="user_privacy_work">
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "public") {?>selected<?php }?> value="public">
                                                        <?php echo __("Everyone");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "friends") {?>selected<?php }?> value="friends">
                                                        <?php echo __("Friends");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "me") {?>selected<?php }?> value="me">
                                                        <?php echo __("Just Me");?>

                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['location_info_enabled']) {?>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label"><?php echo __("Who can see your");?>
 <?php echo __("location info");?>
</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                                </div>
                                                <select class="form-control" name="user_privacy_location">
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "public") {?>selected<?php }?> value="public">
                                                        <?php echo __("Everyone");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "friends") {?>selected<?php }?> value="friends">
                                                        <?php echo __("Friends");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "me") {?>selected<?php }?> value="me">
                                                        <?php echo __("Just Me");?>

                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['education_info_enabled']) {?>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label"><?php echo __("Who can see your");?>
 <?php echo __("education info");?>
</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-university"></i></span>
                                                </div>
                                                <select class="form-control" name="user_privacy_education">
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "public") {?>selected<?php }?> value="public">
                                                        <?php echo __("Everyone");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "friends") {?>selected<?php }?> value="friends">
                                                        <?php echo __("Friends");?>

                                                    </option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "me") {?>selected<?php }?> value="me">
                                                        <?php echo __("Just Me");?>

                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    <?php }?>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Who can see your");?>
 <?php echo __("other info");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-folder-plus"></i></span>
                                            </div>
                                            <select class="form-control" name="user_privacy_other">
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_other'] == "public") {?>selected<?php }?> value="public">
                                                    <?php echo __("Everyone");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_other'] == "friends") {?>selected<?php }?> value="friends">
                                                    <?php echo __("Friends");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_other'] == "me") {?>selected<?php }?> value="me">
                                                    <?php echo __("Just Me");?>

                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Who can see your");?>
 <?php echo __("friends");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                            </div>
                                            <select class="form-control" name="user_privacy_friends">
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "public") {?>selected<?php }?> value="public">
                                                    <?php echo __("Everyone");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "friends") {?>selected<?php }?> value="friends">
                                                    <?php echo __("Friends");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "me") {?>selected<?php }?> value="me">
                                                    <?php echo __("Just Me");?>

                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Who can see your");?>
 <?php echo __("photos");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-images"></i></span>
                                            </div>
                                            <select class="form-control" name="user_privacy_photos">
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_photos'] == "public") {?>selected<?php }?> value="public">
                                                    <?php echo __("Everyone");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_photos'] == "friends") {?>selected<?php }?> value="friends">
                                                    <?php echo __("Friends");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_photos'] == "me") {?>selected<?php }?> value="me">
                                                    <?php echo __("Just Me");?>

                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Who can see your");?>
 <?php echo __("liked pages");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-flag"></i></span>
                                            </div>
                                            <select class="form-control" name="user_privacy_pages">
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "public") {?>selected<?php }?> value="public">
                                                    <?php echo __("Everyone");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "friends") {?>selected<?php }?> value="friends">
                                                    <?php echo __("Friends");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "me") {?>selected<?php }?> value="me">
                                                    <?php echo __("Just Me");?>

                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Who can see your");?>
 <?php echo __("joined groups");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                                            </div>
                                            <select class="form-control" name="user_privacy_groups">
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "public") {?>selected<?php }?> value="public">
                                                    <?php echo __("Everyone");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "friends") {?>selected<?php }?> value="friends">
                                                    <?php echo __("Friends");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "me") {?>selected<?php }?> value="me">
                                                    <?php echo __("Just Me");?>

                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><?php echo __("Who can see your");?>
 <?php echo __("joined events");?>
</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                            </div>
                                            <select class="form-control" name="user_privacy_events">
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_events'] == "public") {?>selected<?php }?> value="public">
                                                    <?php echo __("Everyone");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_events'] == "friends") {?>selected<?php }?> value="friends">
                                                    <?php echo __("Friends");?>

                                                </option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_events'] == "me") {?>selected<?php }?> value="me">
                                                    <?php echo __("Just Me");?>

                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- success -->
                                <div class="alert alert-success mb0 x-hidden"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 x-hidden"></div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                        </div>
                    </form>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "notifications") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-bell fa-fw mr10" style="color: #673ab7;"></i><?php echo __("Notifications");?>

                    </div>
                    <form class="js_ajax-forms" data-url="users/settings.php?edit=notifications">
                        <div class="card-body">
                            <!-- System Notifications -->
                            <div class="heading-small mb20">
                                <?php echo __("System Notifications");?>

                            </div>
                            <div class="pl-md-4">
                                <div class="form-table-row">
                                    <div class="avatar">
                                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"chat_bell",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                                    </div>
                                    <div>
                                        <div class="form-control-label h6"><?php echo __("Chat Message Sound");?>
</div>
                                        <div class="form-text d-none d-sm-block"><?php echo __("A sound will be played each time you receive a new message on an inactive chat window");?>
</div>
                                    </div>
                                    <div class="text-right">
                                        <label class="switch" for="chat_sound_settings">
                                            <input type="checkbox" name="chat_sound" id="chat_sound_settings" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['chat_sound']) {?>checked<?php }?>>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-table-row">
                                    <div class="avatar">
                                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"notification_bell",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                                    </div>
                                    <div>
                                        <div class="form-control-label h6"><?php echo __("Notifications Sound");?>
</div>
                                        <div class="form-text d-none d-sm-block"><?php echo __("A sound will be played each time you receive a new activity notification");?>
</div>
                                    </div>
                                    <div class="text-right">
                                        <label class="switch" for="notifications_sound_settings">
                                            <input type="checkbox" name="notifications_sound" id="notifications_sound_settings" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['notifications_sound']) {?>checked<?php }?>>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- System Notifications -->

                            <!-- Email Notifications -->
                            <?php if ($_smarty_tpl->tpl_vars['email_notifications_enabled']->value) {?>
                                <div class="divider"></div>
                                <div class="heading-small mb20">
                                    <?php echo __("Email Notifications");?>

                                </div>
                                <div class="pl-md-4">
                                    <div class="form-group form-row">
                                        <label class="col-md-2 form-control-label"><?php echo __("Email Me When");?>
</label>
                                        <div class="col-md-10">
                                            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_likes']) {?>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="email_post_likes" id="email_post_likes" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_post_likes']) {?>checked<?php }?>>
                                                    <label class="custom-control-label" for="email_post_likes"><?php echo __("Someone liked my post");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_comments']) {?>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="email_post_comments" id="email_post_comments" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_post_comments']) {?>checked<?php }?>>
                                                    <label class="custom-control-label" for="email_post_comments"><?php echo __("Someone commented on my post");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_shares']) {?>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="email_post_shares" id="email_post_shares" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_post_shares']) {?>checked<?php }?>>
                                                    <label class="custom-control-label" for="email_post_shares"><?php echo __("Someone shared my post");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_wall_posts']) {?>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="email_wall_posts" id="email_wall_posts" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_wall_posts']) {?>checked<?php }?>>
                                                    <label class="custom-control-label" for="email_wall_posts"><?php echo __("Someone posted on my timeline");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_mentions']) {?>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="email_mentions" id="email_mentions" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_mentions']) {?>checked<?php }?>>
                                                    <label class="custom-control-label" for="email_mentions"><?php echo __("Someone mentioned me");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_profile_visits']) {?>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="email_profile_visits" id="email_profile_visits" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_profile_visits']) {?>checked<?php }?>>
                                                    <label class="custom-control-label" for="email_profile_visits"><?php echo __("Someone visited my profile");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_friend_requests']) {?>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="email_friend_requests" id="email_friend_requests" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_friend_requests']) {?>checked<?php }?>>
                                                    <label class="custom-control-label" for="email_friend_requests"><?php echo __("Someone sent me/accepted my friend requset");?>
</label>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <!-- Email Notifications -->
                            
                            <!-- success -->
                            <div class="alert alert-success mb0 x-hidden"></div>
                            <!-- success -->

                            <!-- error -->
                            <div class="alert alert-danger mb0 x-hidden"></div>
                            <!-- error -->
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                        </div>
                    </form>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "linked") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-share-alt mr10" style="color: #009da0;"></i><?php echo __("Linked Accounts");?>

                    </div>
                    <div class="card-body">
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
                            <div class="form-table-row">
                                <div class="avatar">
                                    <i class="fab fa-facebook-square fa-3x" style="color: #3B579D"></i>
                                </div>
                                <div>
                                    <div class="form-control-label h6 mb5"><?php echo __("Facebook");?>
</div>
                                    <div class="form-text d-none d-sm-block">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['facebook_connected']) {?>
                                            <?php echo __("Your account is connected to");?>
 <?php echo __("Facebook");?>

                                        <?php } else { ?>
                                            <?php echo __("Connect your account to");?>
 <?php echo __("Facebook");?>

                                        <?php }?>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['facebook_connected']) {?>
                                        <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/facebook"><?php echo __("Disconnect");?>
</a>
                                    <?php } else { ?>
                                        <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook"><?php echo __("Connect");?>
</a>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                            <div class="form-table-row">
                                <div class="avatar">
                                    <i class="fab fa-google fa-3x" style="color: #DC4A38"></i>
                                </div>
                                <div>
                                    <div class="form-control-label h6 mb5"><?php echo __("Google");?>
</div>
                                    <div class="form-text d-none d-sm-block">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['google_connected']) {?>
                                            <?php echo __("Your account is connected to");?>
 <?php echo __("Google");?>

                                        <?php } else { ?>
                                            <?php echo __("Connect your account to");?>
 <?php echo __("Google");?>

                                        <?php }?>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['google_connected']) {?>
                                        <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/google"><?php echo __("Disconnect");?>
</a>
                                    <?php } else { ?>
                                        <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google"><?php echo __("Connect");?>
</a>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
                            <div class="form-table-row">
                                <div class="avatar">
                                    <i class="fab fa-twitter-square fa-3x" style="color: #55ACEE"></i>
                                </div>
                                <div>
                                    <div class="form-control-label h6 mb5"><?php echo __("Twitter");?>
</div>
                                    <div class="form-text d-none d-sm-block">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['twitter_connected']) {?>
                                            <?php echo __("Your account is connected to");?>
 <?php echo __("Twitter");?>

                                        <?php } else { ?>
                                            <?php echo __("Connect your account to");?>
 <?php echo __("Twitter");?>

                                        <?php }?>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['twitter_connected']) {?>
                                        <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/twitter"><?php echo __("Disconnect");?>
</a>
                                    <?php } else { ?>
                                        <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter"><?php echo __("Connect");?>
</a>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>
                            <div class="form-table-row">
                                <div class="avatar">
                                    <i class="fab fa-linkedin fa-3x" style="color: #1A84BC"></i>
                                </div>
                                <div>
                                    <div class="form-control-label h6 mb5"><?php echo __("Linkedin");?>
</div>
                                    <div class="form-text d-none d-sm-block">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['linkedin_connected']) {?>
                                            <?php echo __("Your account is connected to");?>
 <?php echo __("Linkedin");?>

                                        <?php } else { ?>
                                            <?php echo __("Connect your account to");?>
 <?php echo __("Linkedin");?>

                                        <?php }?>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['linkedin_connected']) {?>
                                        <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/linkedin"><?php echo __("Disconnect");?>
</a>
                                    <?php } else { ?>
                                        <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/linkedin"><?php echo __("Connect");?>
</a>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
                            <div class="form-table-row">
                                <div class="avatar">
                                    <i class="fab fa-vk fa-3x" style="color: #527498"></i>
                                </div>
                                <div>
                                    <div class="form-control-label h6 mb5"><?php echo __("Vkontakte");?>
</div>
                                    <div class="form-text d-none d-sm-block">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['vkontakte_connected']) {?>
                                            <?php echo __("Your account is connected to");?>
 <?php echo __("Vkontakte");?>

                                        <?php } else { ?>
                                            <?php echo __("Connect your account to");?>
 <?php echo __("Vkontakte");?>

                                        <?php }?>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['vkontakte_connected']) {?>
                                        <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/vkontakte"><?php echo __("Disconnect");?>
</a>
                                    <?php } else { ?>
                                        <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/vkontakte"><?php echo __("Connect");?>
</a>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "membership") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-id-card mr10" style="color: #009688;"></i><?php echo __("Membership");?>

                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary">
                            <div class="icon">
                                <i class="fa fa-id-card fa-2x"></i>
                            </div>
                            <div class="text">
                                <strong><?php echo __("Membership");?>
</strong><br>
                                <?php echo __("Choose the Plan That's Right for You");?>
, <?php echo __("Check the package from");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Here");?>
</a>
                            </div>
                        </div>

                        <form>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                <div class="heading-small mb20">
                                    <?php echo __("Package Details");?>

                                </div>
                                <div class="pl-md-4">
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Package");?>

                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['package_name'];?>
 (<?php echo print_money($_smarty_tpl->tpl_vars['user']->value->_data['price']);?>
 
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['period'] == "life") {
echo __("Life Time");
} else {
echo __("per");?>
 <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['period_num'] != '1') {
echo $_smarty_tpl->tpl_vars['user']->value->_data['period_num'];
}?> <?php echo __(ucfirst($_smarty_tpl->tpl_vars['user']->value->_data['period']));
}?>)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Subscription Date");?>

                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->_data['user_subscription_date'],"%e %B %Y");?>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Expiration Date");?>

                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['period'] == "life") {?>
                                                    <?php echo __("Life Time");?>

                                                <?php } else { ?>
                                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->_data['subscription_end'],"%e %B %Y");?>
 (<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['subscription_timeleft'] > 0) {
echo __("Remaining");?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['subscription_timeleft'];?>
 <?php echo __("Days");
} else {
echo __("Expired");
}?>)
                                                <?php }?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Boosted Posts");?>

                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_posts'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['boost_posts'];?>
 (<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/boosted/posts"><?php echo __("Manage");?>
</a>)
                                            </p>
                                            
                                            <div class="progress mb5">
                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['boost_posts'] == 0) {?>0<?php } else {
echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_posts']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_posts'])*100;
}?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['boost_posts'] == 0) {?>0<?php } else {
echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_posts']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_posts'])*100;
}?>%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Boosted Pages");?>

                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_pages'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'];?>
 (<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/boosted/pages"><?php echo __("Manage");?>
</a>)
                                            </p>
                                            
                                            <div class="progress mb5">
                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'] == 0) {?>0<?php } else {
echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_pages']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'])*100;
}?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'] == 0) {?>0<?php } else {
echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_pages']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'])*100;
}?>%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="heading-small mb20">
                                    <?php echo __("Upgrade Package");?>

                                </div>
                                <div class="pl-md-4">
                                    <div class="text-center">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-md btn-success"><i class="fa fa-rocket mr10"></i><?php echo __("Upgrade Package");?>
</a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="text-center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-md btn-success"><i class="fa fa-rocket mr10"></i><?php echo __("Upgrade to Pro");?>
</a>
                                </div>
                            <?php }?>
                        </form>
                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "invitations") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-handshake mr10" style="color: #2196f3;"></i><?php echo __("Invitations");?>


                        <div class="float-right">
                            <button data-toggle="modal" data-url="users/invitations.php?do=generate" class="btn btn-sm btn-success">
                                <i class="fa fa-handshake mr10"></i><?php echo __("Generate New Code");?>

                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary">
                            <div class="icon">
                                <i class="fa fa-handshake fa-2x"></i>
                            </div>
                            <div class="text">
                                <strong><?php echo __("Invitations System");?>
</strong><br>
                                <?php echo __("You have");?>
 <strong><span class="badge badge-pill badge-danger"><?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_user_limit'] == 0) {
echo __("Unlimited");
} else {
echo $_smarty_tpl->tpl_vars['system']->value['invitation_user_limit'];
}?></span></strong> <?php echo __("invitations");?>
 <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_user_limit'] != 0) {
echo __("every");?>
 <?php echo __(ucfirst($_smarty_tpl->tpl_vars['system']->value['invitation_expire_period']));
}?>
                                <br>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-4">
                                <div class="stat-panel border">
                                    <div class="stat-cell">
                                        <i class="fa fa-mail-bulk icon bg-gradient-success"></i>
                                        <span class="text-xxlg"><?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_user_limit'] == 0) {?><i class="fas fa-infinity"></i><?php } else {
echo $_smarty_tpl->tpl_vars['invitation_codes_stats']->value['available'];
}?></span><br>
                                        <span><?php echo __("Available Invitations");?>
</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="stat-panel border">
                                    <div class="stat-cell">
                                        <i class="fa fa-envelope icon bg-gradient-primary"></i>
                                        <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['invitation_codes_stats']->value['generated'];?>
</span><br>
                                        <span><?php echo __("Generated Invitations");?>
</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="stat-panel border">
                                    <div class="stat-cell">
                                        <i class="fa fa-envelope-open-text icon bg-gradient-danger"></i>
                                        <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['invitation_codes_stats']->value['used'];?>
</span><br>
                                        <span><?php echo __("Used Invitations");?>
</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-title mb20">
                            <i class="fa fa-mail-bulk mr10"></i><?php echo __("Your Invitations Codes");?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['invitation_codes']->value) {?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo __("Invitation Code");?>
</th>
                                            <th><?php echo __("Created");?>
</th>
                                            <th><?php echo __("Used");?>
</th>
                                            <th><?php echo __("Used By");?>
</th>
                                            <th><?php echo __("Actions");?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invitation_codes']->value, 'invitation_code');
$_smarty_tpl->tpl_vars['invitation_code']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invitation_code']->value) {
$_smarty_tpl->tpl_vars['invitation_code']->do_else = false;
?>
                                            <tr>
                                                <td><span class="badge badge-pill badge-lg badge-light"><?php echo $_smarty_tpl->tpl_vars['invitation_code']->value['code'];?>
</span></td>
                                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['invitation_code']->value['created_date'],"%e %B %Y");?>
</td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['invitation_code']->value['used']) {?>
                                                        <span class="badge badge-pill badge-lg badge-danger"><?php echo __("Yes");?>
</span>
                                                    <?php } else { ?>
                                                        <span class="badge badge-pill badge-lg badge-success"><?php echo __("No");?>
</span>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['invitation_code']->value['used']) {?>
                                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['invitation_code']->value['user_name'];?>
">
                                                            <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['invitation_code']->value['user_picture'];?>
">
                                                            <?php echo $_smarty_tpl->tpl_vars['invitation_code']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['invitation_code']->value['user_lastname'];?>

                                                        </a>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if (!$_smarty_tpl->tpl_vars['invitation_code']->value['used']) {?>
                                                        <div class="d-inline-block" data-toggle="tooltip" data-placement="top" title='<?php echo __("Share");?>
'>
                                                            <button data-toggle="modal" data-url="users/invitations.php?do=share&code=<?php echo $_smarty_tpl->tpl_vars['invitation_code']->value['code'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                                                <i class="fa fa-link"></i>
                                                            </button>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php }?>
                    </div>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "affiliates") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-exchange-alt mr10" style="color: #e91e63;"></i><?php echo __("Affiliates");?>

                    </div>
                    <div class="card-body">
                        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
                            <div class="alert alert-primary">
                                <div class="icon">
                                    <i class="fa fa-money-bill-alt fa-2x"></i>
                                </div>
                                <div class="text">
                                    <strong><?php echo __("Affiliates System");?>
</strong><br>
                                    <?php echo __("Earn up to");?>
 
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_type'] == "registration") {?>
                                        <?php echo print_money(number_format($_smarty_tpl->tpl_vars['system']->value['affiliates_per_user'],2));?>
 <?php echo __("For each user you will refer");?>
.<br>
                                        <?php echo __("You will be paid when");?>
 <?php echo __("new user registered");?>

                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_type'] == "fixed") {?>
                                            <?php echo print_money(number_format($_smarty_tpl->tpl_vars['system']->value['affiliates_per_user'],2));?>
 <?php echo __("For each user you will refer");?>
.<br>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['system']->value['affiliates_percentage'];?>
% <?php echo __("From the package price of your refered user");?>
.<br>
                                        <?php }?>
                                        <?php echo __("You will be paid when");?>
 <?php echo __("new user registered & bought a package");?>

                                    <?php }?>
                                    <br>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_money_withdraw_enabled']) {?>
                                        <?php echo __("You can withdraw your money");?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_money_transfer_enabled']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_money_withdraw_enabled']) {
echo __("or");?>
 <?php }?>
                                        <?php echo __("You can transfer your money to your");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet" target="_blank"><i class="fa fa-wallet"></i> <?php echo __("wallet");?>
</a>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="text-center text-xlg">
                                <?php echo __("Your affiliate link is");?>

                            </div>
                            <div style="margin: 25px auto; width: 60%;">
                                <div class="input-group">
                                    <input type="text" disabled class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
">
                                    <div class="input-group-append">
                                        <button class="btn btn-light js_clipboard" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" data-toggle="tooltip" data-placement="top" title='<?php echo __("Copy");?>
'>
                                            <i class="fas fa-copy"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center text-xlg mb20">
                                <?php echo __("Share");?>
<br>
                                <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-facebook" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-rounded btn-twitter" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-vk" target="_blank">
                                    <i class="fab fa-vk"></i>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref%3D<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="https://api.whatsapp.com/send?text=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref%3D<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-whatsapp" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="https://reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-reddit" target="_blank">
                                    <i class="fab fa-reddit"></i>
                                </a>
                                <a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest" target="_blank">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </div>

                            <div class="row justify-content-center">
                                <!-- money balance -->
                                <div class="col-sm-6">
                                    <div class="section-title mb20">
                                        <i class="fas fa-donate mr10"></i><?php echo __("Your Affiliate Balance");?>

                                    </div>
                                    <div class="stat-panel bg-gradient-primary">
                                        <div class="stat-cell">
                                            <i class="fa fas fa-donate bg-icon"></i>
                                            <div class="h3 mtb10">
                                                <?php echo print_money(number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_affiliate_balance'],2));?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- money balance -->
                            </div>

                            <div class="divider"></div>

                            <?php if (count($_smarty_tpl->tpl_vars['affiliates']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['affiliates']->value, '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No affiliates");?>

                                </p>
                            <?php }?>

                            <!-- see-more -->
                            <?php if (count($_smarty_tpl->tpl_vars['affiliates']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                <div class="alert alert-info see-more js_see-more" data-uid="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
" data-get="affiliates">
                                    <span><?php echo __("See More");?>
</span>
                                    <div class="loader loader_small x-hidden"></div>
                                </div>
                            <?php }?>
                            <!-- see-more -->
                        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>
                            <div class="heading-small mb20">
                                <?php echo __("Withdrawal Request");?>

                            </div>
                            <div class="pl-md-4">
                                <form class="js_ajax-forms" data-url="users/withdraw.php?type=affiliates">
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Your Balance");?>

                                        </label>
                                        <div class="col-md-9">
                                            <h6>
                                                <span class="badge badge-lg badge-info">
                                                    <?php echo print_money(number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_affiliate_balance'],2));?>

                                                </span>
                                            </h6>
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Amount");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="amount">
                                            <span class="form-text">
                                                <?php echo __("The minimum withdrawal request amount is");?>
 <?php echo print_money($_smarty_tpl->tpl_vars['system']->value['affiliates_min_withdrawal']);?>

                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Payment Method");?>

                                        </label>
                                        <div class="col-md-9">
                                            <?php if (in_array("paypal",$_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method_array'])) {?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="method" id="method_paypal" value="paypal" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_paypal"><?php echo __("PayPal");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if (in_array("skrill",$_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method_array'])) {?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="method" id="method_skrill" value="skrill" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_skrill"><?php echo __("Skrill");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if (in_array("bank",$_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method_array'])) {?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="method" id="method_bank" value="bank" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_bank"><?php echo __("Bank Transfer");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if (in_array("custom",$_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method_array'])) {?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="method" id="method_custom" value="custom" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_custom"><?php echo __($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method_custom']);?>
</label>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Transfer To");?>

                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="method_value">
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <div class="col-md-9 offset-md-3">
                                            <button type="submit" class="btn btn-primary"><?php echo __("Make a withdrawal");?>
</button>
                                        </div>
                                    </div>

                                    <!-- success -->
                                    <div class="alert alert-success mb0 x-hidden"></div>
                                    <!-- success -->

                                    <!-- error -->
                                    <div class="alert alert-danger mb0 x-hidden"></div>
                                    <!-- error -->
                                </form>
                            </div>

                            <div class="divider"></div>

                            <div class="heading-small mb20">
                                <?php echo __("Withdrawal History");?>

                            </div>
                            <div class="pl-md-4">
                                <?php if ($_smarty_tpl->tpl_vars['payments']->value) {?>
                                    <div class="table-responsive mt20">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th><?php echo __("ID");?>
</th>
                                                    <th><?php echo __("Amount");?>
</th>
                                                    <th><?php echo __("Method");?>
</th>
                                                    <th><?php echo __("Transfer To");?>
</th>
                                                    <th><?php echo __("Time");?>
</th>
                                                    <th><?php echo __("Status");?>
</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->iteration = 0;
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
$_smarty_tpl->tpl_vars['payment']->iteration++;
$__foreach_payment_5_saved = $_smarty_tpl->tpl_vars['payment'];
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['payment']->iteration;?>
</td>
                                                        <td><?php echo print_money(number_format($_smarty_tpl->tpl_vars['payment']->value['amount'],2));?>
</td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['payment']->value['method'] == "custom") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method_custom'];?>

                                                            <?php } else { ?>
                                                                <?php echo ucfirst($_smarty_tpl->tpl_vars['payment']->value['method']);?>

                                                            <?php }?>
                                                        </td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['method_value'];?>
</td>
                                                        <td>
                                                            <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
</span>
                                                        </td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['payment']->value['status'] == '0') {?>
                                                                <span class="badge badge-pill badge-lg badge-warning"><?php echo __("Pending");?>
</span>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['payment']->value['status'] == '1') {?>
                                                                <span class="badge badge-pill badge-lg badge-success"><?php echo __("Approved");?>
</span>
                                                            <?php } else { ?>
                                                                <span class="badge badge-pill badge-lg badge-danger"><?php echo __("Declined");?>
</span>
                                                            <?php }?>
                                                        </td>
                                                    </tr>
                                                <?php
$_smarty_tpl->tpl_vars['payment'] = $__foreach_payment_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "points") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-piggy-bank mr10" style="color: #3f51b5;"></i><?php echo __("Points");?>

                    </div>
                    <div class="card-body">
                        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
                            <div class="alert alert-primary">
                                <div class="icon">
                                    <i class="fa fa-piggy-bank fa-2x"></i>
                                </div>
                                <div class="text">
                                    <strong><?php echo __("Points System");?>
</strong><br>
                                    <?php echo __("Each");?>
 <strong><?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_currency'];?>
</strong> <?php echo __("points equal");?>
 <strong><?php echo print_money("1");?>
</strong>.
                                    <br>
                                    <?php echo __("Your daily points limit is");?>
 <strong><span class="badge badge-pill badge-warning"><?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled'] && $_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {
echo $_smarty_tpl->tpl_vars['system']->value['points_limit_pro'];
} else {
echo $_smarty_tpl->tpl_vars['system']->value['points_limit_user'];
}?></span></strong> <?php echo __("Points");?>
, <?php echo __("You have");?>
 <strong><span class="badge badge-pill badge-danger"><?php echo $_smarty_tpl->tpl_vars['remaining_points']->value;?>
</span></strong> <?php echo __("remaining points");?>

                                    <br>
                                    <?php echo __("Your daily points limit will be reset after 24 hours from your last valid earned action");?>

                                    <br>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['points_money_withdraw_enabled']) {?>
                                        <?php echo __("You can withdraw your money");?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['points_money_transfer_enabled']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['points_money_withdraw_enabled']) {
echo __("or");?>
 <?php }?>
                                        <?php echo __("You can transfer your money to your");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet" target="_blank"><i class="fa fa-wallet"></i> <?php echo __("wallet");?>
</a>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-4">
                                    <div class="stat-panel border">
                                        <div class="stat-cell">
                                            <i class="fa fa-newspaper icon bg-gradient-success"></i>
                                            <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_post'];?>
</span><br>
                                            <span class="text-lg"><?php echo __("Points");?>
</span><br>
                                            <span><?php echo __("For creating a new post");?>
</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="stat-panel border">
                                        <div class="stat-cell">
                                            <i class="fa fa-comments icon bg-gradient-primary"></i>
                                            <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_comment'];?>
</span><br>
                                            <span class="text-lg"><?php echo __("Points");?>
</span><br>
                                            <span><?php echo __("For commenting any post");?>
</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="stat-panel border">
                                        <div class="stat-cell">
                                            <i class="fa fa-thumbs-up icon bg-gradient-danger"></i>
                                            <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_reaction'];?>
</span><br>
                                            <span class="text-lg"><?php echo __("Points");?>
</span><br>
                                            <span><?php echo __("For reacting on any post");?>
</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="stat-panel border">
                                        <div class="stat-cell">
                                            <i class="fa fa-users icon bg-gradient-warning"></i>
                                            <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_follow'];?>
</span><br>
                                            <span class="text-lg"><?php echo __("Points");?>
</span><br>
                                            <span><?php echo __("For each follower you got");?>
</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="stat-panel border">
                                        <div class="stat-cell">
                                            <i class="fa fa-exchange-alt icon bg-gradient-purple"></i>
                                            <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_referred'];?>
</span><br>
                                            <span class="text-lg"><?php echo __("Points");?>
</span><br>
                                            <span><?php echo __("For referring user");?>
</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- points balance -->
                                <div class="col-sm-6">
                                    <div class="section-title mb20">
                                        <i class="fa fa-piggy-bank mr10"></i><?php echo __("Your Points Balance");?>

                                    </div>
                                    <div class="stat-panel bg-gradient-info">
                                        <div class="stat-cell">
                                            <i class="fa fa-piggy-bank bg-icon"></i>
                                            <div class="h3 mtb10">
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_points'];?>
 <?php echo __("Points");?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- points balance -->

                                <!-- money balance -->
                                <div class="col-sm-6">
                                    <div class="section-title mb20">
                                        <i class="fas fa-donate mr10"></i><?php echo __("Your Money Balance");?>

                                    </div>
                                    <div class="stat-panel bg-gradient-primary">
                                        <div class="stat-cell">
                                            <i class="fa fas fa-donate bg-icon"></i>
                                            <div class="h3 mtb10">
                                                <?php echo print_money(number_format(((1/$_smarty_tpl->tpl_vars['system']->value['points_per_currency'])*$_smarty_tpl->tpl_vars['user']->value->_data['user_points']),2));?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- money balance -->
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>
                            <div class="heading-small mb20">
                                <?php echo __("Withdrawal Request");?>

                            </div>
                            <div class="pl-md-4">
                                <form class="js_ajax-forms" data-url="users/withdraw.php?type=points">
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Your Balance");?>

                                        </label>
                                        <div class="col-md-9">
                                            <h6>
                                                <span class="badge badge-lg badge-info">
                                                    <?php echo print_money(number_format(((1/$_smarty_tpl->tpl_vars['system']->value['points_per_currency'])*$_smarty_tpl->tpl_vars['user']->value->_data['user_points']),2));?>

                                                </span>
                                            </h6>
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Amount");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="amount">
                                            <span class="form-text">
                                                <?php echo __("The minimum withdrawal request amount is");?>
 <?php echo print_money($_smarty_tpl->tpl_vars['system']->value['points_min_withdrawal']);?>

                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Payment Method");?>

                                        </label>
                                        <div class="col-md-9">
                                            <?php if (in_array("paypal",$_smarty_tpl->tpl_vars['system']->value['points_payment_method_array'])) {?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="method" id="method_paypal" value="paypal" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_paypal"><?php echo __("PayPal");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if (in_array("skrill",$_smarty_tpl->tpl_vars['system']->value['points_payment_method_array'])) {?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="method" id="method_skrill" value="skrill" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_skrill"><?php echo __("Skrill");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if (in_array("bank",$_smarty_tpl->tpl_vars['system']->value['points_payment_method_array'])) {?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="method" id="method_bank" value="bank" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_bank"><?php echo __("Bank Transfer");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if (in_array("custom",$_smarty_tpl->tpl_vars['system']->value['points_payment_method_array'])) {?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="method" id="method_custom" value="custom" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_custom"><?php echo __($_smarty_tpl->tpl_vars['system']->value['points_payment_method_custom']);?>
</label>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Transfer To");?>

                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="method_value">
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <div class="col-md-9 offset-md-3">
                                            <button type="submit" class="btn btn-primary"><?php echo __("Make a withdrawal");?>
</button>
                                        </div>
                                    </div>

                                    <!-- success -->
                                    <div class="alert alert-success mb0 x-hidden"></div>
                                    <!-- success -->

                                    <!-- error -->
                                    <div class="alert alert-danger mb0 x-hidden"></div>
                                    <!-- error -->
                                </form>
                            </div>

                            <div class="divider"></div>

                            <div class="heading-small mb20">
                                <?php echo __("Withdrawal History");?>

                            </div>
                            <div class="pl-md-4">
                                <?php if ($_smarty_tpl->tpl_vars['payments']->value) {?>
                                    <div class="table-responsive mt20">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th><?php echo __("ID");?>
</th>
                                                    <th><?php echo __("Amount");?>
</th>
                                                    <th><?php echo __("Method");?>
</th>
                                                    <th><?php echo __("Transfer To");?>
</th>
                                                    <th><?php echo __("Time");?>
</th>
                                                    <th><?php echo __("Status");?>
</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->iteration = 0;
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
$_smarty_tpl->tpl_vars['payment']->iteration++;
$__foreach_payment_6_saved = $_smarty_tpl->tpl_vars['payment'];
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['payment']->iteration;?>
</td>
                                                        <td><?php echo print_money(number_format($_smarty_tpl->tpl_vars['payment']->value['amount'],2));?>
</td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['payment']->value['method'] == "custom") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['system']->value['points_payment_method_custom'];?>

                                                            <?php } else { ?>
                                                                <?php echo ucfirst($_smarty_tpl->tpl_vars['payment']->value['method']);?>

                                                            <?php }?>
                                                        </td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['method_value'];?>
</td>
                                                        <td>
                                                            <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
</span>
                                                        </td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['payment']->value['status'] == '0') {?>
                                                                <span class="badge badge-pill badge-lg badge-warning"><?php echo __("Pending");?>
</span>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['payment']->value['status'] == '1') {?>
                                                                <span class="badge badge-pill badge-lg badge-success"><?php echo __("Approved");?>
</span>
                                                            <?php } else { ?>
                                                                <span class="badge badge-pill badge-lg badge-danger"><?php echo __("Declined");?>
</span>
                                                            <?php }?>
                                                        </td>
                                                    </tr>
                                                <?php
$_smarty_tpl->tpl_vars['payment'] = $__foreach_payment_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "funding") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-hand-holding-usd mr10" style="color: #4caf50;"></i><?php echo __("Funding");?>

                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary">
                            <div class="icon">
                                <i class="fa fa-hand-holding-usd fa-2x"></i>
                            </div>
                            <div class="text">
                                <strong><?php echo __("Funding System");?>
</strong><br>
                                <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_money_withdraw_enabled']) {?>
                                    <?php echo __("You can withdraw your money");?>

                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_money_transfer_enabled']) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_money_withdraw_enabled']) {
echo __("or");?>
 <?php }?>
                                    <?php echo __("You can transfer your money to your");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet" target="_blank"><i class="fa fa-wallet"></i> <?php echo __("wallet");?>
</a>
                                <?php }?>
                            </div>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_money_withdraw_enabled']) {?>
                            <div class="heading-small mb20">
                                <?php echo __("Withdrawal Request");?>

                            </div>
                            <div class="pl-md-4">
                                <form class="js_ajax-forms" data-url="users/withdraw.php?type=funding">
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Your Balance");?>

                                        </label>
                                        <div class="col-md-9">
                                            <h6>
                                                <span class="badge badge-lg badge-info">
                                                    <?php echo print_money(number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_funding_balance'],2));?>

                                                </span>
                                            </h6>
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Amount");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="amount">
                                            <span class="form-text">
                                                <?php echo __("The minimum withdrawal request amount is");?>
 <?php echo print_money($_smarty_tpl->tpl_vars['system']->value['funding_min_withdrawal']);?>

                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Payment Method");?>

                                        </label>
                                        <div class="col-md-9">
                                            <?php if (in_array("paypal",$_smarty_tpl->tpl_vars['system']->value['funding_payment_method_array'])) {?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="method" id="method_paypal" value="paypal" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_paypal"><?php echo __("PayPal");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if (in_array("skrill",$_smarty_tpl->tpl_vars['system']->value['funding_payment_method_array'])) {?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="method" id="method_skrill" value="skrill" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_skrill"><?php echo __("Skrill");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if (in_array("bank",$_smarty_tpl->tpl_vars['system']->value['funding_payment_method_array'])) {?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="method" id="method_bank" value="bank" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_bank"><?php echo __("Bank Transfer");?>
</label>
                                                </div>
                                            <?php }?>
                                            <?php if (in_array("custom",$_smarty_tpl->tpl_vars['system']->value['funding_payment_method_array'])) {?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="method" id="method_custom" value="custom" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_custom"><?php echo __($_smarty_tpl->tpl_vars['system']->value['funding_payment_method_custom']);?>
</label>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Transfer To");?>

                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="method_value">
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <div class="col-md-9 offset-md-3">
                                            <button type="submit" class="btn btn-primary"><?php echo __("Make a withdrawal");?>
</button>
                                        </div>
                                    </div>

                                    <!-- success -->
                                    <div class="alert alert-success mb0 x-hidden"></div>
                                    <!-- success -->

                                    <!-- error -->
                                    <div class="alert alert-danger mb0 x-hidden"></div>
                                    <!-- error -->
                                </form>
                            </div>

                            <div class="divider"></div>

                            <div class="heading-small mb20">
                                <?php echo __("Withdrawal History");?>

                            </div>
                            <div class="pl-md-4">
                                <?php if ($_smarty_tpl->tpl_vars['payments']->value) {?>
                                    <div class="table-responsive mt20">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th><?php echo __("ID");?>
</th>
                                                    <th><?php echo __("Amount");?>
</th>
                                                    <th><?php echo __("Method");?>
</th>
                                                    <th><?php echo __("Transfer To");?>
</th>
                                                    <th><?php echo __("Time");?>
</th>
                                                    <th><?php echo __("Status");?>
</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->iteration = 0;
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
$_smarty_tpl->tpl_vars['payment']->iteration++;
$__foreach_payment_7_saved = $_smarty_tpl->tpl_vars['payment'];
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['payment']->iteration;?>
</td>
                                                        <td><?php echo print_money(number_format($_smarty_tpl->tpl_vars['payment']->value['amount'],2));?>
</td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['payment']->value['method'] == "custom") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method_custom'];?>

                                                            <?php } else { ?>
                                                                <?php echo ucfirst($_smarty_tpl->tpl_vars['payment']->value['method']);?>

                                                            <?php }?>
                                                        </td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['method_value'];?>
</td>
                                                        <td>
                                                            <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
</span>
                                                        </td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['payment']->value['status'] == '0') {?>
                                                                <span class="badge badge-pill badge-lg badge-warning"><?php echo __("Pending");?>
</span>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['payment']->value['status'] == '1') {?>
                                                                <span class="badge badge-pill badge-lg badge-success"><?php echo __("Approved");?>
</span>
                                                            <?php } else { ?>
                                                                <span class="badge badge-pill badge-lg badge-danger"><?php echo __("Declined");?>
</span>
                                                            <?php }?>
                                                        </td>
                                                    </tr>
                                                <?php
$_smarty_tpl->tpl_vars['payment'] = $__foreach_payment_7_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php }?>
                            </div>
                        <?php } else { ?>
                            <div class="row justify-content-center">
                                <!-- money balance -->
                                <div class="col-sm-6">
                                    <div class="section-title mb20">
                                        <i class="fas fa-donate mr10"></i><?php echo __("Your Funding Balance");?>

                                    </div>
                                    <div class="stat-panel bg-gradient-primary">
                                        <div class="stat-cell">
                                            <i class="fa fas fa-donate bg-icon"></i>
                                            <div class="h3 mtb10">
                                                <?php echo print_money(number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_funding_balance'],2));?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- money balance -->
                            </div>
                        <?php }?>
                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "coinpayments") {?>
                    <div class="card-header with-icon">
                        <i class="fab fa-bitcoin mr10" style="color: #4caf50;"></i><?php echo __("CoinPayments Transactions");?>

                    </div>
                    <div class="card-body">
                        <div class="heading-small mb20">
                            <?php echo __("Transactions History");?>

                        </div>
                        <div class="pl-md-4">
                            <?php if ($_smarty_tpl->tpl_vars['coinpayments_transactions']->value) {?>
                                <div class="table-responsive mt20">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th><?php echo __("ID");?>
</th>
                                                <th><?php echo __("Product");?>
</th>
                                                <th><?php echo __("Amount");?>
</th>
                                                <th><?php echo __("Created");?>
</th>
                                                <th><?php echo __("Updated");?>
</th>
                                                <th><?php echo __("Status");?>
</th>
                                                <th><?php echo __("Status Message");?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coinpayments_transactions']->value, 'transaction');
$_smarty_tpl->tpl_vars['transaction']->iteration = 0;
$_smarty_tpl->tpl_vars['transaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
$_smarty_tpl->tpl_vars['transaction']->do_else = false;
$_smarty_tpl->tpl_vars['transaction']->iteration++;
$__foreach_transaction_8_saved = $_smarty_tpl->tpl_vars['transaction'];
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->iteration;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value['product'];?>
</td>
                                                    <td><?php echo print_money($_smarty_tpl->tpl_vars['transaction']->value['amount']);?>
</td>
                                                    <td>
                                                        <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['transaction']->value['created_at'];?>
"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['created_at'];?>
</span>
                                                    </td>
                                                    <td>
                                                        <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['transaction']->value['last_update'];?>
"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['last_update'];?>
</span>
                                                    </td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['transaction']->value['status'] == '-1') {?>
                                                            <span class="badge badge-pill badge-lg badge-danger"><?php echo __("Error");?>
</span>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['status'] == '0') {?>
                                                            <span class="badge badge-pill badge-lg badge-info"><?php echo __("Processing");?>
</span>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['status'] == '1') {?>
                                                            <span class="badge badge-pill badge-lg badge-warning"><?php echo __("Pending");?>
</span>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['status'] == '2') {?>
                                                            <span class="badge badge-pill badge-lg badge-success"><?php echo __("Complete");?>
</span>
                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['transaction']->value['status'] == '-1') {?>
                                                            <?php echo __("Error while processing your payment");?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['transaction']->value['status_message'];?>

                                                        <?php }?>
                                                    </td>
                                                </tr>
                                            <?php
$_smarty_tpl->tpl_vars['transaction'] = $__foreach_transaction_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_subTemplateRender('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>
                        </div>
                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "bank") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-university mr10" style="color: #4caf50;"></i><?php echo __("Bank Transfers");?>

                    </div>
                    <div class="card-body">
                        <div class="heading-small mb20">
                            <?php echo __("Transactions History");?>

                        </div>
                        <div class="pl-md-4">
                            <?php if ($_smarty_tpl->tpl_vars['transfers']->value) {?>
                                <div class="table-responsive mt20">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th><?php echo __("ID");?>
</th>
                                                <th><?php echo __("Type");?>
</th>
                                                <th><?php echo __("Time");?>
</th>
                                                <th><?php echo __("Status");?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transfers']->value, 'transfer');
$_smarty_tpl->tpl_vars['transfer']->iteration = 0;
$_smarty_tpl->tpl_vars['transfer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['transfer']->value) {
$_smarty_tpl->tpl_vars['transfer']->do_else = false;
$_smarty_tpl->tpl_vars['transfer']->iteration++;
$__foreach_transfer_9_saved = $_smarty_tpl->tpl_vars['transfer'];
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['transfer']->iteration;?>
</td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['transfer']->value['handle'] == "packages") {?>
                                                            <?php echo __($_smarty_tpl->tpl_vars['transfer']->value['package_name']);?>
 <?php echo __("Package");?>
 = <strong><?php echo print_money($_smarty_tpl->tpl_vars['transfer']->value['package_price']);?>
</strong>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['transfer']->value['handle'] == "wallet") {?>
                                                            <?php echo __("Add Wallet Balance");?>
 = <strong><?php echo print_money($_smarty_tpl->tpl_vars['transfer']->value['price']);?>
</strong>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['transfer']->value['handle'] == "donate") {?>
                                                            <?php echo __("Funding Donation");?>
 = <strong><?php echo print_money($_smarty_tpl->tpl_vars['transfer']->value['price']);?>
</strong>
                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['transfer']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['transfer']->value['time'];?>
</span>
                                                    </td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['transfer']->value['status'] == '0') {?>
                                                            <span class="badge badge-pill badge-lg badge-warning"><?php echo __("Pending");?>
</span>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['transfer']->value['status'] == '1') {?>
                                                            <span class="badge badge-pill badge-lg badge-success"><?php echo __("Approved");?>
</span>
                                                        <?php } else { ?>
                                                            <span class="badge badge-pill badge-lg badge-danger"><?php echo __("Declined");?>
</span>
                                                        <?php }?>
                                                    </td>
                                                </tr>
                                            <?php
$_smarty_tpl->tpl_vars['transfer'] = $__foreach_transfer_9_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_subTemplateRender('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>
                        </div>
                    </div>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "verification") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-check-circle mr10" style="color: #2196f3;"></i><?php echo __("Verification");?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['case']->value == "verified") {?>
                        <div class="card-body">
                            <div class="text-center">
                                <div class="big-icon success">
                                    <i class="fa fa-thumbs-up fa-3x"></i>
                                </div>
                                <h4><?php echo __("Congratulations");?>
</h4>
                                <p class="mt20"><?php echo __("This account is verified");?>
</p>
                            </div>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "request") {?>
                        <form class="js_ajax-forms" data-url="users/verify.php?node=user">
                            <div class="card-body">
                                <div class="form-group form-row">
                                    <label class="col-md-3 form-control-label">
                                        <?php echo __("Verification Documents");?>

                                    </label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="section-title mb20">
                                                    <i class="fas fa-camera-retro mr10"></i><?php echo __("Your Photo");?>

                                                </div>
                                                <div class="x-image full">
                                                    <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                                        <span>×</span>
                                                    </button>
                                                    <div class="x-image-loader">
                                                        <div class="progress x-progress">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <i class="fa fa-camera fa-2x js_x-uploader" data-handle="x-image"></i>
                                                    <input type="hidden" class="js_x-image-input" name="photo" value="">
                                                </div>
                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="section-title mb20">
                                                    <i class="fas fa-passport mr10"></i><?php echo __("Passport or National ID");?>

                                                </div>
                                                <div class="x-image full">
                                                    <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                                        <span>×</span>
                                                    </button>
                                                    <div class="x-image-loader">
                                                        <div class="progress x-progress">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <i class="fa fa-camera fa-2x js_x-uploader" data-handle="x-image"></i>
                                                    <input type="hidden" class="js_x-image-input" name="passport" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <span class="form-text">
                                            <?php echo __("Please attach your photo and your Passport or National ID");?>

                                        </span>
                                    </div>
                                </div>

                                <div class="form-group form-row">
                                    <label class="col-md-3 form-control-label">
                                        <?php echo __("Additional Information");?>

                                    </label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="message"></textarea>
                                        <span class="form-text">
                                            <?php echo __("Please share why your account should be verified");?>

                                        </span>
                                    </div>
                                </div>

                                <!-- success -->
                                <div class="alert alert-success mb0 x-hidden"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 x-hidden"></div>
                                <!-- error -->
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check-circle mr10"></i><?php echo __("Send Verification Request");?>

                                </button>
                            </div>
                        </form>
                    <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "pending") {?>
                        <div class="card-body">
                            <div class="text-center">
                                <div class="big-icon warning">
                                    <i class="fa fa-clock fa-3x"></i>
                                </div>
                                <h4><?php echo __("Pending");?>
</h4>
                                <p class="mt20"><?php echo __("Your verification request is still awaiting admin approval");?>
</p>
                            </div>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "declined") {?>
                        <div class="card-body">
                            <div class="text-center">
                                <div class="big-icon error">
                                    <i class="fa fa-frown fa-3x"></i>
                                </div>
                                <h4><?php echo __("Sorry");?>
</h4>
                                <p class="mt20"><?php echo __("Your verification request has been declined by the admin");?>
</p>
                            </div>
                        </div>
                    <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "apps") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-cubes mr10" style="color: #424242;"></i><?php echo __("Apps");?>

                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary">
                            <div class="icon">
                                <i class="fa fa-cubes fa-2x"></i>
                            </div>
                            <div class="text">
                                <strong><?php echo __("Apps");?>
</strong><br>
                                <?php echo __("These are apps you've used to log into. They can receive information you chose to share with them.");?>

                            </div>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['apps']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apps']->value, 'app', true);
$_smarty_tpl->tpl_vars['app']->iteration = 0;
$_smarty_tpl->tpl_vars['app']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['app']->value) {
$_smarty_tpl->tpl_vars['app']->do_else = false;
$_smarty_tpl->tpl_vars['app']->iteration++;
$_smarty_tpl->tpl_vars['app']->last = $_smarty_tpl->tpl_vars['app']->iteration === $_smarty_tpl->tpl_vars['app']->total;
$__foreach_app_10_saved = $_smarty_tpl->tpl_vars['app'];
?>
                                <div class="form-table-row <?php if ($_smarty_tpl->tpl_vars['app']->last) {?>mb0<?php }?>">
                                    <div class="avatar">
                                        <img class="tbl-image app-icon" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['app']->value['app_icon'];?>
">
                                    </div>
                                    <div>
                                        <div class="form-control-label h6 mb5"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_name'];?>
</div>
                                        <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_description'];?>
</div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-sm btn-danger js_delete-user-app" data-id="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_auth_id'];?>
">
                                            <i class="fas fa-trash mr5"></i><?php echo __("Remove");?>

                                        </button>
                                    </div>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['app'] = $__foreach_app_10_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php }?>
                    </div>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "blocking") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-minus-circle mr10" style="color: #f44336;"></i><?php echo __("Manage Blocking");?>

                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning">
                            <div class="icon">
                                <i class="fa fa-exclamation-triangle fa-2x"></i>
                            </div>
                            <div class="text pt5">
                                <?php echo __("Once you block someone, that person can no longer see things you post on your timeline");?>

                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['blocks']->value) {?>
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"blocked"), 0, true);
?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>

                            <?php if (count($_smarty_tpl->tpl_vars['blocks']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                <!-- see-more -->
                                <div class="alert alert-info see-more js_see-more" data-get="blocks">
                                    <span><?php echo __("See More");?>
</span>
                                    <div class="loader loader_small x-hidden"></div>
                                </div>
                                <!-- see-more -->
                            <?php }?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php }?>
                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "information") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-file-invoice mr10" style="color: #28a745;"></i><?php echo __("Download Your Information");?>

                    </div>
                    <form class="js_ajax-forms" data-url="users/information.php">
                        <div class="card-body">
                            <div class="alert alert-primary">
                                <div class="icon">
                                    <i class="fa fa-file-invoice fa-2x"></i>
                                </div>
                                <div class="text">
                                    <strong><?php echo __("Download Your Information");?>
</strong><br>
                                    <?php echo __("You can download all of it at once, or you can select only the types of information you want");?>

                                </div>
                            </div>
                            <div class="h5 mb20 text-center">
                                <?php echo __("Select which information you would like to download");?>

                            </div>
                            <!-- download options -->
                            <div class="text-center">
                                <!-- Information -->
                                <input class="x-hidden input-label" type="checkbox" name="download_information" id="download_information"/>
                                <label class="button-label" for="download_information">
                                    <div class="icon">
                                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"personal_info",'width'=>"32px",'height'=>"32px"), 0, true);
?>
                                    </div>
                                    <div class="title"><?php echo __("Info");?>
</div>
                                </label>
                                <!-- Information -->
                                <!-- Friends -->
                                <input class="x-hidden input-label" type="checkbox" name="download_friends" id="download_friends"/>
                                <label class="button-label" for="download_friends">
                                    <div class="icon">
                                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'width'=>"32px",'height'=>"32px"), 0, true);
?>
                                    </div>
                                    <div class="title"><?php echo __("Friends");?>
</div>
                                </label>
                                <!-- Friends -->
                                <!-- Followings -->
                                <input class="x-hidden input-label" type="checkbox" name="download_followings" id="download_followings"/>
                                <label class="button-label" for="download_followings">
                                    <div class="icon">
                                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"followings",'width'=>"32px",'height'=>"32px"), 0, true);
?>
                                    </div>
                                    <div class="title"><?php echo __("Followings");?>
</div>
                                </label>
                                <!-- Followings -->
                                <!-- Followers -->
                                <input class="x-hidden input-label" type="checkbox" name="download_followers" id="download_followers"/>
                                <label class="button-label" for="download_followers">
                                    <div class="icon">
                                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"followers",'width'=>"32px",'height'=>"32px"), 0, true);
?>
                                    </div>
                                    <div class="title"><?php echo __("Followers");?>
</div>
                                </label>
                                <!-- Followers -->
                            </div>
                            <div class="text-center">
                                <!-- Pages -->
                                <input class="x-hidden input-label" type="checkbox" name="download_pages" id="download_pages"/>
                                <label class="button-label" for="download_pages">
                                    <div class="icon">
                                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'width'=>"32px",'height'=>"32px"), 0, true);
?>
                                    </div>
                                    <div class="title"><?php echo __("Pages");?>
</div>
                                </label>
                                <!-- Pages -->
                                <!-- Groups -->
                                <input class="x-hidden input-label" type="checkbox" name="download_groups" id="download_groups"/>
                                <label class="button-label" for="download_groups">
                                    <div class="icon">
                                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'width'=>"32px",'height'=>"32px"), 0, true);
?>
                                    </div>
                                    <div class="title"><?php echo __("Groups");?>
</div>
                                </label>
                                <!-- Groups -->
                                <!-- Events -->
                                <input class="x-hidden input-label" type="checkbox" name="download_events" id="download_events"/>
                                <label class="button-label" for="download_events">
                                    <div class="icon">
                                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'width'=>"32px",'height'=>"32px"), 0, true);
?>
                                    </div>
                                    <div class="title"><?php echo __("Events");?>
</div>
                                </label>
                                <!-- Events -->
                                <!-- Posts -->
                                <input class="x-hidden input-label" type="checkbox" name="download_posts" id="download_posts"/>
                                <label class="button-label" for="download_posts">
                                    <div class="icon">
                                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'width'=>"32px",'height'=>"32px"), 0, true);
?>
                                    </div>
                                    <div class="title"><?php echo __("Posts");?>
</div>
                                </label>
                                <!-- Posts -->
                            </div>
                            <!-- download options -->

                            <!-- error -->
                            <div class="alert alert-danger mb0 mt20 x-hidden"></div>
                            <!-- error -->

                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-bolt mr10"></i><?php echo __("Create File");?>
</button>
                        </div>
                    </form>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "delete") {?>
                    <div class="card-header with-icon">
                        <i class="fa fa-trash mr10" style="color: #f44336;"></i><?php echo __("Delete Account");?>

                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning">
                            <div class="icon">
                                <i class="fa fa-exclamation-triangle fa-2x"></i>
                            </div>
                            <div class="text pt5">
                                <?php echo __("Once you delete your account you will no longer can access it again");?>

                            </div>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-md btn-danger js_delete-user">
                                <i class="fa fa-trash mr10"></i><?php echo __("Delete My Account");?>

                            </button>
                        </div>
                    </div>
                
                <?php }?>
                
            </div>
        </div>
        <!-- right panel -->
        
    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
