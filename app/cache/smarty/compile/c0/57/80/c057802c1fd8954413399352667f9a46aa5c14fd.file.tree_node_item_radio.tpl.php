<?php /* Smarty version Smarty-3.1.19, created on 2017-07-01 13:22:42
         compiled from "/Users/nicotudela/work/workspace/avisistemas/app/admin31009787/themes/default/template/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17039838835957cc523b84d3-98952198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c057802c1fd8954413399352667f9a46aa5c14fd' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/app/admin31009787/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1498247114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17039838835957cc523b84d3-98952198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5957cc523f3a90_27826343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957cc523f3a90_27826343')) {function content_5957cc523f3a90_27826343($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
