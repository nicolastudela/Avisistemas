<?php /* Smarty version Smarty-3.1.19, created on 2017-07-01 12:59:40
         compiled from "/Users/nicotudela/work/workspace/avisistemas/app/admin31009787/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4963413165957c6ec9a02d6-85620245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23851636e31bb1ab7be2aa60222cec7c6efd5ad9' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/app/admin31009787/themes/default/template/content.tpl',
      1 => 1498247114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4963413165957c6ec9a02d6-85620245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5957c6ec9ac163_43746030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957c6ec9ac163_43746030')) {function content_5957c6ec9ac163_43746030($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
