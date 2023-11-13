<?php
/* Smarty version 4.3.1, created on 2023-11-13 11:18:34
  from '/home/lea/webapps/lea-prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6551f7fa8c1413_78999038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd846f625539d727726bc182f47841b8494f8e4cd' => 
    array (
      0 => '/home/lea/webapps/lea-prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1699868195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551f7fa8c1413_78999038 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
