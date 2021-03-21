<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-21 11:24:04
  from 'C:\wamp64\www\prestashop\modules\mailchimppro\views\templates\admin\wizard\step-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60571ec4ba01d0_55578117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21c3f8517f710e05113e669b440f303ce607f125' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\mailchimppro\\views\\templates\\admin\\wizard\\step-2.tpl',
      1 => 1616322178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60571ec4ba01d0_55578117 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
    <div class="alert alert-info alert-mc" id="loading-lists-in-progress">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading lists, please wait','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

    </div>
    <div id="input-container" class="hidden">
        <label for="list-select"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select list','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</label>
        <select class="form-control" id="list-select">
        </select>
    </div>
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div><?php }
}
