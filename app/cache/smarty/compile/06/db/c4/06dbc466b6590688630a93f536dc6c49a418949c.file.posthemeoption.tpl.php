<?php /* Smarty version Smarty-3.1.19, created on 2017-07-16 20:58:22
         compiled from "/Users/nicotudela/work/workspace/avisistemas/app/modules/posthemeoption/posthemeoption.tpl" */ ?>
<?php /*%%SmartyHeaderCode:698874779596bfd9ec8d041-04515749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06dbc466b6590688630a93f536dc6c49a418949c' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/app/modules/posthemeoption/posthemeoption.tpl',
      1 => 1498952573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '698874779596bfd9ec8d041-04515749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titlefont' => 0,
    'linkfont' => 0,
    'fontnametitle' => 0,
    'fontnamelink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596bfd9ecd0728_74394977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596bfd9ecd0728_74394977')) {function content_596bfd9ecd0728_74394977($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['titlefont']->value)&&$_smarty_tpl->tpl_vars['titlefont']->value) {?> <?php echo html_entity_decode($_smarty_tpl->tpl_vars['titlefont']->value);?>
 <?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['linkfont']->value)&&$_smarty_tpl->tpl_vars['linkfont']->value) {?> <?php echo html_entity_decode($_smarty_tpl->tpl_vars['linkfont']->value);?>
 <?php }?>
<style type="text/css">
	
		<?php if (isset($_smarty_tpl->tpl_vars['titlefont']->value)&&$_smarty_tpl->tpl_vars['titlefont']->value) {?>
			h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6, a{
			font-family:<?php echo $_smarty_tpl->tpl_vars['fontnametitle']->value;?>
;
			} 
			.titleFont{
			font-family:<?php echo $_smarty_tpl->tpl_vars['fontnametitle']->value;?>
 !important;
			}
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['linkfont']->value)&&$_smarty_tpl->tpl_vars['linkfont']->value) {?>
			body, .footer-container #footer a, .footer-container #footer ul li{
			font-family:<?php echo $_smarty_tpl->tpl_vars['fontnamelink']->value;?>
;
			}
			.linkFont{
			font-family:<?php echo $_smarty_tpl->tpl_vars['fontnamelink']->value;?>
 !important;
			}
		<?php }?>
	
	
</style><?php }} ?>
