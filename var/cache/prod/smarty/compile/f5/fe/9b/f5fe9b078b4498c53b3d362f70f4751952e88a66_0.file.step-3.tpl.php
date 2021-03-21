<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-21 11:24:04
  from 'C:\wamp64\www\prestashop\modules\mailchimppro\views\templates\admin\wizard\step-3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60571ec4c01af6_35988874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5fe9b078b4498c53b3d362f70f4751952e88a66' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\mailchimppro\\views\\templates\\admin\\wizard\\step-3.tpl',
      1 => 1616322178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60571ec4c01af6_35988874 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-info alert-mc" id="loading-states-in-progress">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading statuses, please wait','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

</div>
<div id="status-inputs-container" class="hidden">
    <div class="form-group">
        <label class="control-label col-lg-3" for="module-mailchimpproconfig-statuses-for-pending">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status for pending','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

        </label>

        <div class="col-lg-9">
            <select name="module-mailchimpproconfig-statuses-for-pending[]"
                    id="module-mailchimpproconfig-statuses-for-pending" multiple="multiple">
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="form-group">
        <label class="control-label col-lg-3" for="module-mailchimpproconfig-statuses-for-refunded">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status for refunded','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

        </label>
        <div class="col-lg-9">
            <select name="module-mailchimpproconfig-statuses-for-refunded[]"
                    id="module-mailchimpproconfig-statuses-for-refunded" multiple="multiple">
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="form-group">
        <label class="control-label col-lg-3" for="module-mailchimpproconfig-statuses-for-cancelled">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status for cancelled','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

        </label>
        <div class="col-lg-9">
            <select name="module-mailchimpproconfig-statuses-for-cancelled[]"
                    id="module-mailchimpproconfig-statuses-for-cancelled" multiple="multiple">
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="form-group">
        <label class="control-label col-lg-3" for="module-mailchimpproconfig-statuses-for-shipped">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status for shipped','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

        </label>
        <div class="col-lg-9">
            <select name="module-mailchimpproconfig-statuses-for-shipped[]"
                    id="module-mailchimpproconfig-statuses-for-shipped" multiple="multiple">
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="form-group">
        <label class="control-label col-lg-3" for="module-mailchimpproconfig-statuses-for-paid">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status for paid','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

        </label>
        <div class="col-lg-9">
            <select name="module-mailchimpproconfig-statuses-for-paid[]"
                    id="module-mailchimpproconfig-statuses-for-paid" multiple="multiple">
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
</div>
<div class="spinner">
    <div class="double-bounce1"></div>
    <div class="double-bounce2"></div>
</div><?php }
}
