<?php
/*
Template Name: Capabilities Page
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

            <section class="capa_main">
                <div class="container">

                    <?php
global $post;
$args = array('post_type' => 'capabilities','posts_per_page'=>-1,'order'=>'DESC');
$posts = get_posts( $args );
foreach( $posts as $post ): setup_postdata($post); 
?>

<div class="row cp_list">
    
  <div class="col-md-3 cg_grid">
<span class="cg_img">  
    <a href="<?php the_permalink();?>">
<?php
 
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
else {
    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
        . '/images/thumbnail-default.jpg" />';
}
?>
        </a>
        </span>
            </div>
                            <div class="col-md-9 cg_grid">
                                <span class="cg_title"> <a href="<?php the_permalink();?>"><?php the_title(); ?></a></span></span>
                                <span class="cg_desc"> <?php $content = get_the_content(); echo substr($content, 0, 400) . ' [...]'; ?> </span>
                            </div>
                        </div>


                
                        <?php endforeach; ?>
                    <?php wp_reset_query(); ?>
                
                
                
                </div>
            </section>

<section class="posts_sec">
	    <div class="container">
	     <div class="row">
		    <div class="col-md-12"><h3 class="hdg">Related Assets</h3></div>
         </div>
		 <div class="row posts">
<?php
global $post;
            
$args = array('post_type' => 'post','posts_per_page'=>4,'order'=>'DESC');
             
$posts = get_posts( $args );

foreach( $posts as $post ): setup_postdata($post); 
$categories = get_the_category();             
?>
		    <div class="col-md-3 col-sm-6 col-xs-12 post_grid">
	
			      <span class="tag"><?php echo $categories[0]->name;?></span>
				  <span class="cg_img"><span class="img_hovr"><span><a href="<?php the_permalink();?>">VIEW MORE</a></span></span>
                      
                  <?php                                        
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
else {
    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
        . '/images/thumbnail-default.jpg" />';
}
?>
                   </span>
				  <span class="cg_title"><?php the_title();?></span>
				  <span class="cg_desc"><?php $content = get_the_content(); echo substr($content, 0, 350) . ' [...]'; ?></span>
                <a href="<?php the_permalink();?>"><span class="cm_btn">View More</span></a>
			
		    </div>
             <?php endforeach; ?>
                    <?php wp_reset_query(); ?>
		 </div>
	   </div>	
	</section>

            <?php get_footer();?>