<?php

/*
	Template Name: MEA Research Page
*/
 
//Custom Fields

$journal_section_title			= get_field('journal_section_title');
$collaborate_section_title		= get_field('collaborate_section_title');
$staff_pubs_section_title		= get_field('staff_pubs_section_title');
$meded_news_section_title		= get_field('meded_news_section_title');

 get_header();?>
 
 <!-- RESEARCH HEADER
 	===================================== -->
 	<?php if( has_post_thumbnail() ) { //check for feature image ?>
 	
 	<section class="feature-image" style="background: url('<?php echo($thumbnail_url) ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
 	<h1 class="page-title"><?php the_title(); ?></h1>
 	</section>
 	
 	<?php } else { //fallback image ?>
 	
 	<section class="feature-image feature-image-default" data-type="background" data-speed="2">
 	<h1 class="page-title"><?php the_title(); ?></h1>
 	</section>
 	
 	<?php } ?>
 
 <!-- Main Content		
 	================================== -->
  	
  	<div class="container">
  		<div class="row" id="primary">
  		
  			<div id="content" class="col-sm-12">
  			
  				<section class="main-content">
  				
  					<?php while ( have_posts() ) : the_post(); ?>
  						
  						<?php the_content(); ?>
  							
  					<?php endwhile; wp_reset_query(); //end of the loop ?>
  				
  				</section><!--main-->
  			</div><!--colsm12-->
  		</div><!--row-->
  	</div><!--container-->
  			
   
   	<!-- JOURNALS		
 	================================== -->
 	<section id="meded-journals">
 		<div class="container">
 	
 			<h2><?php echo($journal_section_title) ?></h2>
 	
 				<?php $loop = new WP_Query( array( 'post_type' => 'research', 'category_name' => 'journals', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
 					
 				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
 									
 				<div class="row">
 					<?php
 							$journal_image			=	get_field('journal_image');
 							$journal_website		=	get_field('journal_website');	
 							$journal_description	=	get_field('journal_description');
 						?>
 					
 						<div class="col-sm-2">
 									
 							<img src="<?php echo ($journal_image['url']); ?>" alt="<?php echo ($journal_image['alt']); ?>" />
 										
 						</div><!--colsm2-->
 							
 						<div class="col-sm-10">
 							<h3><a href="<?php echo($journal_website); ?>" target="_blank"><?php the_title(); ?></a></h3>
 							<p><?php echo($journal_description);?>
 							</p>
 							
 						</div><!--colsm10-->
 							
 					</div><!-- row -->	
 						<hr />		
 					
 					<?php endwhile; wp_reset_query(); ?> 	
 	
		</div><!--container-->
 	</section><!--meded-journals-->
 	
 	
 	<!-- COLLABORATE		
 		================================== -->
 		<section id="meded-collaborate">
 			<div class="container">

 		
 				<h2><?php echo($collaborate_section_title) ?></h2>
 		
 					<?php $loop = new WP_Query( array( 'post_type' => 'research', 'category_name' => 'collaboration', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
 							
 						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
 											
 						<div class="row">
 							<?php
 									$collaborate_opportunities	=	get_field('collaborate_opportunities');
 								?>
 							
 								<div class="col-sm-12">
 								
 									<h3><?php the_title(); ?></h3>			
  									<p><?php echo($collaborate_opportunities);?>
 									</p>
 									
 								</div><!--colsm12-->
 									
 							</div><!-- row -->	
 								<hr />		
 							
 							<?php endwhile; wp_reset_query(); ?> 	
 					
 		
 			</div><!--container-->
 		</section><!--meded-collaborate-->
 	
 	
 	<!-- PUBLICATIONS		
 		================================== -->
 		<section id="staff-pubs">
 			<div class="container">
 		
 				<h2><?php echo($staff_pubs_section_title) ?></h2>
 		
 					<?php $loop = new WP_Query( array( 'post_type' => 'research', 'category_name' => 'publications', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
 							
 						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
 											
 						<div class="row">
 							<?php
 									$reference_information		=	get_field('reference_information');
 									$reference_description		=	get_field('reference_description');	
 								?>
 							
 								<div class="col-sm-12">
 											
 									<h3><?php the_title(); ?></h3>
 									<p><?php echo($reference_information);?>
 										</p>
 									<p><?php echo($reference_description);?>
 									</p>
 									
 								</div><!--colsm12-->
 									
 							</div><!-- row -->	
 								<hr />		
 							
 							<?php endwhile; wp_reset_query(); ?> 	
 					

 			</div><!--container-->
 		</section><!--staff-pubs-->
 	
 	
 	<!-- IN THE NEWS		
 		================================== -->
 		<section id="otago-mednews">
 			<div class="container">
 		
 				<h2><?php echo($meded_news_section_title) ?></h2>
 		
 					<?php $loop = new WP_Query( array( 'post_type' => 'research', 'category_name' => 'news', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
 							
 						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
 											
 						<div class="row">
 							<?php
 									$news_link			=	get_field('news_link');	
 									$news_description	=	get_field('news_description');
 								?>
 							
 							 	<div class="col-sm-12">
 									<h3><a href="<?php echo($news_link); ?>" target="_blank"><?php the_title(); ?></a></h3>
 									<p><?php echo($news_description);?>
 									</p>
 									
 								</div><!--colsm12-->
 									
 							</div><!-- row -->	
 								<hr />		
 							
 							<?php endwhile; wp_reset_query(); ?> 	
 						
 			</div><!--container-->
 		</section><!--otago-mednews-->
 		

<!-- SUBPAGE LINKS		
================================== -->
<section class="main-content" id="mea_sublinks">
<div class="container">
	<div class="row">
	
		<div class="col-sm-6">
			<a href="/staff-development"><img src="/wp-content/themes/hstl/assets/images/staff_development_button.png" alt="Staff development icon"></a>
		</div>
	
		<div class="col-sm-6">
			<a href="/staff-development/teaching-and-learning-resources/"><img src="/wp-content/themes/hstl/assets/images/mea_resources.png" alt="teaching and learning resources icon"></a>
		</div>
														
				</div><!-- row -->
					
		</div><!-- /.container -->
</section><!-- /.main-content -->

 
 
 <?php get_footer(); ?>