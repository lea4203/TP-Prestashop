<?php
/* Smarty version 4.3.1, created on 2023-11-13 10:51:45
  from '/home/lea/webapps/lea-prestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6551f1b182c896_25858891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30ffe8b8e287fb74bb1cea726de785cf83300f6b' => 
    array (
      0 => '/home/lea/webapps/lea-prestashop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1699868195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551f1b182c896_25858891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/lea/webapps/lea-prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/30/ff/e8/30ffe8b8e287fb74bb1cea726de785cf83300f6b_2.file.helpers.tpl.php',
    'uid' => '30ffe8b8e287fb74bb1cea726de785cf83300f6b',
    'call_name' => 'smarty_template_function_renderLogo_14748983106551f1b1824f42_07119597',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_14748983106551f1b1824f42_07119597 */
if (!function_exists('smarty_template_function_renderLogo_14748983106551f1b1824f42_07119597')) {
function smarty_template_function_renderLogo_14748983106551f1b1824f42_07119597(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_14748983106551f1b1824f42_07119597 */
}
