<?php /* Smarty version Smarty-3.1.19, created on 2017-07-16 20:58:24
         compiled from "/Users/nicotudela/work/workspace/avisistemas/app/modules/posrotatorimg/rotator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:612511721596bfda02f0b17-55036273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da91a1854a94ae434ef6d3dec768c171f7425530' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/app/modules/posrotatorimg/rotator.tpl',
      1 => 1498952573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '612511721596bfda02f0b17-55036273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rotator_img' => 0,
    'product' => 0,
    'image' => 0,
    'class_name' => 0,
    'imageIds' => 0,
    'link' => 0,
    'homeSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596bfda0323a02_53662627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596bfda0323a02_53662627')) {function content_596bfda0323a02_53662627($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['rotator_img']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rotator_img']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
		  <?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
          <img class="img-responsive second-image <?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image"  />
    <?php } ?>
<?php }?>		<?php }} ?>
