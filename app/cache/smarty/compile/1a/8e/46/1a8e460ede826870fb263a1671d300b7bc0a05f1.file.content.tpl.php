<?php /* Smarty version Smarty-3.1.19, created on 2017-07-01 12:46:51
         compiled from "/Users/nicotudela/work/workspace/avisistemas/admin31009787/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18048980465957c3ebbcbdb2-37976454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a8e460ede826870fb263a1671d300b7bc0a05f1' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/admin31009787/themes/default/template/content.tpl',
      1 => 1498247114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18048980465957c3ebbcbdb2-37976454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5957c3ebbdc101_46181145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957c3ebbdc101_46181145')) {function content_5957c3ebbdc101_46181145($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
