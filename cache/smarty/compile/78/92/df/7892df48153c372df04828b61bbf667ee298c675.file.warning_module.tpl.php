<?php /* Smarty version Smarty-3.1.19, created on 2015-04-30 14:57:57
         compiled from "/data/web/prestashop-1-6.evolutive-business.com/admin108gsiemq/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1026453932554226d54bc814-91011550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7892df48153c372df04828b61bbf667ee298c675' => 
    array (
      0 => '/data/web/prestashop-1-6.evolutive-business.com/admin108gsiemq/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1430129540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1026453932554226d54bc814-91011550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554226d54da589_69250148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554226d54da589_69250148')) {function content_554226d54da589_69250148($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
