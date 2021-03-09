<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:42:36
  from 'C:\wamp64\www\prestashop\modules\leofeature\views\templates\hook\leo_wishlist_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046d28c766947_35226953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0043aba1559a9f6f1dd6ef73bf03ac96bdf053ff' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\leofeature\\views\\templates\\hook\\leo_wishlist_link.tpl',
      1 => 1615251167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6046d28c766947_35226953 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="mywishlist-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_link']->value, ENT_QUOTES, 'UTF-8');?>
">
	<span class="link-item">
		<i class="material-icons">&#xE87D;</i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Wishlist','mod'=>'leofeature'),$_smarty_tpl ) );?>

	</span>
</a>

<?php }
}
