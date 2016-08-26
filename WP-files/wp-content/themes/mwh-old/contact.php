<?php
/*
Template Name: Contact Us Page
*/
get_header();
?>


    <section class="banner"> <img alt="" src="<?php echo get_field("default_page_header_banner_background_image"); ?>">
        <div class="bnr_data">

            <h2><?php echo get_field( "default_page_header_banner_title" ); ?></h2>
            <h5><?php echo get_field( "default_page_header_banner_sub_title" ); ?></h5> </div>
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
<section class="contact page-contact">
	 <div class="container">
	     <div class="row">
		    <div class="col-md-12">
				<h2>Make Every Drop of Water Count </h2>
				<p>Questions? Submit your information and member of our teamwill get back to you as soon as possible.</p>
				<div class="subs_form">
<script src="http://app-sj04.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_21"></form>
<script>MktoForms2.loadForm("http://app-sj04.marketo.com", "189-JTA-589", 21);</script>

				</div>	
          </div>
         </div>
	   </div>		
	</section>

            <?php get_footer();?>