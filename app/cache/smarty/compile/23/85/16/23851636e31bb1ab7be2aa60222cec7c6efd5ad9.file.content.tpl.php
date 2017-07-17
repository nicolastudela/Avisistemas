<?php /* Smarty version Smarty-3.1.19, created on 2017-07-16 21:00:51
         compiled from "/Users/nicotudela/work/workspace/avisistemas/app/admin31009787/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1671202002596bfe336818a5-95302789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1671202002596bfe336818a5-95302789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596bfe3368ebc6_83912383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596bfe3368ebc6_83912383')) {function content_596bfe3368ebc6_83912383($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
