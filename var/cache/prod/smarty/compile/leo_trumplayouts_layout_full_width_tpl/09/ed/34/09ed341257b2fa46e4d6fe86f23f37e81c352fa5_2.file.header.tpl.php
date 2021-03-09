<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:43:40
  from 'C:\wamp64\www\prestashop\themes\leo_trump\templates\checkout\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046d2cc094297_19370832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09ed341257b2fa46e4d6fe86f23f37e81c352fa5' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\leo_trump\\templates\\checkout\\_partials\\header.tpl',
      1 => 1615251171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6046d2cc094297_19370832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5014413666046d2cc05a3f2_52055371', 'header');
?>

<?php }
/* {block 'header_nav'} */
class Block_1487803736046d2cc05bfc0_64416106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="header-nav">
      <div class="topnav">
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'] == 0) {?>
        <div class="container">
        <?php }?>
          <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>
</div>
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'] == 0) {?>
        </div>
        <?php }?>
      </div>
      <div class="bottomnav">
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'] == 0) {?>
          <div class="container">
        <?php }?>
          <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>
</div>
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'] == 0) {?>
          </div>
        <?php }?>
      </div>
    </nav>
  <?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_12001670326046d2cc080242_14390924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-top">
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'] == 0) {?>
        <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>
</div>
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'] == 0) {?>
        </div>
      <?php }?>
    </div>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'header_top'} */
/* {block 'header'} */
class Block_5014413666046d2cc05a3f2_52055371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_5014413666046d2cc05a3f2_52055371',
  ),
  'header_nav' => 
  array (
    0 => 'Block_1487803736046d2cc05bfc0_64416106',
  ),
  'header_top' => 
  array (
    0 => 'Block_12001670326046d2cc080242_14390924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1487803736046d2cc05bfc0_64416106', 'header_nav', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12001670326046d2cc080242_14390924', 'header_top', $this->tplIndex);
?>

<?php
}
}
/* {/block 'header'} */
}
