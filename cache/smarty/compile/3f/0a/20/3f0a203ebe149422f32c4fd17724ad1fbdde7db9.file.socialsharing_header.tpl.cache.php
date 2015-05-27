<?php /* Smarty version Smarty-3.1.19, created on 2015-04-28 16:24:12
         compiled from "/data/web/prestashop-1-6.evolutive-business.com/modules/socialsharing/views/templates/hook/socialsharing_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:558235479553f980c3e0aa6-27022211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f0a203ebe149422f32c4fd17724ad1fbdde7db9' => 
    array (
      0 => '/data/web/prestashop-1-6.evolutive-business.com/modules/socialsharing/views/templates/hook/socialsharing_header.tpl',
      1 => 1430129646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '558235479553f980c3e0aa6-27022211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'request' => 0,
    'shop_name' => 0,
    'meta_description' => 0,
    'link_rewrite' => 0,
    'cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_553f980c4b2c35_47312079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f980c4b2c35_47312079')) {function content_553f980c4b2c35_47312079($_smarty_tpl) {?>
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['request']->value;?>
" />
<meta property="og:type" content="product" />
<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:email" content="" />
<meta property="og:phone_number" content="" />
<meta property="og:street-address" content="" />
<meta property="og:locality" content="" />
<meta property="og:country-name" content="" />
<meta property="og:postal-code" content="" />
<?php if (isset($_smarty_tpl->tpl_vars['link_rewrite']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value['id_image'])) {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['link_rewrite']->value,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />
<?php }?>
<?php }} ?>
