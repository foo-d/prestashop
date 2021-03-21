<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-21 11:24:04
  from 'C:\wamp64\www\prestashop\modules\mailchimppro\views\templates\admin\wizard\step-5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60571ec4cdac02_04452468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab15e78af52ff65ea4d0c2d32112617aa2f5047a' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\mailchimppro\\views\\templates\\admin\\wizard\\step-5.tpl',
      1 => 1616322178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60571ec4cdac02_04452468 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="text-center">
    <div class="alert alert-info alert-mc" id="product-sync-in-progress">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Syncing products, please wait','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

    </div>
    <div class="alert alert-success alert-mc hidden" id="product-sync-completed">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The batch operation of syncing the products has been sent to the Mailchimp servers.','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

    </div>
    <div class="alert alert-error hidden" id="product-sync-error">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error during product sync error','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

    </div>
    <div class="progress hidden">
        <div class="progress-bar" style="width:0"></div>
    </div>
</div><?php }
}
