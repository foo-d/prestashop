<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-21 11:23:40
  from 'C:\wamp64\www\prestashop\modules\mailchimppro\views\templates\admin\config\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60571eac825e50_94578839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01a2e1df95614be9e9c17335d07c4122ee5d4d9a' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\mailchimppro\\views\\templates\\admin\\config\\navbar.tpl',
      1 => 1616322178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60571eac825e50_94578839 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-sm-6 hidden-xs">
        <img class="img-responsive" src="../modules/mailchimppro/views/img/logo-horizontal.png" height="326" width="1200" style="max-height: 32px; width: auto">
    </div>
    <div class="col-sm-6">
        <div class="btn-group pull-right" role="group" style="height:100%; vertical-align:center;line-height : 100%;">
            <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProWizard'),'htmlall','UTF-8' ));?>
">
                <i class="icon icon-floppy-o" aria-hidden="true"></i>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Setup wizard','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

            </a>
            <a class="btn btn-default hidden" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProSync'),'htmlall','UTF-8' ));?>
">
                <i class="icon icon-retweet" aria-hidden="true"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sync','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

            </a>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary btn-mc dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <i class="icon icon-folder-open-o" aria-hidden="true"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mailchimp Objects','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProBatches'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Batches','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProCarts'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carts','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProCustomers'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProLists'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lists','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProOrders'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProProducts'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProStores'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stores','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>

                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProSites'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sites','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProAutomations'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Automations','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProPromoRules'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Promo rules','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<hr><?php }
}
