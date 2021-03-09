<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:14:00
  from 'C:\wamp64\www\prestashop\themes\leo_trump\modules\leofeature\views\templates\hook\leo_compare_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046cbd8562c08_21111610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87884ae895c62c0d37c156870cafed8361144079' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\leo_trump\\modules\\leofeature\\views\\templates\\hook\\leo_compare_button.tpl',
      1 => 1615251170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6046cbd8562c08_21111610 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="compare">
	<a class="leo-compare-button btn-product btn<?php if ($_smarty_tpl->tpl_vars['added']->value) {?> added<?php }?>" href="#" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_compare_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['added']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?>">
	<span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
	<span class="leo-compare-bt-content">
		<i class="fa fa-retweet" aria-hidden="true"></i>
	</span>
</a>
</div>


<?php }
}
