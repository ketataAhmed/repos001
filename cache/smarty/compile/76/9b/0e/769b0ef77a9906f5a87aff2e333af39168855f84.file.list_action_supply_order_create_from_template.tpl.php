<?php /* Smarty version Smarty-3.1.19, created on 2015-04-28 15:59:26
         compiled from "/data/web/prestashop-1-6.evolutive-business.com/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1650063878553f923ea3f1d0-74393194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '769b0ef77a9906f5a87aff2e333af39168855f84' => 
    array (
      0 => '/data/web/prestashop-1-6.evolutive-business.com/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl',
      1 => 1430129540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1650063878553f923ea3f1d0-74393194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_553f923eab55c9_15965358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f923eab55c9_15965358')) {function content_553f923eab55c9_15965358($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
