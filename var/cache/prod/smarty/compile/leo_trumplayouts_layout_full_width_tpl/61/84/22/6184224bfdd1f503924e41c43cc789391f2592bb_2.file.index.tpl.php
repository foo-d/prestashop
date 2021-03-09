<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:14:00
  from 'C:\wamp64\www\prestashop\themes\leo_trump\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046cbd89102d8_80070721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6184224bfdd1f503924e41c43cc789391f2592bb' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\leo_trump\\templates\\index.tpl',
      1 => 1615251171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6046cbd89102d8_80070721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20735034996046cbd8905c91_87760079', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_9945716616046cbd89075b5_16085846 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_8105318916046cbd890aea6_16935744 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_13282195276046cbd8909847_26021239 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8105318916046cbd890aea6_16935744', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20735034996046cbd8905c91_87760079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20735034996046cbd8905c91_87760079',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9945716616046cbd89075b5_16085846',
  ),
  'page_content' => 
  array (
    0 => 'Block_13282195276046cbd8909847_26021239',
  ),
  'hook_home' => 
  array (
    0 => 'Block_8105318916046cbd890aea6_16935744',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9945716616046cbd89075b5_16085846', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13282195276046cbd8909847_26021239', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
