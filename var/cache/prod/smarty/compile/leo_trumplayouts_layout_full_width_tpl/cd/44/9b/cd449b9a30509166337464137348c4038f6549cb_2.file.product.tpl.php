<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:40:50
  from 'C:\wamp64\www\prestashop\themes\leo_trump\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046d222de9072_12259038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd449b9a30509166337464137348c4038f6549cb' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\leo_trump\\templates\\catalog\\product.tpl',
      1 => 1615251170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-flags.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:sub/product_info/tab.tpl' => 1,
    'file:sub/product_info/accordions.tpl' => 1,
    'file:sub/product_info/default.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_6046d222de9072_12259038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3495122356046d222ce6146_02116283', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5769962096046d222cee7a7_96174969', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3967162396046d222d18208_25491401', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_3495122356046d222ce6146_02116283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_3495122356046d222ce6146_02116283',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_5769962096046d222cee7a7_96174969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_5769962096046d222cee7a7_96174969',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'product_cover_thumbnails'} */
class Block_6157556696046d222d33005_53149182 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_9110712436046d222d29b96_91721153 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6157556696046d222d33005_53149182', 'product_cover_thumbnails', $this->tplIndex);
?>


              <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10154919406046d222d28500_13645000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section class="page-content" id="content">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9110712436046d222d29b96_91721153', 'page_content', $this->tplIndex);
?>

            </section>
          <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_2237923246046d222d3d8b7_00063763 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_20133948286046d222d3c2b4_61045745 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h1 class="h1 product-detail-name" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2237923246046d222d3d8b7_00063763', 'page_title', $this->tplIndex);
?>
</h1>
              <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_3494716966046d222d3ac06_46626152 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20133948286046d222d3c2b4_61045745', 'page_header', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_12676632226046d222d441e2_51321571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_12979559046046d222d47de8_93926995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-description" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
              <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_11445614276046d222d55117_39328180 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
              <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_18848071766046d222d69742_03311288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_18976458306046d222d7d6f8_84731679 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value,'showPackProductsPrice'=>$_smarty_tpl->tpl_vars['product']->value['show_price']), 0, true);
?>
                            <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_565092596046d222d6da35_94137316 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                        <section class="product-pack">
                          <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18976458306046d222d7d6f8_84731679', 'product_miniature', $this->tplIndex);
?>

                          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </section>
                      <?php }?>
                    <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_5746843156046d222d862a1_29213204 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_9996774516046d222d8a7b8_42440463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_5096270496046d222d8f483_83170672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                    <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_9177632646046d222d61007_79895354 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18848071766046d222d69742_03311288', 'product_variants', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_565092596046d222d6da35_94137316', 'product_pack', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5746843156046d222d862a1_29213204', 'product_discounts', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9996774516046d222d8a7b8_42440463', 'product_add_to_cart', $this->tplIndex);
?>

                     
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5096270496046d222d8f483_83170672', 'product_refresh', $this->tplIndex);
?>

                  </form>
                <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_20888500286046d222d96941_15244617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_info'} */
class Block_536509386046d222d9a414_92810681 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'tab') {?>
          <?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'accordion') {?>
          <?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/accordions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>  
      <?php
}
}
/* {/block 'product_info'} */
/* {block 'product_miniature'} */
class Block_19951794226046d222dc4c52_59766047 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <?php if (isset($_smarty_tpl->tpl_vars['productProfileDefault']->value) && $_smarty_tpl->tpl_vars['productProfileDefault']->value) {?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'profile'=>$_smarty_tpl->tpl_vars['productProfileDefault']->value),$_smarty_tpl ) );?>

                      <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?>
                      <?php }?>
                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_20815453466046d222dae987_30932379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
        <section class="product-accessories clearfix">
          <h3 class="h5 products-section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>

          <div class="products" itemscope itemtype="http://schema.org/ItemList"> 
            <div class="owl-row <?php if (isset($_smarty_tpl->tpl_vars['productClassWidget']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productClassWidget']->value, ENT_QUOTES, 'UTF-8');
}?>">
              <div id="category-products2">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                  <div class="item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19951794226046d222dc4c52_59766047', 'product_miniature', $this->tplIndex);
?>

                  </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            </div>
          </div>
        </section>
      <?php }?>
    <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_7110267406046d222dd9ca6_17288048 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_1160224136046d222ddeed9_88557050 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_13661688066046d222de3fd6_78685960 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <!-- Footer content -->
          <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4346707746046d222de29d7_09226288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer class="page-footer">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13661688066046d222de3fd6_78685960', 'page_footer', $this->tplIndex);
