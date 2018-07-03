<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bcodes
 */
global $opt_settings;
?>
	<div class="footer section-padding">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12 col-sm-12 text-center wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
	                    <div class="footer_logo">
	                        <a href="#">
	                            <img width='250' src="<?php echo $opt_settings['logo']['url'] ;?>" alt="">
	                        </a>
	                    </div>
	                    <div class="footer_social">
	                        <ul>
	                        	<li class='wow bounceInDown' style='animation-delay: 0.1s;'><a href='#'><i class='fa fa-facebook t_facebook'></i></a></li>
                                <li class='wow bounceInDown' style='animation-delay: 0.2s;'><a href='#'><i class='fa fa-twitter t_twitter'></i></a></li>
                                <li class='wow bounceInDown' style='animation-delay: 0.3s;'><a href='#'><i class='fa fa-google-plus t_gplus'></i></a></li>
                                <li class='wow bounceInDown' style='animation-delay: 0.4s;'><a href='#'><i class='fa fa-linkedin t_linkedin'></i></a></li>
                                <li class='wow bounceInDown' style='animation-delay: 0.5s;'><a href='#'><i class='fa fa-youtube t_youtube' ></i></a></li>
                                <li class='wow bounceInDown' style='animation-delay: 0.6s;'><a href='#'><i class='fa fa-skype t_skype'></i></a></li>
	                        </ul>
	                    </div>
	                    <div class="copyright">
	                        <p>Copyright © 2018 PT.Bcodes Tekno Artisan | All Rights Reserved </p>
	                    </div><!--- END FOOTER COPYRIGHT -->
	                </div><!--- END COL -->
	            </div><!--- END ROW -->
	        </div><!--- END CONTAINER -->
	    </div>

	</div><!-- #content -->
</div><!-- #page -->
<div id="topcontrol" class="topcontrol" style="display: none">
    <i class="fa fa-angle-up scrolltop"></i>
</div>

<?php wp_footer(); ?>

</body>
<script>

	
</script>
</html>
