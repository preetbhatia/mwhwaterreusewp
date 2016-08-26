<?php
/*
Template Name: Team Page
*/
get_header();
?>


    <section class="banner"> <img alt="" src="<?php echo get_field("default_page_header_banner_background_image"); ?>">
        <div class="bnr_data">

            <h2><?php echo get_field( "default_page_header_banner_title" ); ?></h2>
            <h5><?php echo get_field( "default_page_header_banner_sub_title" ); ?></h5> </div>
    </section>
<section class="blue_sec">
            <div class="container">
	
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php echo get_field('page_introduction_heading') ?></h3>
                     <?php echo get_field('page_introduction_text'); ?>
                    </div>
                </div>
            </div>
        </section>

    <section class="teams">
        <div class="container">
            <div class="row">
                <ul class="teams_grid_wrap">
                    
    <?php
$i=1; 
// check if the repeater field has rows of data
if( have_rows('add_team_members') ):?>
                    
                        <?php                
 	                      // loop through the rows of data
                         while ( have_rows('add_team_members') ) : the_row(); ?>

                              

                       <li class="first-grid <?php if ($i==1){echo 'first-grid';}elseif($i==2){echo 'second-grid';}elseif($i==3){echo 'third-grid';}elseif($i==4){echo 'fourth-grid';$i=0;}?>">
                                <div class="tg_img">
                                    <a href="javascript:void(0);">
                                        <span class="img_hovr">
				    <span class="hover_data">
					  <b><?php the_sub_field('team_member_name'); ?></b>
					  <span class="line"></span>
                                        <small><?php  the_sub_field('team_member_designation'); ?></small>
                                        </span>
                                        </span>                                
                                        <?php 

$image = get_sub_field('team_member_image');                                                           
if( !empty($image) ): ?>                                    
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
                                        
                                    </a>
                                </div>

                       

                            <div class="full_data">
                                <h4><b><?php the_sub_field('team_member_name'); ?></b> <?php  the_sub_field('team_member_designation'); ?> <a href="#" class="close_btn">close</a></h4>
                                <div class="data_box">
                                    <?php  the_sub_field('team_member_bio'); ?>
                                </div>
                            </div>

                        </li>
                    
                    
                    
                    
                    
                         <?php $i++; ?>
                        <?php endwhile; ?>
                    
 <?php endif; ?>

                </ul>
            </div>
        </div>
    </section>

    <?php get_footer();?>