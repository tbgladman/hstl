<?php 
/* Template Name: Sharing Template */

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
$innovate_authors			= get_field('innovate_authors');
$innovate_contact			= get_field('innovate_contact');
$innovate_website			= get_field('innovate_website');

	get_header();
 ?>
 
 <!-- SHARING HEADER
 ===================================== -->
 <?php if( has_post_thumbnail() ) { //check for feature image ?>
 
 <section class="feature-image" style="background: url('<?php echo($thumbnail_url) ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
 <h1 class="page-title"><?php the_title(); ?><br /><small>From Teachers to Teachers</small></h1>
 </section>
 
 <?php } else { //fallback image ?>
 
 <section class="feature-image feature-image-default" data-type="background" data-speed="2">
 <h1 class="page-title"><?php the_title(); ?><br /><small>From Teachers to Teachers</small></h1>
 </section>
 
 <?php } ?>
 
 <!--SHARED INNOVATIONS
 ================================== -->
 
 <div class="container">
 	<div class="row" id="innovations">

 		<section class="main-content">
 			 <div class="col-sm-8">					 	
 				<?php $loop = new WP_Query( array( 'post_type' => 'innovation', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
 					 <?php while ( $loop->have_posts()) : $loop->the_post(); ?>
 

 					 <header class="entry-header">
 					 	<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
 					 </header><!-- .entry-header -->
 					 

 					 <div class="post-details">
 					 	<i class="fa fa-user"></i> <a href="mailto:<?php the_field('innovate_contact'); ?>"><?php the_field('innovate_authors'); ?></a>
 					 	<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
 					 	<i class="fa fa-folder"></i> <?php the_category(', '); ?>
 					 	<i class="fa fa-tags"></i> <?php the_tags('', ', ', ''); ?>
 					 </div>
 					 <p></p>
 					
 					  	 <?php 
 					  	 	if ( has_post_thumbnail() ) {
 					  	 		the_post_thumbnail( array(640, 480));
 					  	 	} else { echo '<img src="' .  get_bloginfo('stylesheet_directory') . '/assets/images/VirusCellsBackground.jpg" height="480px" width="640px" />';}
 					  	 ?>
 					  
						<div class="post-body">
							
							<?php the_content(); ?>
							<?php
							 	if (!empty($innovate_website)) { ?>
							 	<p><a href="<?php the_field('innovate_website'); ?>" target="_blank">Visit the website</a></p> 
							 <?php } ?>
							
						</div><!--post-body-->
 				 					
 				 	<?php endwhile; wp_reset_query(); ?>		 
 						  						 	 						 	  						 
 				</div><!--col-sm-8-->
 		
 			</section><!-- /.main-content -->
 				
			<!-- SIDEBAR		
			================================== -->		
					<aside class="col-sm-4">
						<?php dynamic_sidebar( 'sidebar-innovate' ); ?>
					</aside>
 		 			
 	</div><!--row-->	
 	
 </div><!--container-->
 			
	
 
  			
 
 <!-- SUBMISSION FORM 
 ================================== -->
 <section class="main-content" id="submission-form">
 	<div class="container">
 	
 	<div class="row" id="primary">
 		<div id="content" class="col-sm-12">
  			
 			<p>Do you have an innovation in teaching and learning you would like to share with your colleagues? Please complete the form below with details about your innovation and how it has enhanced your students' learning, and we will post it for other staff to learn from. Thanks!</p>
 									
 					<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 4, 'title' => false, 'description' => false ) ); ?>
 			
 	</div><!-- /.container -->
 </section><!-- /.main-content -->
 

 
 <?php get_footer(); ?>
