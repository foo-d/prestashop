<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:14:00
  from 'C:\wamp64\www\prestashop\themes\leo_trump\modules\appagebuilder\views\templates\hook\image-gallery\ApImageGallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046cbd860a7a2_14309705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb2c6c7aadea5530c5684d3a9e3ce0631dc3ab48' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\leo_trump\\modules\\appagebuilder\\views\\templates\\hook\\image-gallery\\ApImageGallery.tpl',
      1 => 1615251170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6046cbd860a7a2_14309705 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApImageGallery -->
<div class="widget ap-image-gallery">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
    <?php if (isset($_smarty_tpl->tpl_vars['images']->value)) {?>
    <div class="widget-images block">
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
        <h4 class="title_block">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

        </h4>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
            <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
        <?php }?>
        <div class="block_content clearfix">
                <div class="images-list clearfix">    
                <div class="row no-margin">
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'images', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                    <div class="image-item <?php if ($_smarty_tpl->tpl_vars['columns']->value == 5) {?> col-md-2-4 <?php } else { ?> col-md-<?php echo htmlspecialchars(12/intval($_smarty_tpl->tpl_vars['columns']->value), ENT_QUOTES, 'UTF-8');
}?> col-sm-4 col-xs-4 col-sp-6 no-padding">
                        <a class="fancybox" data-fancybox-group="apimagegallery<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href= "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            <img class="replace-2x img-fluid" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt=""/>
                    	</a>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
    <?php echo '<script'; ?>
 type="text/javascript">
        ap_list_functions.push(function(){
            $(".fancybox").fancybox({
                openEffect : 'none',
                closeEffect : 'none'
            });
        });
    <?php echo '</script'; ?>
>
    <?php }?> 
</div><?php }
}
