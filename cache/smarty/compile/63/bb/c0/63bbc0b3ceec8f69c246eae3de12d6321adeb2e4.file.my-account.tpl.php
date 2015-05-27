<?php /* Smarty version Smarty-3.1.19, created on 2015-04-28 15:58:59
         compiled from "/data/web/prestashop-1-6.evolutive-business.com/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1684596736553f9223294215-80943198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63bbc0b3ceec8f69c246eae3de12d6321adeb2e4' => 
    array (
      0 => '/data/web/prestashop-1-6.evolutive-business.com/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl',
      1 => 1430129540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1684596736553f9223294215-80943198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_553f92232d16b7_33036840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f92232d16b7_33036840')) {function content_553f92232d16b7_33036840($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-flag"></i><span><?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE Loyalty --><?php }} ?>
