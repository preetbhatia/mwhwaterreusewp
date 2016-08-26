<?php
/*
Template Name: Thank You
*/
get_header();
?>


    <section class="banner"> <img alt="" src="<?php echo get_field("default_page_header_banner_background_image"); ?>">
        <div class="bnr_data">

            <h1><?php echo get_field( "default_page_header_banner_title" ); ?></h1>
            <h2><?php echo get_field( "default_page_header_banner_sub_title" ); ?></h2> </div>
    </section>



 

    <?php if( get_field('default_page_introduction_title') ||  get_field('default_page_introduction_content' ) ): ?>
<section class="contact page-contact">
	 <div class="container">
	     <div class="row">
		    <div class="col-md-12">
				<h2><?php echo get_field('default_page_introduction_title') ?> </h2>
				<p><?php echo get_field('default_page_introduction_content'); ?></p>
<a class="explore-more" href="<?php echo get_site_url();?>">Continue Exploring Site</a>
          </div>
         </div>
	   </div>		
	</section>
       <?php endif; ?>
            <?php get_footer();?>