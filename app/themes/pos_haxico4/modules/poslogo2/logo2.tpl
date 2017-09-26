<div class="pos-logo-container pos-content">
	<div class="pos-logo2">
		<div class="pos-title"><h2><span>{l s='Our' mod='poslogo2'}</span> {l s='Brands' mod='poslogo2'}</h2></div>
			<div class="container-inner">
				<div class="row">
					<div class="logo2-slider">
						{foreach from=$logos2 item=logo name=posLogo2}
							<div class="item-banklogo">
								<a href ="{$logo.link}">
									<img class="replace-2x img-responsive" src ="{$logo.image}" alt ="{l s='Logo' mod='poslogo2'}" />
								</a>
							</div>
						{/foreach}
					</div>
				</div>	
			</div>				
	</div> 
</div>
<script type="text/javascript"> 
		$(document).ready(function() {
			var owl = $(".logo2-slider");
			owl.owlCarousel({
			items :6,
			addClassActive: true,
			navigation :true,
			slideSpeed :1000,
			pagination : false,
			itemsDesktop : [1199,5],
			itemsDesktopSmall : [911,4],
			itemsTablet: [767,3],
			itemsMobile : [360,2]
			}); 
		});
</script>