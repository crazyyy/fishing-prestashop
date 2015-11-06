<?php /* Smarty version Smarty-3.1.19, created on 2015-11-04 17:05:52
         compiled from "/home/a/alintond/fishing-equipment/public_html/admin9945/themes/default/template/controllers/products/customization.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1816893088563a10c06dd064-49354927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74d68750dda33b4209d58ac7a30d2a9c2cb49aa5' => 
    array (
      0 => '/home/a/alintond/fishing-equipment/public_html/admin9945/themes/default/template/controllers/products/customization.tpl',
      1 => 1444479761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1816893088563a10c06dd064-49354927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
    'display_common_field' => 0,
    'bullet_common_field' => 0,
    'uploadable_files' => 0,
    'text_fields' => 0,
    'has_file_labels' => 0,
    'display_file_labels' => 0,
    'has_text_labels' => 0,
    'display_text_labels' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563a10c0706b81_90676440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563a10c0706b81_90676440')) {function content_563a10c0706b81_90676440($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['obj']->value->id)) {?>
<div id="product-customization" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Customization" />
	<h3><?php echo smartyTranslate(array('s'=>'Add or modify customizable properties'),$_smarty_tpl);?>
</h3>

	<?php if (isset($_smarty_tpl->tpl_vars['display_common_field']->value)&&$_smarty_tpl->tpl_vars['display_common_field']->value) {?>
		<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Warning, if you change the value of fields with an orange bullet %s, the value will be changed for all other shops for this product','sprintf'=>$_smarty_tpl->tpl_vars['bullet_common_field']->value),$_smarty_tpl);?>
</div>
	<?php }?>

	<div class="form-group">		
		<label class="control-label col-lg-3" for="uploadable_files">
			<?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>
 
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'Number of upload file fields to be displayed to the user.'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'File fields'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-1">
			<input type="text" name="uploadable_files" id="uploadable_files" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['uploadable_files']->value);?>
" />
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-3" for="text_fields">
			<?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>
 
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'Number of text fields to be displayed to the user.'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Text fields'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-1">
			<input type="text" name="text_fields" id="text_fields" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['text_fields']->value);?>
" />
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['has_file_labels']->value) {?>
	<hr/>
	<div class="form-group">
		<label class="control-label col-lg-3">
			<?php echo smartyTranslate(array('s'=>'Define the label of the file fields'),$_smarty_tpl);?>

		</label>
		<div class="col-lg-9">
			<?php echo $_smarty_tpl->tpl_vars['display_file_labels']->value;?>

		</div>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['has_text_labels']->value) {?>
	<hr/>
	<div class="form-group">
		<label class="control-label col-lg-3">
			<?php echo smartyTranslate(array('s'=>'Define the label of the text fields'),$_smarty_tpl);?>

		</label>
		<div class="col-lg-9">
			<?php echo $_smarty_tpl->tpl_vars['display_text_labels']->value;?>

		</div>
	</div>
	<?php }?>
	<div class="panel-footer">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>
</button>
	</div>
</div>
<?php }?><?php }} ?>
