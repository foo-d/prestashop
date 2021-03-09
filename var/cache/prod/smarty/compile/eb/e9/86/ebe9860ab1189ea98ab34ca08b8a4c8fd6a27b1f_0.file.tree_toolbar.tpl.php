<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:15:17
  from 'C:\wamp64\www\prestashop\admin991ajmvut\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046cc25c91a33_76936590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebe9860ab1189ea98ab34ca08b8a4c8fd6a27b1f' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin991ajmvut\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1613657793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6046cc25c91a33_76936590 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
