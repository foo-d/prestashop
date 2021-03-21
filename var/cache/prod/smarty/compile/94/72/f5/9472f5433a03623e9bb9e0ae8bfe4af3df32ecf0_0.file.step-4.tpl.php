<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-21 11:24:04
  from 'C:\wamp64\www\prestashop\modules\mailchimppro\views\templates\admin\wizard\step-4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60571ec4c80fb9_63071436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9472f5433a03623e9bb9e0ae8bfe4af3df32ecf0' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\mailchimppro\\views\\templates\\admin\\wizard\\step-4.tpl',
      1 => 1616322178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60571ec4c80fb9_63071436 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="text-center">
    <div class="alert alert-info alert-mc" id="shop-sync-in-progress">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Syncing shops, please wait','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

    </div>
    <div class="alert alert-success alert-mc hidden" id="shop-sync-completed">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Syncing shops completed','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

    </div>

    <div class="alert alert-error hidden" id="shop-sync-error">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error during shop sync error','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

    </div>
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div><?php }
}
