<?php /* Smarty version Smarty-3.1.19, created on 2017-07-16 20:58:24
         compiled from "/Users/nicotudela/work/workspace/avisistemas/app/themes/pos_haxico4/modules/poslistcategories/views/templates/hook/poslistcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1715304842596bfda03af7d1-04282809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f54fc704249970b21b621fca4132b312c8fe875' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/app/themes/pos_haxico4/modules/poslistcategories/views/templates/hook/poslistcategories.tpl',
      1 => 1498952572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1715304842596bfda03af7d1-04282809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'link' => 0,
    'count' => 0,
    'configure' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596bfda0402a86_46606605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596bfda0402a86_46606605')) {function content_596bfda0402a86_46606605($_smarty_tpl) {?>

<div class="poslistcategories">
	<div class="container">
		<div class="pos-title">
			<h2><span><?php echo smartyTranslate(array('s'=>'Our','mod'=>'poslistcategories'),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'Categories','mod'=>'poslistcategories'),$_smarty_tpl);?>
</h2>
		</div>
		<div class="row pos-content">
			<div class="block_content">
			<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
				<div class="list-categories">
					<?php if ($_smarty_tpl->tpl_vars['category']->value['image']) {?>
					<div class="thumb-category">
						<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category']);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)@constant('_MODULE_DIR_'))."poslistcategories/images/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
" alt="" /></a>
					</div>
					<?php }?>
					<div class="desc-listcategoreis">
						<div class="content-listcategoreis">
							<div class="name_categories">
								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category']);?>
" target="_blank">	<?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</a>
						
							</div>
							<span class="number_product">(<?php echo $_smarty_tpl->tpl_vars['category']->value['nbProducts'];?>
) <?php echo smartyTranslate(array('s'=>'products','mod'=>'poslistcategories'),$_smarty_tpl);?>
</span>
							<?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
							<div class="description-list">
								<div class="desc-content">
									<?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>

								</div>
							</div>
							<?php }?>
						</div>
					</div>		
				</div>			
				<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
			<?php } ?>		
			</div>
		</div>	
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		var poslistcategories = $(".poslistcategories .block_content");
		poslistcategories.owlCarousel({
			items : <?php echo $_smarty_tpl->tpl_vars['configure']->value['items'];?>
,
			itemsDesktop : [1199,<?php echo $_smarty_tpl->tpl_vars['configure']->value['item_md'];?>
],
			itemsDesktopSmall : [991,<?php echo $_smarty_tpl->tpl_vars['configure']->value['item_sm'];?>
],
			itemsTablet: [767,<?php echo $_smarty_tpl->tpl_vars['configure']->value['item_xs'];?>
],
			itemsMobile : [479,<?php echo $_smarty_tpl->tpl_vars['configure']->value['item_xxs'];?>
],
			autoPlay :  <?php if ($_smarty_tpl->tpl_vars['configure']->value['auto']) {?><?php if ($_smarty_tpl->tpl_vars['configure']->value['delay']) {?><?php echo $_smarty_tpl->tpl_vars['configure']->value['delay'];?>
<?php } else { ?>3000<?php }?><?php } else { ?> false<?php }?>,
			slideSpeed : <?php if ($_smarty_tpl->tpl_vars['configure']->value['speed']) {?><?php echo $_smarty_tpl->tpl_vars['configure']->value['speed'];?>
<?php } else { ?>1000<?php }?>,
			addClassActive: true,
			navigation : <?php if ($_smarty_tpl->tpl_vars['configure']->value['arrow']) {?> true <?php } else { ?> false <?php }?>,
			pagination : <?php if ($_smarty_tpl->tpl_vars['configure']->value['nav']) {?> true <?php } else { ?> false <?php }?>,
		});
	});
</script>
<?php }} ?>
