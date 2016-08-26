<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MWH
 */

?>
<div class="clear"></div>
	<footer class="footer">
	  <div class="container">
	     <div class="row">
		   <div class="col-md-10">
               

                            <?php
									wp_nav_menu( array(
										'theme_location' => 'footer_menu',
										'menu_class'     => 'ft_links'
                                    
									) );
								?>
               
	
			
		   </div>

		   <div class="col-md-2">
		     <div class="social_links">
	<?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
			 </div>
		   </div>
		   <div class="col-md-12">
		    <p class="copyright">Copyright &copy; <?php echo date("Y"); ?> MWH Global, Inc.</p>
		</div>
		 </div>
      </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
