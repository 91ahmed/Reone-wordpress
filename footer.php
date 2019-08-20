<footer>
  <div class="container">
    <p>Copyright &copy; <?= date('Y') ?> Ahmed Hassan.</p>
  </div>
</footer>

<script src="<?= get_template_directory_uri() ?>/assets/jquery/jquery-3.2.1.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/easing/jquery.easing.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/isotope/jquery.isotope.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/jquery/imagesloaded.pkgd.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/jquery/jquery.magnific-popup.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/number-animation/jquery.animateNumber.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/revolution/js/source/jquery.themepunch.tools.min.js"></script> 
<script src="<?= get_template_directory_uri() ?>/assets/revolution/js/source/jquery.themepunch.revolution.js"></script> 
<script src="<?= get_template_directory_uri() ?>/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script> 
<script src="<?= get_template_directory_uri() ?>/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script> 
<script src="<?= get_template_directory_uri() ?>/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script src="<?= get_template_directory_uri() ?>/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script src="<?= get_template_directory_uri() ?>/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script> 
<script src="<?= get_template_directory_uri() ?>/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
<script src="<?= get_template_directory_uri() ?>/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script> 
<script src="<?= get_template_directory_uri() ?>/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script src="<?= get_template_directory_uri() ?>/assets/revolution/js/extensions/revolution.extension.video.min.js"></script> 
<script>
	var revapi;
	jQuery(document).ready(function() {		
		revapi = jQuery("#rev_slider").revolution({
			sliderType:"standard",
			sliderLayout:"auto",
			fullScreenOffsetContainer:".header",
			delay:5000,
			navigation: {
				arrows:{enable:true}				
			},			
			responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
           gridwidth: [1240, 1024, 778, 480],
           gridheight: [620, 520, 580, 480],
		   
		});		
	});
</script> 
<script src="<?= get_template_directory_uri() ?>/assets/contact-form/js/validator.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/contact-form/js/form-scripts.js"></script>

<script src="<?= get_template_directory_uri() ?>/assets/jquery/plugins.js"></script>
<script src="<?= get_template_directory_uri() ?>/js/custom.js"></script>		
		
		<?php wp_footer(); ?>

<script type="text/javascript">
	$(document).ready(function(){
		$("img[alt='www.000webhost.com']").remove();
	});
</script>
	</body>
</html>