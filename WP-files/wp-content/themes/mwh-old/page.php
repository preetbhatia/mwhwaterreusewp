<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MWH
 */

get_header(); ?>
    <section class="banner"> <img alt="" src="<?php echo get_field("default_page_header_banner_background_image"); ?>">
        <div class="bnr_data">

            <h2><?php echo get_field( "default_page_header_banner_title" ); ?></h2>
            <h5><?php echo get_field( "default_page_header_banner_sub_title" ); ?></h5> </div>
    </section>

<div class="default-page">
<div class="container">
<div class="row">
<div class="col-md-12">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
    </div>
    </div>
</div>
</div>
<?php
get_footer();
