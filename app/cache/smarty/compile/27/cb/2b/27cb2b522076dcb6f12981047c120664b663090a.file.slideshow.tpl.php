<?php /* Smarty version Smarty-3.1.19, created on 2017-07-16 20:58:23
         compiled from "/Users/nicotudela/work/workspace/avisistemas/app/themes/pos_haxico4/modules/posslideshow/slideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2056546237596bfd9f8eae89-06598003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27cb2b522076dcb6f12981047c120664b663090a' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/app/themes/pos_haxico4/modules/posslideshow/slideshow.tpl',
      1 => 1498952572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2056546237596bfd9f8eae89-06598003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'height_loading' => 0,
    'slides' => 0,
    'slide' => 0,
    'slideOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596bfd9f945d01_16282725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596bfd9f945d01_16282725')) {function content_596bfd9f945d01_16282725($_smarty_tpl) {?>
<div class="pos-slideshow">
	<div class="flexslider ma-nivoslider">
        <div class="pos-loading" style="height: <?php echo $_smarty_tpl->tpl_vars['height_loading']->value;?>
px;"><span></span></div>
			
            <div id="pos-slideshow-home" class="slides">
				
                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
					
                    <?php if ($_smarty_tpl->tpl_vars['slide']->value['link']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
"><?php }?><img style ="display:none" src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
"  data-thumb="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
"  alt="" title="#htmlcaption<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_pos_slideshow'];?>
"  /><?php if ($_smarty_tpl->tpl_vars['slide']->value['link']) {?></a><?php }?>
			   <?php } ?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_caption']!=0) {?>
                <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
                    <div id="htmlcaption<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_pos_slideshow'];?>
" class="pos-slideshow-caption nivo-html-caption nivo-caption">
							<div class="timethai" style=" 
								position:absolute;
								z-index:8;
								bottom:-5px;
								left:0;
								background-color: rgba(138, 190, 38, 1);
								height:3px;
								-webkit-animation: myfirst <?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['pause_time'];?>
ms ease-in-out;
								-moz-animation: myfirst <?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['pause_time'];?>
ms ease-in-out;
								-ms-animation: myfirst <?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['pause_time'];?>
ms ease-in-out;
								animation: myfirst <?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['pause_time'];?>
ms ease-in-out;
							
							">
							</div>
				
							<div class="pos-slideshow-content ">
								<div class="container">						
									<div class="pos_description">
											<?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

									</div>
								
								</div>	
							</div>
								
                    </div>
                 <?php } ?>
             <?php }?>
        </div>
    </div>

 <script type="text/javascript">
	
    $(window).load(function() {
		$(document).off('mouseenter').on('mouseenter', '.pos-slideshow', function(e){
		$('.pos-slideshow .timethai').addClass('pos_hover');
	});
	 $(document).off('mouseleave').on('mouseleave', '.pos-slideshow', function(e){
	   $('.pos-slideshow .timethai').removeClass('pos_hover');
	 });
        $('#pos-slideshow-home').nivoSlider({
			effect: '<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['animation_type']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['animation_type'];?>
<?php } else { ?>random<?php }?>',
			slices: 15,
			boxCols: 8,
			boxRows: 4,
			animSpeed: '<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['animation_speed']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['animation_speed'];?>
<?php } else { ?>600<?php }?>',
			pauseTime: '<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['pause_time']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['pause_time'];?>
<?php } else { ?>5000<?php }?>',
			startSlide: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['start_slide']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['start_slide'];?>
<?php } else { ?>0<?php }?>,
			directionNav: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_arrow']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_arrow'];?>
<?php } else { ?>false<?php }?>,
			controlNav: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_navigation']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_navigation'];?>
<?php } else { ?>false<?php }?>,
			controlNavThumbs: false,
			pauseOnHover: true,
			manualAdvance: false,
			prevText: '<i class="icon-chevron-left"></i>',
			nextText: '<i class="icon-chevron-right"></i>',
			afterLoad: function(){
			 $('.pos-loading').css("display","none");
			},     
			beforeChange: function(){ 
				$('.bannerSlideshow1').removeClass("pos_in"); 
				$('.bannerSlideshow2').removeClass("pos_in"); 
				$('.bannerSlideshow3').removeClass("pos_in"); 
				$('.nivo-imageLink').css("background-color","red");
			}, 
			afterChange: function(){ 
				 $('.bannerSlideshow1').addClass("pos_in"); 
				$('.bannerSlideshow2').addClass("pos_in"); 
				$('.bannerSlideshow3').addClass("pos_in"); 
			}
 		});
    });
</script>
 <script type="text/javascript">
 $(document).ready(function() {
	//Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	//Variables on page load 
	var $myCarousel = $('.ma-nivoslider'),
		$firstAnimatingElems = $myCarousel.find('.nivo-caption').find("[data-animation ^= 'animated']");
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);

});
</script><?php }} ?>
