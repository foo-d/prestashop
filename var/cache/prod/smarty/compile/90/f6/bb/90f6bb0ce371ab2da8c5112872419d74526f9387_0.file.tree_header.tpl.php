<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:15:17
  from 'C:\wamp64\www\prestashop\admin991ajmvut\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046cc25d8fb94_97069451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90f6bb0ce371ab2da8c5112872419d74526f9387' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin991ajmvut\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1613657793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6046cc25d8fb94_97069451 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
