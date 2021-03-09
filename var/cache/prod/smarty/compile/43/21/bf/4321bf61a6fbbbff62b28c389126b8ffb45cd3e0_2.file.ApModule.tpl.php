<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:14:00
  from 'C:\wamp64\www\prestashop\modules\appagebuilder\views\templates\hook\ApModule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046cbd87bfc48_18082913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4321bf61a6fbbbff62b28c389126b8ffb45cd3e0' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\appagebuilder\\views\\templates\\hook\\ApModule.tpl',
      1 => 1615251164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6046cbd87bfc48_18082913 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';
echo $_smarty_tpl->tpl_vars['apContent']->value;
echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';
}
}
