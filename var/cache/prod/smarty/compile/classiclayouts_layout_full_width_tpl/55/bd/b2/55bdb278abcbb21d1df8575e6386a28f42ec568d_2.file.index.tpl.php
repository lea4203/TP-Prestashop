<?php
/* Smarty version 4.3.1, created on 2023-11-13 10:58:32
  from '/home/lea/webapps/lea-prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6551f3484a4f26_12069916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55bdb278abcbb21d1df8575e6386a28f42ec568d' => 
    array (
      0 => '/home/lea/webapps/lea-prestashop/themes/classic/templates/index.tpl',
      1 => 1699868195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551f3484a4f26_12069916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13010301116551f3484a0fc1_54911761', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17629851246551f3484a1842_58243083 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_4186036526551f3484a3111_68277236 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_18210006626551f3484a2a28_08116981 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4186036526551f3484a3111_68277236', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13010301116551f3484a0fc1_54911761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_13010301116551f3484a0fc1_54911761',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17629851246551f3484a1842_58243083',
  ),
  'page_content' => 
  array (
    0 => 'Block_18210006626551f3484a2a28_08116981',
  ),
  'hook_home' => 
  array (
    0 => 'Block_4186036526551f3484a3111_68277236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17629851246551f3484a1842_58243083', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18210006626551f3484a2a28_08116981', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
