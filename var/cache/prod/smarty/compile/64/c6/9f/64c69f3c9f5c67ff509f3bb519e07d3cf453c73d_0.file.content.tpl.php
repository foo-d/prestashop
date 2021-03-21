<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-21 11:23:43
  from 'C:\wamp64\www\prestashop\admin991ajmvut\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60571eaf92a702_87492020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64c69f3c9f5c67ff509f3bb519e07d3cf453c73d' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin991ajmvut\\themes\\default\\template\\content.tpl',
      1 => 1613657793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60571eaf92a702_87492020 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
