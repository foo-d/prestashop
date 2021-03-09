<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:13:58
  from 'C:\wamp64\www\prestashop\modules\appagebuilder\views\templates\hook\ApColumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046cbd6db6ef9_18537584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb7fd24016d919c57443ab33393f354772d33ae0' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\appagebuilder\\views\\templates\\hook\\ApColumn.tpl',
      1 => 1615251164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6046cbd6db6ef9_18537584 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['id']) && $_smarty_tpl->tpl_vars['formAtts']->value['id']) {?> id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    class="<?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['animation']) && $_smarty_tpl->tpl_vars['formAtts']->value['animation'] != call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( 'none','html','UTF-8' )) ? 'has-animation' : '', ENT_QUOTES, 'UTF-8');?>
"
	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['animation']) && $_smarty_tpl->tpl_vars['formAtts']->value['animation'] != 'none') {?> data-animation="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay']) && $_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'] != '') {?> data-animation-delay="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['animation_duration']) && $_smarty_tpl->tpl_vars['formAtts']->value['animation_duration'] != '') {?> data-animation-duration="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation_duration'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['animation_iteration_count']) && $_smarty_tpl->tpl_vars['formAtts']->value['animation_iteration_count'] != '') {?> data-animation-iteration-count="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation_iteration_count'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['animation_infinite']) && $_smarty_tpl->tpl_vars['formAtts']->value['animation_infinite'] != '') {?> data-animation-infinite="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation_infinite'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
	<?php }?>
    >
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
    <h4 class="title_block title-ap-column"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>
</h4>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget sub-title-ap-column"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['content_html'])) {?>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['content_html'],'html','UTF-8' ));?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

    <?php }?>
</div><?php }
}
