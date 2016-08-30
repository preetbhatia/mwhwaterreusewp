<?php /* Template Name: Home */ get_header(); ?>
<section class="banner home"> <img alt="" src="<?php echo get_field("header_banner_background_image"); ?>">
    <div class="bnr_data">
        <div><img alt="" src="<?php echo get_field("header_banner_logo"); ?>"></div>
        <h1><?php echo get_field( "header_banner_title" ); ?></h1>
        <h2><?php echo get_field( "header_banner_sub_title" ); ?></h2> </div>
</section>
<section class="video_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <iframe class="video-embedded" width="458" height="257" src="<?php echo get_field( "add_intro_video" ); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-7">
                <p>
                    <?php echo get_field("add_intro_text"); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="capab_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Capabilities</h2></div>

       
       <?php

// check if the repeater field has rows of data
if( have_rows('capabilities') ):

 	// loop through the rows of data
    while ( have_rows('capabilities') ) : the_row(); ?>
    
    <div class="col-md-6 col-sm-6 col-xs-12 cg_grid capabilities-repeater">
			  <a href="<?php the_sub_field('capability_interior_page_link');?>">
				  <span class="cg_img"><span class="img_hovr"></span><img alt="" src="<?php the_sub_field('capability_image'); ?>"></span>
				  <h3 class="cg_title"><?php the_sub_field('capabilities_title'); ?></h3>
				  <p class="cg_desc"><?php the_sub_field('capability_content'); ?></p>
				  <a class="cm_btn" href="<?php the_sub_field('capability_interior_page_link');?>">View More</a>
        </a>
			</div>
        
<?php
    endwhile;

else :

    // no rows found

endif;

?>
       
       
       
        </div>
    </div>
</section>
<section class="subscribe_sec">
    <h3 class="hdg">Join the Water Reuse Revolution</h3>
    <div class="subs_form">
        <div class="container">
	        <div class="marketo-form">
                <script src="https://app-sj04.marketo.com/js/forms2/js/forms2.min.js"></script>
                <form id="mktoForm_24"></form>
                <script>MktoForms2.loadForm("https://app-sj04.marketo.com", "189-JTA-589", 24);</script>   
	        </div>
        </div>
	</div>	
</section>
<?php
$i=1; 
// check if the repeater field has rows of data
if( have_rows('testimonial_quote') ):?>
<section class="testimonial_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php                
 	                        // loop through the rows of data
                            while ( have_rows('testimonial_quote') ) : the_row(); ?>
                            <div class="item <?php if ($i == 1) echo 'active'; ?>">
                                <div class="testi_box">
                                    <?php  the_sub_field('testimonial_message'); ?>
                                </div>
                                <p class="names">
                                    <?php  the_sub_field('testimonial_user_name'); ?>
                                </p>
                            </div>
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<script type="text/javascript">
if (window.location.href.indexOf("aliId") > -1) {
	window.location.href = "<?php echo site_url();?>/thank-you-signup";
}
</script>
<?php get_footer(); ?>