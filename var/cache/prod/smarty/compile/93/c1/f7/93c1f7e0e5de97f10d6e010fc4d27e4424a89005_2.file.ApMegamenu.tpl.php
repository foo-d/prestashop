<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:15:42
  from 'C:\wamp64\www\prestashop\modules\appagebuilder\views\templates\hook\ApMegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046cc3e152eb8_83307372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93c1f7e0e5de97f10d6e010fc4d27e4424a89005' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\appagebuilder\\views\\templates\\hook\\ApMegamenu.tpl',
      1 => 1615251164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6046cc3e152eb8_83307372 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
<div id="memgamenu-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="ApMegamenu">
	<?php if (isset($_smarty_tpl->tpl_vars['content_megamenu']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_megamenu']->value;?>
	<?php }?>
</div>
<?php }
}
}
