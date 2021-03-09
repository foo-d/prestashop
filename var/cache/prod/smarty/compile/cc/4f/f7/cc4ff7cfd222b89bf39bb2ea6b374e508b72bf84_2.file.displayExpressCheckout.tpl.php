<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:43:35
  from 'C:\wamp64\www\prestashop\modules\ps_checkout\views\templates\hook\displayExpressCheckout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046d2c77fed57_03998136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc4ff7cfd222b89bf39bb2ea6b374e508b72bf84' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_checkout\\views\\templates\\hook\\displayExpressCheckout.tpl',
      1 => 1614776563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6046d2c77fed57_03998136 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="js-ps_checkout-express-button-container">
</div>

<?php if (isset($_smarty_tpl->tpl_vars['cart']->value) && $_smarty_tpl->tpl_vars['payIn4XisOrderPageEnabled']->value == true) {?>
  <hr />
  <div
    data-pp-message
    data-pp-placement="cart"
    data-pp-style-layout="text"
    data-pp-style-logo-type="inline"
    data-pp-style-text-color="black"
    data-pp-amount="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['amount'], ENT_QUOTES, 'UTF-8');?>
"></div>
  <?php echo '<script'; ?>
>
    window.ps_checkoutPayPalSdkInstance
      && window.ps_checkoutPayPalSdkInstance.Messages
      && window.ps_checkoutPayPalSdkInstance.Messages().render('[data-pp-message]');
  <?php echo '</script'; ?>
>
<?php }
}
}
