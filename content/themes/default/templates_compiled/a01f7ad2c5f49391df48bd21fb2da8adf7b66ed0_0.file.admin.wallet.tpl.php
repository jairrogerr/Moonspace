<?php
/* Smarty version 3.1.40, created on 2025-03-22 16:12:32
  from '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/admin.wallet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67dee17064bd19_39924337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a01f7ad2c5f49391df48bd21fb2da8adf7b66ed0' => 
    array (
      0 => '/home/vol5_3/infinityfree.com/if0_35869757/htdocs/content/themes/default/templates/admin.wallet.tpl',
      1 => 1706366155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 3,
  ),
),false)) {
function content_67dee17064bd19_39924337 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header with-icon">
        <i class="fa fa-wallet mr10"></i><?php echo __("Wallet");?>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

        <form class="js_ajax-forms" data-url="admin/settings.php?edit=wallet">
            <div class="card-body">
                <div class="alert alert-warning">
                    <div class="icon">
                        <i class="fa fa-exclamation-triangle fa-2x"></i>
                    </div>
                    <div class="text pt5">
                        <?php echo __("Make sure you have configured");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/settings/payments"><?php echo __("Payments Settings");?>
</a>
                    </div>
                </div>
                
                <div class="form-table-row">
                    <div class="avatar">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'width'=>"40px",'height'=>"40px"), 0, false);
?>
                    </div>
                    <div>
                        <div class="form-control-label h6"><?php echo __("Wallet Enabled");?>
</div>
                        <div class="form-text d-none d-sm-block">
                            <?php echo __("Turn the wallet On and Off");?>

                        </div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="wallet_enabled">
                            <input type="checkbox" name="wallet_enabled" id="wallet_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-table-row">
                    <div class="avatar">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet_transfer",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                    </div>
                    <div>
                        <div class="form-control-label h6"><?php echo __("Transfer Money Enabled");?>
</div>
                        <div class="form-text d-none d-sm-block">
                            <?php echo __("Turn the transfer money between users On and Off");?>

                        </div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="wallet_transfer_enabled">
                            <input type="checkbox" name="wallet_transfer_enabled" id="wallet_transfer_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_transfer_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider dashed"></div>

                <div class="form-table-row">
                    <div class="avatar">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"withdrawal",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                    </div>
                    <div>
                        <div class="form-control-label h6"><?php echo __("Users Can Withdraw Money From Wallet");?>
</div>
                        <div class="form-text d-none d-sm-block">
                            <?php echo __("If enabled users will be able to withdraw money from their wallets");?>

                        </div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="wallet_withdrawal_enabled">
                            <input type="checkbox" name="wallet_withdrawal_enabled" id="wallet_withdrawal_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_withdrawal_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Payment Method");?>

                    </label>
                    <div class="col-md-9">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" name="method_paypal" id="method_paypal" <?php if (in_array("paypal",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>checked<?php }?>>
                            <label class="custom-control-label" for="method_paypal"><?php echo __("PayPal");?>
</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" name="method_skrill" id="method_skrill" <?php if (in_array("skrill",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>checked<?php }?>>
                            <label class="custom-control-label" for="method_skrill"><?php echo __("Skrill");?>
</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" name="method_bank" id="method_bank"<?php if (in_array("bank",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>checked<?php }?>>
                            <label class="custom-control-label" for="method_bank"><?php echo __("Bank Transfer");?>
</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline" id="js_custome-withdrawal">
                            <input type="checkbox" class="custom-control-input" name="method_custom" id="method_custom" <?php if (in_array("custom",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>checked<?php }?>>
                            <label class="custom-control-label" for="method_custom"><?php echo __("Custom Method");?>
</label>
                        </div>
                        <span class="form-text">
                            <?php echo __("Users can send withdrawal requests via any of these methods");?>

                        </span>
                    </div>
                </div>

                <div id="js_custome-withdrawal-name" <?php if (!in_array("custom",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>class="x-hidden"<?php }?>>
                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Custom Method Name");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="wallet_payment_method_custom" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_custom'];?>
">
                            <span class="form-text">
                                <?php echo __("Set the name of your custom withdrawal payment method");?>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Minimum Withdrawal Request");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="wallet_min_withdrawal" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['wallet_min_withdrawal'];?>
">
                        <span class="form-text">
                            <?php echo __("The minimum amount of money so user can send a withdrawal request");?>

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
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>
    
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>

        <div class="card-body">
            <div class="alert alert-primary">
                <div class="icon">
                    <i class="fa fa-money-check-alt fa-2x"></i>
                </div>
                <div class="text">
                    <strong><?php echo __("Payment Requests");?>
</strong><br>
                    <?php echo __("You will need to make the payments from your Paypal, Skrill, Bank Account... etc");?>
.<br>
                    <?php echo __("After making the payment you can mark the payment request as paid");?>
.
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("User");?>
</th>
                            <th><?php echo __("Amount");?>
</th>
                            <th><?php echo __("Method");?>
</th>
                            <th><?php echo __("Transfer To");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
</td>
                                <td>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['row']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['row']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['user_lastname'];
}?>
                                    </a>
                                </td>
                                <td><?php echo print_money(number_format($_smarty_tpl->tpl_vars['row']->value['amount'],2));?>
</td>
                                <td>
                                    <span class="badge badge-pill badge-lg badge-<?php echo $_smarty_tpl->tpl_vars['row']->value['method_color'];?>
">
                                        <?php echo ucfirst($_smarty_tpl->tpl_vars['row']->value['method']);?>

                                    </span>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['method_value'];?>
</td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Mark as Paid");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_admin-withdraw" data-type="wallet" data-handle="approve" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                                            <i class="fa fa-check"></i>
                                    </button>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Decline");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-withdraw" data-type="wallet" data-handle="decline" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>

    <?php }?>

</div><?php }
}
