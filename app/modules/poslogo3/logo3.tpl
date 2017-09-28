<div class="pos-logo-container pos-content">
	<div class="pos-logo3">
		<div class="pos-title"><h2><span>{l s='Our Brands' mod='poslogo3'}</span></h2></div>
			<div class="container-inner">
				<div class="row">
					<div class="logo3-slider">
						{foreach from=$logos3 item=logo name=posLogo3}
							<div class="item-banklogo">
								<a href ="{$logo.link}">
									<img class="replace-2x img-responsive" src ="{$logo.image}" alt ="{l s='Logo' mod='poslogo3'}" />
								</a>
							</div>
						{/foreach}
					
					</div>
					<div class="boxprevnext">
						<a class="prev prevlogo3"><i class="icon-chevron-left"></i></a>
						<a class="next nextlogo3"><i class="icon-chevron-right"></i></a>
					</div> 
				</div>	
			</div>				
	</div> 
</div>
<script type="text/javascript"> 
		$(document).ready(function() {
			var owl = $(".logo3-slider");
			owl.owlCarousel({
			items :5,
			addClassActive: true,
			pagination : false,
			itemsDesktop : [1199,5],
			itemsDesktopSmall : [911,4],
			itemsTablet: [767,3],
			itemsMobile : [360,2]
			});
			$(".nextlogo3").click(function(){
			owl.trigger('owl.next');
			})
			$(".prevlogo3").click(function(){
			owl.trigger('owl.prev');
			})  
		});
</script>