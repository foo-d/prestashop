<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-21 11:24:04
  from 'C:\wamp64\www\prestashop\modules\mailchimppro\views\templates\admin\wizard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60571ec4a48c71_55660837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12daa421e05212895338107c5feb6e3c80d5d436' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\mailchimppro\\views\\templates\\admin\\wizard.tpl',
      1 => 1616322178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./wizard/step-1.tpl' => 1,
    'file:./wizard/step-2.tpl' => 1,
    'file:./wizard/step-3.tpl' => 1,
    'file:./wizard/step-4.tpl' => 1,
    'file:./wizard/step-5.tpl' => 1,
    'file:./wizard/step-6.tpl' => 1,
    'file:./wizard/step-7.tpl' => 1,
    'file:./wizard/step-8.tpl' => 1,
  ),
),false)) {
function content_60571ec4a48c71_55660837 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="setup-wizard">
    <ul>
        <li>
            <a href="#step-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log-in to Mailchimp','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</a>
        </li>
        <li>
            <a href="#step-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select list','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</a>
        </li>
        <li>
            <a href="#step-3">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order status mapping','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

            </a>
        </li>
        <li>
            <a href="#step-4">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop sync','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

            </a>
        </li>
        <li>
            <a href="#step-5">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product sync','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

            </a>
        </li>
        <li>
            <a href="#step-6">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer sync','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

            </a>
        </li>
        <li>
            <a href="#step-7">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'promo-code sync','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

            </a>
        </li>
        <li>
            <a href="#step-8">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order sync','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

            </a>
        </li>
    </ul>

    <div>
        <div id="step-1">
            <?php $_smarty_tpl->_subTemplateRender("file:./wizard/step-1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div id="step-2">
            <?php $_smarty_tpl->_subTemplateRender("file:./wizard/step-2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div id="step-3">
            <?php $_smarty_tpl->_subTemplateRender("file:./wizard/step-3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div id="step-4" class="text-center">
            <?php $_smarty_tpl->_subTemplateRender("file:./wizard/step-4.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div id="step-5" class="text-center">
            <?php $_smarty_tpl->_subTemplateRender("file:./wizard/step-5.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div id="step-6" class="text-center">
            <?php $_smarty_tpl->_subTemplateRender("file:./wizard/step-6.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div id="step-7" class="text-center">
            <?php $_smarty_tpl->_subTemplateRender("file:./wizard/step-7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div id="step-8" class="text-center">
            <?php $_smarty_tpl->_subTemplateRender("file:./wizard/step-8.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
</div><?php }
}
