<?php
/*
Template Name: Contact Us Page
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
				<div class="subs_form">
<div class="market-contact-form">
<script src="https://app-sj04.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_21"></form>
<script>MktoForms2.loadForm("https://app-sj04.marketo.com", "189-JTA-589", 21);</script>                    
</div>
				</div>	
          </div>
         </div>
	   </div>		
	</section>
      
       <?php endif; ?>
              <script type="text/javascript">
		if (window.location.href.indexOf("aliId") > -1) {
	   		window.location.href = "<?php echo site_url();?>/thank-you";
		}
      </script>
            <?php get_footer();?>