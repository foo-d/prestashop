<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:18:01
  from 'C:\wamp64\www\prestashop\themes\leo_trump\templates\catalog\_partials\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046ccc9c695a5_40263281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8348f72fd2e7de133201d065893ddf8f488f584' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\leo_trump\\templates\\catalog\\_partials\\products.tpl',
      1 => 1615251170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/leo_col_products.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_6046ccc9c695a5_40263281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list">
  <div class="products">  
    <?php $_smarty_tpl->_assignInScope('leo_page', 'category');?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/leo_col_products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['listing']->value['products']), 0, false);
?>   
  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1408963176046ccc9c600a6_83610979', 'pagination');
?>


  <div class="hidden-xs-up text-xs-right up">
    <a href="#header" class="btn btn-secondary">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to top','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      <i class="material-icons">&#xE316;</i>
    </a>
  </div>
</div>
<?php }
/* {block 'pagination'} */
class Block_1408963176046ccc9c600a6_83610979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_1408963176046ccc9c600a6_83610979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
  <?php
}
}
/* {/block 'pagination'} */
}