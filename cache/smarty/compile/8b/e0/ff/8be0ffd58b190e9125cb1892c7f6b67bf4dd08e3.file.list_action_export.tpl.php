<?php /* Smarty version Smarty-3.1.19, created on 2015-04-28 15:59:12
         compiled from "/data/web/prestashop-1-6.evolutive-business.com/admin/themes/default/template/controllers/request_sql/list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1682836746553f923035b7c0-15761347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8be0ffd58b190e9125cb1892c7f6b67bf4dd08e3' => 
    array (
      0 => '/data/web/prestashop-1-6.evolutive-business.com/admin/themes/default/template/controllers/request_sql/list_action_export.tpl',
      1 => 1430129540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1682836746553f923035b7c0-15761347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_553f92303c75e4_15604545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f92303c75e4_15604545')) {function content_553f92303c75e4_15604545($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
