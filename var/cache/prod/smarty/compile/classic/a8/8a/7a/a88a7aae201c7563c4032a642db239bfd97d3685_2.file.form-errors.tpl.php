<?php
/* Smarty version 4.3.1, created on 2023-11-13 10:52:04
  from '/home/lea/webapps/lea-prestashop/themes/classic/templates/_partials/form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6551f1c43a5f69_38362513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a88a7aae201c7563c4032a642db239bfd97d3685' => 
    array (
      0 => '/home/lea/webapps/lea-prestashop/themes/classic/templates/_partials/form-errors.tpl',
      1 => 1699868195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551f1c43a5f69_38362513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/lea/webapps/lea-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (smarty_modifier_count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_877052106551f1c43a26a6_29898532', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_877052106551f1c43a26a6_29898532 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_877052106551f1c43a26a6_29898532',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
          <li class="alert alert-danger"><?php echo nl2br((string) $_smarty_tpl->tpl_vars['error']->value, (bool) 1);?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
