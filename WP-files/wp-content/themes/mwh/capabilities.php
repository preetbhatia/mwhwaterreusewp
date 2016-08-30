<?php
/*
Template Name: Capabilities Page
*/
get_header();
?>


    <section class="banner"> <img alt="" src="<?php echo get_field("default_page_header_banner_background_image"); ?>">
        <div class="bnr_data">

           
               <?php if( get_field('default_page_header_logo') ): ?>
				<img src="<?php echo get_field( "default_page_header_logo" ); ?>">
				<?php endif; ?>
           
           
            <h1><?php echo get_field( "default_page_header_banner_title" ); ?></h1>
                <?php if( get_field('default_page_header_banner_sub_title') ): ?>
                 <h2><?php echo get_field( "default_page_header_banner_sub_title" ); ?></h2> </div>
                 <?php endif; ?>
    </section>

    <?php if( get_field('default_page_introduction_title') ||  get_field('default_page_introduction_content' ) ): ?>
        <section class="blue_sec">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">




                        <h3><?php echo get_field('default_page_introduction_title') ?></h3>
                        <?php echo get_field('default_page_introduction_content'); ?>


                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

            <section class="capa_main">
                <div class="container">

       <?php

// check if the repeater field has rows of data
if( have_rows('capabilities') ):

 	// loop through the rows of data
    while ( have_rows('capabilities') ) : the_row(); ?>

       <div class="row cp_list">
		    <div class="col-md-3 cg_grid">
		    
				<span class="cg_img"><img alt="" src="<?php the_sub_field('capability_image'); ?>"></span>
			</div>
			<div class="col-md-9 cg_grid">
			   <h2 class="cg_title"><?php the_sub_field('capability_title'); ?></h2>
			   <div class="cg_desc"><?php the_sub_field('capability_content'); ?></div>
			</div>
         </div>
 
<?php
endwhile;
else :
endif;
?>
                
                
                </div>
            </section>

<section class="posts_sec">
	    <div class="container">
	     <div class="row">
		    <div class="col-md-12"><h3 class="hdg">Related Assets</h3></div>
         </div>
		 <div class="row posts">
		 
		 

			   
              
                     <?php

// check if the repeater field has rows of data
if( have_rows('related_assets') ):

 	// loop through the rows of data
    while ( have_rows('related_assets') ) : the_row(); ?>

<div class="col-md-3 col-sm-6 col-xs-12 post_grid">
	
			      <span class="tag"><?php the_sub_field('related_assets_category_tag'); ?></span>
				  <span class="cg_img"><span class="img_hovr"><span><a href="<?php the_sub_field('related_assets_link'); ?>">VIEW MORE</a></span></span>
				  
				  <img alt="" src="<?php the_sub_field('related_assets_image'); ?>">
				  
				  </span>
				  <h2 class="cg_title"><?php the_sub_field('related_assets_title'); ?></h2>
				  <div class="cg_desc"><?php the_sub_field('related_assets_content'); ?></div>
				  <a href="<?php the_sub_field('related_assets_link'); ?>" class="cm_btn">View More</a>
 </div>
<?php
endwhile;
else :
echo "<h1 class='text-center'>Not Found!</h1>";
endif;
?>
              
              
              
			
		    
		    
		    
		    
		 </div>
	   </div>	
	</section>

            <?php get_footer();?>