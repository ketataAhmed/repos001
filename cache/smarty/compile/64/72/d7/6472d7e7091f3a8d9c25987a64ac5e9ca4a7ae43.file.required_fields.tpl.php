<?php /* Smarty version Smarty-3.1.19, created on 2015-04-28 15:59:36
         compiled from "/data/web/prestashop-1-6.evolutive-business.com/admin/themes/default/template/helpers/required_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12093440553f92481f4268-58221442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6472d7e7091f3a8d9c25987a64ac5e9ca4a7ae43' => 
    array (
      0 => '/data/web/prestashop-1-6.evolutive-business.com/admin/themes/default/template/helpers/required_fields.tpl',
      1 => 1430129540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12093440553f92481f4268-58221442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current' => 0,
    'token' => 0,
    'table_fields' => 0,
    'field' => 0,
    'required_class_fields' => 0,
    'required_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_553f92483869a0_11447014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f92483869a0_11447014')) {function content_553f92483869a0_11447014($_smarty_tpl) {?>
<a class="btn btn-default" href="#" onclick="if ($('.requiredFieldsParameters:visible').length == 0) $('.requiredFieldsParameters').slideDown('slow'); else $('.requiredFieldsParameters').slideUp('slow'); return false;">
	<i class="icon-plus-sign"></i> <?php echo smartyTranslate(array('s'=>'Set required fields for this section'),$_smarty_tpl);?>

</a>
<div class="clearfix">&nbsp;</div>
<div style="display:none" class="panel requiredFieldsParameters">
	<h3><i class="icon-asterisk"></i> <?php echo smartyTranslate(array('s'=>'Required Fields'),$_smarty_tpl);?>
</h3>
	<form name="updateFields" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;submitFields=1&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post">
		<div class="alert alert-info">
			<?php echo smartyTranslate(array('s'=>'Select the fields you would like to be required for this section.'),$_smarty_tpl);?>

		</div>
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th class="fixed-width-xs">
							<input type="checkbox" onclick="checkDelBoxes(this.form, 'fieldsBox[]', this.checked)" class="noborder" name="checkme">
						</th>
						<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Field Name'),$_smarty_tpl);?>
</span></th>
					</tr>
				</thead>
				<tbody>
				<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
					<?php if (!in_array($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['required_class_fields']->value)) {?>
					<tr>
						<td class="noborder">
							<input type="checkbox" name="fieldsBox[]" value="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> checked="checked"<?php }?> />
						</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

						</td>
					</tr>
					<?php }?>
				<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<button name="submitFields" type="submit" class="btn btn-default pull-right">
				<i class="process-icon-save "></i> <span><?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</span>
			</button>					
		</div>
	</form>
</div><?php }} ?>
