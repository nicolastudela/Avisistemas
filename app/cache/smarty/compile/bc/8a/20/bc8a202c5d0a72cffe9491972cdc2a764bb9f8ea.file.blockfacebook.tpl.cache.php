<?php /* Smarty version Smarty-3.1.19, created on 2017-07-01 12:44:57
         compiled from "/Users/nicotudela/work/workspace/avisistemas/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3484928035957c379b87953-88537802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc8a202c5d0a72cffe9491972cdc2a764bb9f8ea' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/modules/blockfacebook/blockfacebook.tpl',
      1 => 1498247116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3484928035957c379b87953-88537802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5957c379b94f22_52000611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957c379b94f22_52000611')) {function content_5957c379b94f22_52000611($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
