<?php /* Smarty version Smarty-3.1.19, created on 2017-07-16 20:58:24
         compiled from "/Users/nicotudela/work/workspace/avisistemas/app/themes/pos_haxico4/modules/posspecialproducts/posspecialproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1078602375596bfda041fe29-19997273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c450140cabb4d4a3780e0b3b46fde9104cf9517c' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/app/themes/pos_haxico4/modules/posspecialproducts/posspecialproducts.tpl',
      1 => 1498952572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1078602375596bfda041fe29-19997273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'comparator_max_item' => 0,
    'quick_view' => 0,
    'slider_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596bfda0573b74_27039021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596bfda0573b74_27039021')) {function content_596bfda0573b74_27039021($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/nicotudela/work/workspace/avisistemas/app/tools/smarty/plugins/modifier.date_format.php';
?><div class=" col-xs-12 col-sm-12 col-md-12 col-lg-4">
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>

	<div id="special_products_home" class="pos-content">
		<div class="pos-title">
			<h2>
				<span><?php echo smartyTranslate(array('s'=>'Deal','mod'=>'posspecialsproducts'),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'of the days','mod'=>'posspecialsproducts'),$_smarty_tpl);?>

			</h2>
		</div>
		<div class="block_content">
			<div class="row">
				<div id="pos-special-products">
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%1==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>
					<div class="item-special">
				<?php }?>
					<div class="item-product">
						<div class="products-inner">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" class="content_img clearfix">
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
"
									class="img-responsive" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"/>
							</a>
						</div>
						<div class="product-contents">
							<div class="countdown" >
								<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']&&smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],"%Y")!=0) {?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'timecountdown','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
  
									<span id="future_date_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_category_default'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" data-time ='
								   <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],"%Y");?>
 ,<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],"%m");?>
-1 ,<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],"%d");?>
,<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],"%H");?>
, <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],"%M");?>
, <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],"%S");?>
' class="id_countdown">  </span>
								<?php }?>
							</div>
							
							<p class="product-desc" itemprop="description">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...');?>

							</p>
					
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
							<h5 class="product-name">
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
">
								<?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
<br/>
								</a>
							</h5>
							<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
						
							<div  class="price-box">
								<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
					
									<span class="price product-price">
										<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
									</span>
									<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
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

								<?php }?>
							
							</div>	
							<?php }?>
								
							<div class="actions">														
								<div class="actions-inner">
									<div class="cart">
										<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
										<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
										<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
											<a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp9=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp9."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posspecialsproducts'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
												<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posspecialsproducts'),$_smarty_tpl);?>
</span>
												
											</a>
										<?php } else { ?>
										<a class="button ajax_add_to_cart_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$product.id_product|intval}',false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posspecialsproducts'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
											<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posspecialsproducts'),$_smarty_tpl);?>
</span>
										</a>
										   <?php }?>      
										<?php } else { ?>
										<span class="button ajax_add_to_cart_button btn btn-default disabled" >
											<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posspecialsproducts'),$_smarty_tpl);?>
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
" title="<?php echo smartyTranslate(array('s'=>'Add to Compare','mod'=>'posspecialsproducts'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Compare','mod'=>'posspecialsproducts'),$_smarty_tpl);?>

										
										  </a>
										 <?php }?>
										</li>
										<li>
											<?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
												<a class="quick-view" title="<?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'posspecialsproducts'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
													<span><?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'posspecialsproducts'),$_smarty_tpl);?>
</span>
												</a>
											<?php }?>
										</li>
									</ul>
								</div>
							</div>	

						</div>	
						
					</div>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%1==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>
					</div>
				<?php }?>
				<?php } ?>
				</div>
			</div>
			
		</div>
	</div>
</div>
<?php }?>
<script>


    $(document).ready(function() {
     
    var owl = $("#pos-special-products");
     
   		owl.owlCarousel({
			items : <?php echo $_smarty_tpl->tpl_vars['slider_options']->value['number_item'];?>
,
			itemsDesktop : [1199,<?php echo $_smarty_tpl->tpl_vars['slider_options']->value['items_md'];?>
],
			itemsDesktopSmall : [991,<?php echo $_smarty_tpl->tpl_vars['slider_options']->value['items_sm'];?>
],
			itemsTablet: [767,<?php echo $_smarty_tpl->tpl_vars['slider_options']->value['items_xs'];?>
],
			itemsMobile : [479,<?php echo $_smarty_tpl->tpl_vars['slider_options']->value['items_xxs'];?>
],
			autoPlay :  <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['auto_play']) {?><?php if ($_smarty_tpl->tpl_vars['slider_options']->value['auto_time']) {?><?php echo $_smarty_tpl->tpl_vars['slider_options']->value['auto_time'];?>
<?php } else { ?>3000<?php }?><?php } else { ?> false<?php }?>,
			stopOnHover: <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['pausehover']) {?> true <?php } else { ?> false <?php }?>,
			slideSpeed : <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['speed_slide']) {?><?php echo $_smarty_tpl->tpl_vars['slider_options']->value['speed_slide'];?>
<?php } else { ?>1000<?php }?>,
			addClassActive: true,
			scrollPerPage: <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['move']) {?> false <?php } else { ?> true <?php }?>,
			navigation : <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['show_arrow']) {?> true <?php } else { ?> false <?php }?>,
			pagination : <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['show_pagination']) {?> true <?php } else { ?> false <?php }?>,
		});
    });
</script><?php }} ?>
