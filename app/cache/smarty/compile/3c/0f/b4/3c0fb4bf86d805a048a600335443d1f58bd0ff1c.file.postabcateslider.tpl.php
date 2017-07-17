<?php /* Smarty version Smarty-3.1.19, created on 2017-07-16 20:58:23
         compiled from "/Users/nicotudela/work/workspace/avisistemas/app/themes/pos_haxico4/modules/postabcateslider/postabcateslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7842648596bfd9fb1fcb6-36376755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c0fb4bf86d805a048a600335443d1f58bd0ff1c' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/app/themes/pos_haxico4/modules/postabcateslider/postabcateslider.tpl',
      1 => 1498952572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7842648596bfd9fb1fcb6-36376755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productCates' => 0,
    'productCate' => 0,
    'count' => 0,
    'slideOptions' => 0,
    'product' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'comparator_max_item' => 0,
    'quick_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596bfda02d8fa1_67431506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596bfda02d8fa1_67431506')) {function content_596bfda02d8fa1_67431506($_smarty_tpl) {?><script type="text/javascript">

$(document).ready(function() {

	$(".tab_category").hide();
	$(".tab_category:first").show(); 

	$("ul.tab_cates li").click(function() {
		$("ul.tab_cates li").removeClass("active");
		$(this).addClass("active");
		$(".tab_category").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn().addClass("animatetab");  
	});
});

</script>

<div class="tab-category-container-slider">
	<div class="container">
		<div class="tab-category">				
			<div class="pos_tab">
				<div class ='pos-title'>		
					<h2><span><?php echo smartyTranslate(array('s'=>'categories','mod'=>'postabcateslider'),$_smarty_tpl);?>
 </span> <?php echo smartyTranslate(array('s'=>'products','mod'=>'postabcateslider'),$_smarty_tpl);?>
</h2>	
								
				</div> 	
				<ul class="tab_cates"> 
					<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['productCate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productCate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productCates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['productCate']->key => $_smarty_tpl->tpl_vars['productCate']->value) {
$_smarty_tpl->tpl_vars['productCate']->_loop = true;
?>
							<li data-title="tabtitle_<?php echo $_smarty_tpl->tpl_vars['productCate']->value['id'];?>
" rel="tab_<?php echo $_smarty_tpl->tpl_vars['productCate']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['count']->value==0) {?> class="active"  <?php }?> > 
							<span><?php echo $_smarty_tpl->tpl_vars['productCate']->value['name'];?>
</span>
							</li>
							<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
					<?php } ?>	
				</ul>	
			</div>
			<div class="row pos-content">		
				<div class="tab1_container"> 
				<?php  $_smarty_tpl->tpl_vars['productCate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productCate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productCates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['productCate']->key => $_smarty_tpl->tpl_vars['productCate']->value) {
$_smarty_tpl->tpl_vars['productCate']->_loop = true;
?>				
					<div id="tab_<?php echo $_smarty_tpl->tpl_vars['productCate']->value['id'];?>
" class="tab_category">
						<div class="productTabCategorySlider">
							<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productCate']->value['product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%$_smarty_tpl->tpl_vars['slideOptions']->value['rows']==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>
								<div class="cate_item">
								<?php }?>
									<div class="item-product">
										<div class="products-inner">
											<a class="bigpic_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_tabcategory product_image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
												<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />	
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"rotatorImg",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
			
											</a>
											<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?>
												<a class="new-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
													<span class="new-label"><?php echo smartyTranslate(array('s'=>'New','mod'=>'postabcateslider'),$_smarty_tpl);?>
</span>
												</a>
											<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
												<a class="sale-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
													<span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sale!','mod'=>'postabcateslider'),$_smarty_tpl);?>
</span>
												</a>
											<?php }?>
															
										</div>
										<div class="product-contents">
											<h5 class="product-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],25,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h5>
											<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
											<div class="price-box">
												<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'before_price'),$_smarty_tpl);?>

												<span class="price product-price">
													<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
												</span>
												<?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']>0&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

													<span class="old-price product-price">
														<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

													</span>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'type'=>"old_price"),$_smarty_tpl);?>

													<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage') {?>
														<span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100;?>
%</span>
													<?php }?>
												<?php }?>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'after_price'),$_smarty_tpl);?>

											<?php }?>
											</div>
											<?php }?>			
											<?php $_smarty_tpl->_capture_stack[0][] = array('displayProductListReviews', null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
											<?php if (Smarty::$_smarty_vars['capture']['displayProductListReviews']) {?>
												<div class="hook-reviews">
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

												</div>
											<?php }?> 
											<div class="actions">							
												<div class="actions-inner">
													<div class="cart">
														<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
														<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
														<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
															<a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp8=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp8."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'postabcateslider'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
																<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'postabcateslider'),$_smarty_tpl);?>
</span>
																
															</a>
														<?php } else { ?>
														<a class="button ajax_add_to_cart_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$product.id_product|intval}',false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'postabcateslider'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
															<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'postabcateslider'),$_smarty_tpl);?>
</span>
														</a>
														   <?php }?>      
														<?php } else { ?>
														<span class="button ajax_add_to_cart_button btn btn-default disabled" >
															<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'postabcateslider'),$_smarty_tpl);?>
</span>
														</span>
														<?php }?>
														<?php }?>
													</div>
													<ul class="add-to-links">													
														<li>
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

														</li>
														<li>
														<?php if (isset($_smarty_tpl->tpl_vars['comparator_max_item']->value)&&$_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
														  <a class="add_to_compare" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" title="<?php echo smartyTranslate(array('s'=>'Add to Compare','mod'=>'postabcateslider'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Compare','mod'=>'postabcateslider'),$_smarty_tpl);?>

														
														  </a>
														 <?php }?>
														</li>
														<li>
															<?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
																<a class="quick-view" title="<?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'postabcateslider'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
																	<span><?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'postabcateslider'),$_smarty_tpl);?>
</span>
																</a>
															<?php }?>
														</li>
													</ul>
												</div>
											</div>
													
										</div>								
									</div>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%$_smarty_tpl->tpl_vars['slideOptions']->value['rows']==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>				
								</div>
								<?php }?>	
							<?php } ?>
						</div>
					</div>			
				<?php } ?>	
				 </div> <!-- .tab_container -->
			</div>
		</div>		
	</div>
</div>
<script type="text/javascript"> 
	$(document).ready(function() {
		var owl = $(".productTabCategorySlider");
		owl.owlCarousel({
		items : <?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['number_item'];?>
,
		itemsDesktop : [1199,<?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['items_md'];?>
],
		itemsDesktopSmall : [991,<?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['items_sm'];?>
],
		itemsTablet: [767,<?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['items_xs'];?>
],
		itemsMobile : [479,<?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['items_xxs'];?>
],
		autoPlay :  <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['auto_play']) {?><?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['auto_time']) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['auto_time'];?>
<?php } else { ?>3000<?php }?><?php } else { ?> false<?php }?>,
		stopOnHover: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['pausehover']) {?> true <?php } else { ?> false <?php }?>,
		addClassActive: true,
		slideSpeed : <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide']) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide'];?>
<?php } else { ?>1000<?php }?>,
		scrollPerPage: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['move']) {?> false <?php } else { ?> true <?php }?>,
		navigation : <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_arrow']) {?> true <?php } else { ?> false <?php }?>,
		pagination : <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_pagination']) {?> true <?php } else { ?> false <?php }?>,
		});
	});
</script>

<?php }} ?>
