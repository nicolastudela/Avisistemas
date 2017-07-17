<?php /* Smarty version Smarty-3.1.19, created on 2017-07-16 21:00:51
         compiled from "/Users/nicotudela/work/workspace/avisistemas/app/admin31009787/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2107182254596bfe337b2578-61092125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63f687d797f739b262994bc9885c634114d86ef5' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/app/admin31009787/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1498247114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2107182254596bfe337b2578-61092125',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596bfe337b9ee4_27481645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596bfe337b9ee4_27481645')) {function content_596bfe337b9ee4_27481645($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
