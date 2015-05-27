<?php /* Smarty version Smarty-3.1.19, created on 2015-05-18 15:03:03
         compiled from "/data/web/prestashop-1-6.evolutive-business.com/modules/syspay//views/templates/admin/bo-syspay-16.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4630184695559e30788d364-20909526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '436bd24c9d76bd815b849a7ad6e0f785208adcff' => 
    array (
      0 => '/data/web/prestashop-1-6.evolutive-business.com/modules/syspay//views/templates/admin/bo-syspay-16.tpl',
      1 => 1431954179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4630184695559e30788d364-20909526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'checks' => 0,
    'settings' => 0,
    'states' => 0,
    'os' => 0,
    'cbtest' => 0,
    'no_payments' => 0,
    'no_refunds' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5559e30803b431_27717029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5559e30803b431_27717029')) {function content_5559e30803b431_27717029($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/data/web/prestashop-1-6.evolutive-business.com/tools/smarty/plugins/modifier.escape.php';
?>



<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" media="all" type="text/css" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
css/syspay16.css" />
<script>

var texts = [	
	"<?php echo smartyTranslate(array('s'=>'This is often useful for merchants who have a delayed order fulfillment process. You can capture funds once the order has been shipped.','mod'=>'syspay'),$_smarty_tpl);?>
",
	"<?php echo smartyTranslate(array('s'=>'Choose the order status that will trigger the capture of funds for a deferred payment.','mod'=>'syspay'),$_smarty_tpl);?>
",
	"<?php echo smartyTranslate(array('s'=>'1-Click payment allows your customers to make purchases with a single click, with the payment information needed to complete the purchase already entered by your customer previously.','mod'=>'syspay'),$_smarty_tpl);?>
",
	"<?php echo smartyTranslate(array('s'=>'Website ID is provided by SysPay and it is not mandatory while in TRIAL mode','mod'=>'syspay'),$_smarty_tpl);?>
"
	];

</script>
<script type="text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
js/jquery.qtip-1.0.0-rc3.min.js"></script>
<script type="text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
js/admin.js"></script>
<div class="panel" style="border: 0; background: white;">
    <div id="syspay_wrapper">
        <div id="syspay_header">
            <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/logo_bo.jpg" />
            <h1><?php echo smartyTranslate(array('s'=>'Increase your sales!','mod'=>'syspay'),$_smarty_tpl);?>
</h1>
            <div style="clear: both"></div>
        </div>
        <div id="syspay_adv">
            <div id="bloc-left">
                <div id="adv1" class="adv">
                    <span class="adv-title"><?php echo smartyTranslate(array('s'=>'Easy & Immediate','mod'=>'syspay'),$_smarty_tpl);?>
</span>
                    <span class="adv-subtitle"><?php echo smartyTranslate(array('s'=>'No merchant account needed','mod'=>'syspay'),$_smarty_tpl);?>
</span>
                </div>
                <div id="adv2" class="adv">
                    <span class="adv-title"><?php echo smartyTranslate(array('s'=>'International','mod'=>'syspay'),$_smarty_tpl);?>
</span>
                    <span class="adv-subtitle"><?php echo smartyTranslate(array('s'=>'21 payment options 24 currencies','mod'=>'syspay'),$_smarty_tpl);?>
</span>
                </div>
                <div id="adv3" class="adv">
                    <span class="adv-title"><?php echo smartyTranslate(array('s'=>'Secure','mod'=>'syspay'),$_smarty_tpl);?>
</span>
                    <span class="adv-subtitle"><?php echo smartyTranslate(array('s'=>'Advanced fraud prevention solution','mod'=>'syspay'),$_smarty_tpl);?>
</span>
                </div>
                <div id="adv4" class="adv">
                    <span class="adv-title"><?php echo smartyTranslate(array('s'=>'Customizable','mod'=>'syspay'),$_smarty_tpl);?>
</span>
                    <span class="adv-subtitle"><?php echo smartyTranslate(array('s'=>'Your design and logo','mod'=>'syspay'),$_smarty_tpl);?>
</span>
                </div>
            </div>
            <div id="bloc-right">
                <div id="adv-trial">
                    <span class="trial-title"><?php echo smartyTranslate(array('s'=>'FREE','mod'=>'syspay'),$_smarty_tpl);?>
</span><br />
                    <span class="trial-title"><?php echo smartyTranslate(array('s'=>'Trial','mod'=>'syspay'),$_smarty_tpl);?>
</span><br />
                    <span class="trial-subtitle"><?php echo smartyTranslate(array('s'=>'(up to 2500€ sales)','mod'=>'syspay'),$_smarty_tpl);?>
</span><br />
                    <a id="trial-activate" href="https://app.syspay.com/register/prestashop" target="_blank">
                        <?php echo smartyTranslate(array('s'=>'Activate Now','mod'=>'syspay'),$_smarty_tpl);?>

                    </a>
                    <span class="trial-subtitle"><a style="color: white" target="_blank" href="http://app.syspay.com/landing/prestashop_partner_50"><?php echo smartyTranslate(array('s'=>'Developers: earn 20€ cashback for each merchant activation','mod'=>'syspay'),$_smarty_tpl);?>
</a></span><br />
                </div>
            </div>
            <div style="clear: both"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <h3><?php echo smartyTranslate(array('s'=>'Technical checks','mod'=>'syspay'),$_smarty_tpl);?>
</h3>
                    <?php if ($_smarty_tpl->tpl_vars['checks']->value['total']=='ko') {?>
                        <div class="alert alert-warning">
                            <?php echo smartyTranslate(array('s'=>'Unfortunately, at leat one issue is preventing you from using Syspay. Please fix the issue and reload the page.','mod'=>'syspay'),$_smarty_tpl);?>

                        </div>
                    <?php } else { ?>
                        <div class="alert alert-success">
                            <?php echo smartyTranslate(array('s'=>'You are now ready to make your first sale with Syspay.','mod'=>'syspay'),$_smarty_tpl);?>

                        </div>
                    <?php }?>
                    <ul>
                        <li><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/<?php echo $_smarty_tpl->tpl_vars['checks']->value['curl'];?>
.gif" /> <?php echo smartyTranslate(array('s'=>'Enable the cURL extension','mod'=>'syspay'),$_smarty_tpl);?>
</li>
                        <li><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/<?php echo $_smarty_tpl->tpl_vars['checks']->value['json'];?>
.gif" /> <?php echo smartyTranslate(array('s'=>'Enable the JSON extension','mod'=>'syspay'),$_smarty_tpl);?>
</li>
                        <li><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/<?php echo $_smarty_tpl->tpl_vars['checks']->value['php'];?>
.gif" /> <?php echo smartyTranslate(array('s'=>'PHP version greater than 5.2','mod'=>'syspay'),$_smarty_tpl);?>
</li>
                        <li><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/<?php echo $_smarty_tpl->tpl_vars['checks']->value['settings'];?>
.gif" /> <?php echo smartyTranslate(array('s'=>'Signup for SysPay and fill in the Settings form below','mod'=>'syspay'),$_smarty_tpl);?>
</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8" style="width: 67%;">
                <div class="panel" style="margin-top: 12px;">
                    <h3><?php echo smartyTranslate(array('s'=>'Settings','mod'=>'syspay'),$_smarty_tpl);?>
</h3>
                    <form method="post" action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['settings']->value['formTarget'], 'UTF-8');?>
" name="syspayForm">
                        <div class="bb">
							<div class="form-group">
                            <label class="control-label col-lg-4"><?php echo smartyTranslate(array('s'=>'Mode','mod'=>'syspay'),$_smarty_tpl);?>
</label>
							<div class="col-lg-3">
								<span class="switch prestashop-switch fixed-width-lg">
									<input type="radio" id="mode_live" name="SYSPAY_MODE" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['SYSPAY_MODE']==1) {?>checked="checked" <?php }?> />
									<label for="mode_live">
										<?php echo smartyTranslate(array('s'=>'Live','mod'=>'syspay'),$_smarty_tpl);?>

									</label>
									<input type="radio" id="mode_test" name="SYSPAY_MODE" value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['SYSPAY_MODE']==0) {?>checked="checked" <?php }?> />
									<label for="mode_test">
										<?php echo smartyTranslate(array('s'=>'Test','mod'=>'syspay'),$_smarty_tpl);?>

									</label>
									<a class="slide-button btn"></a>
								</span>
							</div>
							<div class="clearfix"></div>
							</div>
                        </div>
                        <div class="bb pt">
                            <div class="split">
                                <label class="credentials"><?php echo smartyTranslate(array('s'=>'Sandbox login','mod'=>'syspay'),$_smarty_tpl);?>
</label>
                                <input type="text" name="SYSPAY_TEST_MID" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['SYSPAY_TEST_MID'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
                                <br /><br />
                                <label class="credentials"><?php echo smartyTranslate(array('s'=>'Sandbox passphrase','mod'=>'syspay'),$_smarty_tpl);?>
</label>
                                <input type="text" name="SYSPAY_TEST_SHA1_PRIVATE" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['SYSPAY_TEST_SHA1_PRIVATE'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
                                <div style="clear: both"></div>
                            </div>
                            <div class="split bl">
                                <label class="credentials"><?php echo smartyTranslate(array('s'=>'LIVE login','mod'=>'syspay'),$_smarty_tpl);?>
</label>
                                <input type="text" name="SYSPAY_LIVE_MID" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['SYSPAY_LIVE_MID'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
                                <br /><br />
                                <label class="credentials"><?php echo smartyTranslate(array('s'=>'LIVE passphrase','mod'=>'syspay'),$_smarty_tpl);?>
</label>
                                <input type="text" name="SYSPAY_LIVE_SHA1_PRIVATE" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['SYSPAY_LIVE_SHA1_PRIVATE'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
                                <div style="clear: both"></div>
                            </div>
                            <div style="clear: both"></div>
                        </div>
                        <div class="bb pt">
							<div class="form-group">
                            <label class="control-label col-lg-4"><?php echo smartyTranslate(array('s'=>'Website ID','mod'=>'syspay'),$_smarty_tpl);?>
</label>
							<div class="col-lg-4">
								<input class="form-control fixed-width-sm" type="text" name="SYSPAY_WEBSITE_ID" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['SYSPAY_WEBSITE_ID'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
							</div>
                            <span class="help" id="t3" ><sup>?</sup></span>
							</div>
                        </div>
                        <div class="bb pt">
							<div class="form-group">
							<label class="control-label col-lg-4"><?php echo smartyTranslate(array('s'=>'Check availability of funds for a transaction but delay the capture of funds until a later time','mod'=>'syspay'),$_smarty_tpl);?>
</label>
							<div class="col-lg-4">
								<span class="switch prestashop-switch fixed-width-lg">
									<input id="mode_yes" type="radio" name="SYSPAY_AUTHORIZED_PAYMENT" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['SYSPAY_AUTHORIZED_PAYMENT']==1) {?>checked="checked" <?php }?> />
									<label for="mode_yes">
										<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'syspay'),$_smarty_tpl);?>

									</label>
									<input id="mode_no" type="radio" name="SYSPAY_AUTHORIZED_PAYMENT" value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['SYSPAY_AUTHORIZED_PAYMENT']==0) {?>checked="checked" <?php }?> />
									<label for="mode_no">
										<?php echo smartyTranslate(array('s'=>'No','mod'=>'syspay'),$_smarty_tpl);?>

									</label>
									<a class="slide-button btn"></a>
								</span>
							</div>
							<span class="help" id="t0" ><sup>?</sup></span>
							<div class="clearfix"></div>
							</div>
                        </div>
                        <div class="bb pt">
                            <label><?php echo smartyTranslate(array('s'=>'Order status triggering the Capture','mod'=>'syspay'),$_smarty_tpl);?>
</label>
                            <select name="SYSPAY_CAPTURE_OS">
                                <?php  $_smarty_tpl->tpl_vars['os'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['os']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['os']->key => $_smarty_tpl->tpl_vars['os']->value) {
$_smarty_tpl->tpl_vars['os']->_loop = true;
?>
                                    <option value="<?php echo intval($_smarty_tpl->tpl_vars['os']->value['id_order_state']);?>
" <?php if ($_smarty_tpl->tpl_vars['os']->value['id_order_state']==$_smarty_tpl->tpl_vars['settings']->value['SYSPAY_CAPTURE_OS']) {?>selected="selected"<?php }?>>
                                        <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['os']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                    </option>
                                <?php } ?>
                            </select>
                            <span class="help" id="t1" ><sup>?</sup></span>
                            <div style="clear: both"></div>
                        </div>
                        <div class="bb pt">
							<div class="form-group">
							<label class="control-label col-lg-4"><?php echo smartyTranslate(array('s'=>'Enable 1-click payments for cards','mod'=>'syspay'),$_smarty_tpl);?>
</label>
							<div class="col-lg-4">
								<span class="switch prestashop-switch fixed-width-lg">
									<input id="mode_yes_1c" type="radio" name="SYSPAY_REBILL" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['SYSPAY_REBILL']==1) {?>checked="checked" <?php }?> />
									<label for="mode_yes_1c">
										<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'syspay'),$_smarty_tpl);?>

									</label>
									<input id="mode_no_1c" type="radio" name="SYSPAY_REBILL" value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['SYSPAY_REBILL']==0) {?>checked="checked" <?php }?> />
									<label for="mode_no_1c">
										<?php echo smartyTranslate(array('s'=>'No','mod'=>'syspay'),$_smarty_tpl);?>

									</label>
									<a class="slide-button btn"></a>
								</span>
							</div>
							<span class="help" id="t2" ><sup>?</sup></span>
							<div class="clearfix"></div>
							</div>
                        </div>
                        <div class="pt save">
                            <input type="submit" class="btn btn-default syspay-btn" name="submitSyspay" value="<?php echo smartyTranslate(array('s'=>'Save Settings','mod'=>'syspay'),$_smarty_tpl);?>
" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2" style="width: 31.8%; padding-right: 0; margin-left: 12px; margin-top: 12px; float: left">
                <div class="panel">
                    <h3><?php echo smartyTranslate(array('s'=>'How to test?','mod'=>'syspay'),$_smarty_tpl);?>
</h3>
                    <form method="post" action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['settings']->value['formTarget'], 'UTF-8');?>
" name="generateCard">
                        <span style="font-weight: bold"><?php echo smartyTranslate(array('s'=>'Some suggestions on how to test a card payment:','mod'=>'syspay'),$_smarty_tpl);?>
</span><br /><br />
                        <ul>
                            <li><?php echo smartyTranslate(array('s'=>'- You need a valid card number (valid format only, not a real card)','mod'=>'syspay'),$_smarty_tpl);?>
</li>
                        </ul><br />
                        <input type="submit" name="generate-cb" value="<?php echo smartyTranslate(array('s'=>'Generate card','mod'=>'syspay'),$_smarty_tpl);?>
" class="btn btn-default syspay-btn" />
						<br /><br />
                        <span id="cb-test"><?php if (isset($_smarty_tpl->tpl_vars['cbtest']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cbtest']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></span>
						<br /><br />
                        <ul>
                            <li><?php echo smartyTranslate(array('s'=>'- You can use any 3 digit CV2','mod'=>'syspay'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'- If you want to test a successful payment, use a January (01) expiry month','mod'=>'syspay'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'- If you want to test a declined payment, use any other month for expiry month','mod'=>'syspay'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'- If you want to test a 3ds transaction (VerifiedbyVisa or MasterCard SecureCode) use 2018 as expiry year','mod'=>'syspay'),$_smarty_tpl);?>
</li>
                        </ul>
                    </form>
                </div>
            </div>
            <div class="col-lg-2" style="width: 31.8%; padding-right: 0; margin-left: 12px; margin-top: 12px; float: left;">
                <div class="panel">
                    <h3><?php echo smartyTranslate(array('s'=>'Exports','mod'=>'syspay'),$_smarty_tpl);?>
</h3>
                    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
                    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
                    <script>
                        $(function() {
                            $( "#from" ).datepicker({
                                defaultDate: "+1w",
                                changeMonth: true,
                                numberOfMonths: 3,
                                onClose: function( selectedDate ) {
                                    $( "#to" ).datepicker( "option", "minDate", selectedDate );
                                }
                            });
                            $( "#to" ).datepicker({
                                defaultDate: "+1w",
                                changeMonth: true,
                                numberOfMonths: 3,
                                onClose: function( selectedDate ) {
                                    $( "#from" ).datepicker( "option", "maxDate", selectedDate );
                                }
                            });
                        });
                    </script>
                    <form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['settings']->value['formTarget'], 'UTF-8');?>
" name="export_syspay" target="_blank" method="post" style="margin-bottom: 30px;">
                        <h4><?php echo smartyTranslate(array('s'=>'Payments','mod'=>'syspay'),$_smarty_tpl);?>
</h4>
                        <span for="from" style="display: inline-block; width: 50px;"><?php echo smartyTranslate(array('s'=>'From','mod'=>'syspay'),$_smarty_tpl);?>
</span>
                        <input type="text" id="from" name="from" /><br />
                        <span for="to" style="display: inline-block; width: 50px;"><?php echo smartyTranslate(array('s'=>'To','mod'=>'syspay'),$_smarty_tpl);?>
</span>
                        <input type="text" id="to" name="to" /><br /><br />
                        <input <?php if (isset($_smarty_tpl->tpl_vars['no_payments']->value)) {?>disabled<?php }?> class="btn btn-default syspay-btn" type="submit" name="export_transactions" value="<?php echo smartyTranslate(array('s'=>'Export payments','mod'=>'syspay'),$_smarty_tpl);?>
" /><br /><br />
                        <h4><?php echo smartyTranslate(array('s'=>'Refunds','mod'=>'syspay'),$_smarty_tpl);?>
</h4>
                        <input <?php if (isset($_smarty_tpl->tpl_vars['no_refunds']->value)) {?>disabled<?php }?> class="btn btn-default syspay-btn" type="submit" name="export_refunds" value="<?php echo smartyTranslate(array('s'=>'Export all refunds','mod'=>'syspay'),$_smarty_tpl);?>
" />
                        <input type="hidden" name="valid_export" value="1" />
                    </form>
                </div>
            </div>
            <script>
                $('#conf a').click(function (e) {
                    e.preventDefault()
                    $(this).tab('show')
                })
            </script>
        </div>
    </div>
</div>
<?php }} ?>
