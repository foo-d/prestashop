<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-21 11:24:04
  from 'C:\wamp64\www\prestashop\modules\mailchimppro\views\templates\admin\wizard\step-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60571ec4b26489_19852341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee268041c5f7c5ad6985a67980846231e03e6e81' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\mailchimppro\\views\\templates\\admin\\wizard\\step-1.tpl',
      1 => 1616322178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60571ec4b26489_19852341 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
    <label for="api-key" class="hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'API key','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</label>
    <p id="logged-in-as-container" <?php if (empty($_smarty_tpl->tpl_vars['apiKey']->value) && empty($_smarty_tpl->tpl_vars['mcEmail']->value)) {?>class="hidden"<?php }?>>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logged in as:','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
 <b id="logged-in-as"><?php echo $_smarty_tpl->tpl_vars['mcEmail']->value;?>
</b>
    </p>
    <input type="hidden" class="form-control" name="api-key" id="api-key"
           placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'API key','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
" required="" value="<?php echo $_smarty_tpl->tpl_vars['apiKey']->value;?>
">
    <a class="btn btn-default" id="oauth2-start">
        <?php if (empty($_smarty_tpl->tpl_vars['apiKey']->value) && empty($_smarty_tpl->tpl_vars['mcEmail']->value)) {?>
            Log in to Mailchimp
        <?php } else { ?>
            Log in as somebody else
        <?php }?>
    </a>
</div><?php }
}
