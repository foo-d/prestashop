<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:15:04
  from 'C:\wamp64\www\prestashop\modules\welcome\views\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046cc18d7c159_29470615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dbcd463c6a254d16da5cded6c7900565a051a61' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\welcome\\views\\navbar.tpl',
      1 => 1607008276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6046cc18d7c159_29470615 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding-navbar bootstrap">
  <div class="row text">
    <div class="col-md-8">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</a>
  </div>
</div>
<?php }
}
