<?php
/* Smarty version 4.3.1, created on 2023-11-13 10:55:36
  from '/home/lea/webapps/lea-prestashop/admin554guqcuuo7pwagyaas/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6551f298272880_93676198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e937f7162c1f34fa7efa721f603b7b6d20bf1ad8' => 
    array (
      0 => '/home/lea/webapps/lea-prestashop/admin554guqcuuo7pwagyaas/themes/default/template/content.tpl',
      1 => 1699868195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551f298272880_93676198 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