?>

        </footer>
      <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3967162396046d222d18208_25491401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3967162396046d222d18208_25491401',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_10154919406046d222d28500_13645000',
  ),
  'page_content' => 
  array (
    0 => 'Block_9110712436046d222d29b96_91721153',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_6157556696046d222d33005_53149182',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_3494716966046d222d3ac06_46626152',
  ),
  'page_header' => 
  array (
    0 => 'Block_20133948286046d222d3c2b4_61045745',
  ),
  'page_title' => 
  array (
    0 => 'Block_2237923246046d222d3d8b7_00063763',
  ),
  'product_prices' => 
  array (
    0 => 'Block_12676632226046d222d441e2_51321571',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_12979559046046d222d47de8_93926995',
  ),
  'product_customization' => 
  array (
    0 => 'Block_11445614276046d222d55117_39328180',
  ),
  'product_buy' => 
  array (
    0 => 'Block_9177632646046d222d61007_79895354',
  ),
  'product_variants' => 
  array (
    0 => 'Block_18848071766046d222d69742_03311288',
  ),
  'product_pack' => 
  array (
    0 => 'Block_565092596046d222d6da35_94137316',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_18976458306046d222d7d6f8_84731679',
    1 => 'Block_19951794226046d222dc4c52_59766047',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_5746843156046d222d862a1_29213204',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_9996774516046d222d8a7b8_42440463',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_5096270496046d222d8f483_83170672',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_20888500286046d222d96941_15244617',
  ),
  'product_info' => 
  array (
    0 => 'Block_536509386046d222d9a414_92810681',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_20815453466046d222dae987_30932379',
  ),
  'product_footer' => 
  array (
    0 => 'Block_7110267406046d222dd9ca6_17288048',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_1160224136046d222ddeed9_88557050',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4346707746046d222de29d7_09226288',
  ),
  'page_footer' => 
  array (
    0 => 'Block_13661688066046d222de3fd6_78685960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  

  <?php if (isset($_smarty_tpl->tpl_vars['product']->value['productLayout']) && $_smarty_tpl->tpl_vars['product']->value['productLayout'] != '') {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'typeProduct'=>'detail'),$_smarty_tpl ) );?>

  <?php } else { ?>

    <section id="main" class="product-detail" itemscope itemtype="https://schema.org/Product">
      <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

      <div class="row">
        <div class="col-lg-6 col-md-12 left-column">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10154919406046d222d28500_13645000', 'page_content_container', $this->tplIndex);
?>

          </div>
          <div class="col-lg-6 col-md-12">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3494716966046d222d3ac06_46626152', 'page_header_container', $this->tplIndex);
?>


            
            
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12676632226046d222d441e2_51321571', 'product_prices', $this->tplIndex);
?>


            <div class="product-information">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12979559046046d222d47de8_93926995', 'product_description_short', $this->tplIndex);
?>


            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11445614276046d222d55117_39328180', 'product_customization', $this->tplIndex);
?>

            <?php }?>
			     <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductReviewExtra','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            <div class="product-actions">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9177632646046d222d61007_79895354', 'product_buy', $this->tplIndex);
?>


              </div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20888500286046d222d96941_15244617', 'hook_display_reassurance', $this->tplIndex);
?>


          </div>
        </div>
      </div>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_536509386046d222d9a414_92810681', 'product_info', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20815453466046d222dae987_30932379', 'product_accessories', $this->tplIndex);
?>


    <?php echo '<script'; ?>
 type="text/javascript">
      products_list_functions.push(
        function(){
          $('#category-products2').owlCarousel({
            <?php if (isset($_smarty_tpl->tpl_vars['IS_RTL']->value) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?>
              direction:'rtl',
            <?php } else { ?>
              direction:'ltr',
            <?php }?>
            items : 4,
            itemsCustom : false,
            itemsDesktop : [1200, 4],
            itemsDesktopSmall : [992, 3],
            itemsTablet : [768, 2],
            itemsTabletSmall : false,
            itemsMobile : [480, 1],
            singleItem : false,         // true : show only 1 item
            itemsScaleUp : false,
            slideSpeed : 200,  //  change speed when drag and drop a item
            paginationSpeed :800, // change speed when go next page

            autoPlay : false,   // time to show each item
            stopOnHover : false,
            navigation : true,
            navigationText : ["&lsaquo;", "&rsaquo;"],

            scrollPerPage :true,
            responsive :true,
            
            pagination : false,
            paginationNumbers : false,
            
            addClassActive : true,
            
            mouseDrag : true,
            touchDrag : true,

          });
        }
      ); 
    <?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7110267406046d222dd9ca6_17288048', 'product_footer', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1160224136046d222ddeed9_88557050', 'product_images_modal', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4346707746046d222de29d7_09226288', 'page_footer_container', $this->tplIndex);
?>


    </section>
  <?php }
}
}
/* {/block 'content'} */
}
