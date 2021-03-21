<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-21 11:24:04
  from 'C:\wamp64\www\prestashop\modules\mailchimppro\views\templates\admin\wizard\step-6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60571ec4d303a5_80382628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd602dbe9d35b0f7acefab3110293ba5fd144d74' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\mailchimppro\\views\\templates\\admin\\wizard\\step-6.tpl',
      1 => 1616322178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60571ec4d303a5_80382628 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="text-center">
    <div class="alert alert-info alert-mc" id="customer-sync-in-progress">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Syncing customers, please wait','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

    </div>
    <div class="alert alert-success alert-mc hidden" id="customer-sync-completed">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The batch operation of syncing the customers has been sent to the Mailchimp servers.','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

    </div>
    <div class="alert alert-error hidden" id="customer-sync-error">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error during customer sync','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

    </div>
    <div class="progress hidden">
        <div class="progress-bar" style="width:0"></div>
    </div>
</div><?php }
}
