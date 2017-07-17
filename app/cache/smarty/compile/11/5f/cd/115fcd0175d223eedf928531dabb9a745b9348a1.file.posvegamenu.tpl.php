<?php /* Smarty version Smarty-3.1.19, created on 2017-07-16 20:58:23
         compiled from "/Users/nicotudela/work/workspace/avisistemas/app/modules/posvegamenu/posvegamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1560656549596bfd9f7fe7e2-97907199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '115fcd0175d223eedf928531dabb9a745b9348a1' => 
    array (
      0 => '/Users/nicotudela/work/workspace/avisistemas/app/modules/posvegamenu/posvegamenu.tpl',
      1 => 1498952573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1560656549596bfd9f7fe7e2-97907199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'megamenu' => 0,
    'effect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596bfd9f816a13_14764189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596bfd9f816a13_14764189')) {function content_596bfd9f816a13_14764189($_smarty_tpl) {?>
<div class="navleft-container visible-lg visible-md ">
	<div class="pt_vmegamenu_title">
		<h2><i class="icon-reorder"></i><?php echo smartyTranslate(array('s'=>'All categories','mod'=>'posvegamenu'),$_smarty_tpl);?>
</h2>
	</div>
    <div id="pt_vmegamenu" class="pt_vmegamenu">
        <?php echo $_smarty_tpl->tpl_vars['megamenu']->value;?>

    </div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'more_categories')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'More Categories','mod'=>'posvegamenu','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'close_categories')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'close_categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Close Categories','mod'=>'posvegamenu','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'close_categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="clearfix"></div>

<script type="text/javascript">
//<![CDATA[
var VMEGAMENU_POPUP_EFFECT = <?php echo $_smarty_tpl->tpl_vars['effect']->value;?>
;
//]]>

$(document).ready(function(){
    $("#pt_ver_menu_link ul li").each(function(){
        var url = document.URL;
        $("#pt_ver_menu_link ul li a").removeClass("act");
        $('#pt_ver_menu_link ul li a[href="'+url+'"]').addClass('act');
    }); 
        
    $('.pt_menu').hover(function(){
        if(VMEGAMENU_POPUP_EFFECT == 0) $(this).find('.popup').stop(true,true).slideDown('slow');
        if(VMEGAMENU_POPUP_EFFECT == 1) $(this).find('.popup').stop(true,true).fadeIn('slow');
        if(VMEGAMENU_POPUP_EFFECT == 2) $(this).find('.popup').stop(true,true).show('slow');
    },function(){
        if(VMEGAMENU_POPUP_EFFECT == 0) $(this).find('.popup').stop(true,true).slideUp('fast');
        if(VMEGAMENU_POPUP_EFFECT == 1) $(this).find('.popup').stop(true,true).fadeOut('fast');
        if(VMEGAMENU_POPUP_EFFECT == 2) $(this).find('.popup').stop(true,true).hide('fast');
    })
	var count_block = $('.pt_menu_block').length; 
	var number_blocks = 6 ;
	 if(count_block < number_blocks) return false; 
	$('.pt_menu_block').each(function(i,n){
		if(i == number_blocks) {
		$(this).parent().append('<div class="view_more"><i class="icon-plus-circle"></i>'+ more_categories +'</div>');
		}
		if(i> number_blocks) {
		  $(this).addClass('hide_menu_block');
		}
		
	})
	$('.hide_menu_block').hide();
	$('.view_more').click(function() {
			$(this).toggleClass('show');
			if($(this).hasClass('show')){
				$(this).addClass('open_menu');
				$(this).html('<em class="closed-menu"><i class="icon-minus-circle"></i>'+ close_categories +'</em>');
				$('.hide_menu_block').slideDown();	
			}
			else
			{
				$(this).removeClass('open_menu').addClass('close_menu');
				$(this).html('<em class="closed-menu"><i class="icon-plus-circle"></i>'+ more_categories +'</em>'); 
				$('.hide_menu_block').slideUp();
				
			}
	
	});
	
});
   	$(function(){
		$('.pt_vmegamenu_title').click(function(){
			$(this).parent().find('.pt_vmegamenu').slideToggle('fast');
		
			});	
		});
</script>
<?php }} ?>
