<?php /* Smarty version Smarty-3.1.19, created on 2017-07-01 15:41:10
         compiled from "/Users/nicotudela/work/workspace/avisistemas/admin/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10750173035957c2969288a9-68318513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c00e14124af212d8f58a776232f7097bc4847ab' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/admin/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1498247114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10750173035957c2969288a9-68318513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5957c29693ded3_18054785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957c29693ded3_18054785')) {function content_5957c29693ded3_18054785($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
