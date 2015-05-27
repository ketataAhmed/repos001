<?php /* Smarty version Smarty-3.1.19, created on 2015-04-28 15:59:34
         compiled from "/data/web/prestashop-1-6.evolutive-business.com/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:874143976553f924685be59-30038660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f234763fb0a28816986f137600e84e7f183e7525' => 
    array (
      0 => '/data/web/prestashop-1-6.evolutive-business.com/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1430129540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '874143976553f924685be59-30038660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_553f924688fbf1_28463988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f924688fbf1_28463988')) {function content_553f924688fbf1_28463988($_smarty_tpl) {?>

<li class="tree-item">
	<label class="tree-item-name">
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>
