<?php

/*
	Template Name: MEA Resources Page
*/

//Custom Fields

$learning_events_title			= get_field('learning_events_title');
$learning_resources_title		= get_field('learning_resources_title');
$convenor_resources_title		= get_field('convenor_resources_title');
$clinical_resources_title		= get_field('clinical_resources_title');
 
 get_header();?>
 
 <!-- RESOURCES HEADER
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
		
 	  
 	  <!-- Learning Events		
 	 	================================== -->
 	 	<section id="events">
 	 		<div class="container">
 	 	
 	 			<h2><?php echo($learning_events_title) ?></h2>
 	 				<h3>Local Events</h3>
 	 	
 	 				<?php $loop = new WP_Query( array( 'post_type' => 'tlresources', 'category_name' => 'local-events', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
 	 					
 	 				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
 	 									
 	 				<div class="row">
 	 					<?php
 	 							$event_date			=	get_field('event_date');
 	 							$event_location		=	get_field('event_location');	
 	 							$event_description	=	get_field('event_description');
 	 							$event_url			=	get_field('event_url');
 	 						?>
 	 					
  	 						<div class="col-sm-12">
 	 							<h4><a href="<?php echo($event_url); ?>" target="_blank"><?php the_title(); ?></a></h4>
 	 							<p><?php echo($event_date); ?></p>
 	 							<p><?php echo($event_location); ?></p>
 	 							<p><?php echo($event_description);?>
 	 							</p>
 	 							
 	 						</div><!--colsm12-->
 	 							
 	 					</div><!-- row -->	
 	 						<hr />		
 	 					
 	 					<?php endwhile; wp_reset_query(); ?>
 	 					
 	 					<h3>Events in the Wider Community</h3> 
 	 					
 	 					<?php $loop = new WP_Query( array( 'post_type' => 'tlresources', 'category_name' => 'community-events', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
 	 							
 	 						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
 	 											
 	 						<div class="row">
 	 							<?php
 	 										$event_date			=	get_field('event_date');
 	 										$event_location		=	get_field('event_location');	
 	 										$event_description	=	get_field('event_description');
 	 										$event_url			=	get_field('event_url');
 	 									?>
 	 								
 	 									<div class="col-sm-12">
 	 										<h4><a href="<?php echo($event_url); ?>" target="_blank"><?php the_title(); ?></a></h4>
 	 										<p><?php echo($event_date); ?></p>
 	 										<p><?php echo($event_location); ?></p>
 	 										<p><?php echo($event_description);?>
 	 										</p>
 	 										
 	 									</div><!--colsm12-->
 	 									
 	 							</div><!-- row -->	
 	 								<hr />		
 	 							
 	 							<?php endwhile; wp_reset_query(); ?> 	
 	 	
 			</div><!--container-->
 	 	</section><!--events-->
 	 	
 	 	
 	 	<!-- General Resources		
 	 		================================== -->
 	 		<section id="general-resources">
 	 			<div class="container">
 	 		
				<h2><?php echo($learning_resources_title) ?></h2>
 	 				
 	 				<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
 	 					<li role="presentation" class="active"><a href="#general" data-toggle="tab">General Resources</a></li>
	 	 			  	<li role="presentation"><a href="#assessment" data-toggle="tab">Assessment Resources</a></li>
	 	 			  	<li role="presentation"><a href="#evaluation" data-toggle="tab">Evaluation Resources</a></li>
 	 				</ul>
 	 								
 	 				<div id="my-tab-content" class="tab-content">
 	 				
 	 				<!-- General resources loop	================================== -->
 	 							
					<div class="tab-pane active" id="general">
		
					<?php $loop = new WP_Query( array( 'post_type' => 'tlresources', 'category_name' => 'general-resources', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
							
						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
											
						<div class="row">
							<?php
									$resource_description	=	get_field('resource_description');
									$resource_url			=	get_field('resource_url');
									$resource_file			=	get_field('resource_file');
								?>
							
								<div class="col-sm-12">
								
									<h4><a href="<?php echo($resource_url); ?>" target="_blank"><?php the_title(); ?></a></h4>			
									<p><?php echo($resource_description);?>
									</p>
									
									<?php if( get_field('resource_file') ): ?>
									
										<a href="<?php the_field('resource_file'); ?>" >Download File</a>
									
									<?php endif; ?>
									
								</div><!--colsm12-->
									
							</div><!-- row -->	
								<hr />		
							
							<?php endwhile; wp_reset_query(); ?>
							</div><!--general--> 
 	 				
 	 				
 	 				<!-- Assessment loop	================================== -->
 	 				
 	 					<div class="tab-pane" id="assessment">
 	 		
 	 					<?php $loop = new WP_Query( array( 'post_type' => 'tlresources', 'category_name' => 'assessment', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
 	 							
 	 						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
 	 											
 	 						<div class="row">
 	 							<?php
 	 									$resource_description	=	get_field('resource_description');
 	 									$resource_url			=	get_field('resource_url');
 	 									$resource_file			=	get_field('resource_file');
 	 								?>
 	 							
 	 								<div class="col-sm-12">
 	 								
 	 									<h4><a href="<?php echo($resource_url); ?>" target="_blank"><?php the_title(); ?></a></h4>			
 	 									<p><?php echo($resource_description);?>
 	 									</p>
 	 									
 	 									<?php if( get_field('resource_file') ): ?>
 	 									
 	 										<a href="<?php the_field('resource_file'); ?>" >Download File</a>
 	 									
 	 									<?php endif; ?>
 	 									
 	 								</div><!--colsm12-->
 	 									
 	 							</div><!-- row -->	
 	 								<hr />		
 	 							
 	 							<?php endwhile; wp_reset_query(); ?>
 	 							</div><!--asssessment--> 
 	 							
 	 						<!-- Evaluation loop	================================== -->
 	 						
 	 						<div class="tab-pane" id="evaluation">
 							
 							<?php $loop = new WP_Query( array( 'post_type' => 'tlresources', 'category_name' => 'evaluation', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
 										
 									<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
 														
 									<div class="row">
 										<?php
 												$resource_description	=	get_field('resource_description');
 												$resource_url			=	get_field('resource_url');
 												$resource_file			=	get_field('resource_file');
 											?>
 										
 											<div class="col-sm-12">
 											
 												<h4><a href="<?php echo($resource_url); ?>" target="_blank"><?php the_title(); ?></a></h4>			
 												<p><?php echo($resource_description);?>
 												</p>
 												
 												<?php if( get_field('resource_file') ): ?>
 												
 													<a href="<?php the_field('resource_file'); ?>" >Download File</a>
 												
 												<?php endif; ?>
 												
 											</div><!--colsm12-->
 												
 										</div><!-- row -->	
 											<hr />		
 										
 										<?php endwhile; wp_reset_query(); ?> 
 									</div><!--evaluation-->	
 			
 				</div><!--container-->						 	 		
 	 		</section><!--generalresources-->
 	 	
 	 	
 	 	<!-- Convenor Resources		
 	 		================================== -->
 	 		<section id="convenor-resources">
 	 			<div class="container">
 	 		
 	 		
 	 				<h2><?php echo($convenor_resources_title) ?></h2>
 	 		
 	 					<?php $loop = new WP_Query( array( 'post_type' => 'tlresources', 'category_name' => 'convenor-resources', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
 	 							
 	 						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
 	 												
 	 							<div class="row">
 	 								<?php
 	 										$resource_description	=	get_field('resource_description');
 	 										$resource_url			=	get_field('resource_url');
 	 										$resource_file			=	get_field('resource_file');
 	 									?>
 	 								
 	 									<div class="col-sm-12">
 	 									
 	 										<h3><a href="<?php echo($resource_url); ?>" target="_blank"><?php the_title(); ?></a></h3>			
 	 										<p><?php echo($resource_description);?>
 	 										</p>
 	 										
 	 										<?php if( get_field('resource_file') ): ?>
 	 										
 	 											<a href="<?php the_field('resource_file'); ?>" >Download File</a>
 	 										
 	 										<?php endif; ?>
 	 										
 	 									</div><!--colsm12-->
 	 										
 	 								</div><!-- row -->	
 	 									<hr />		
 	 						
 	 							
 	 							<?php endwhile; wp_reset_query(); ?> 	
 	 					
 	
 	 			</div><!--container-->
 	 		</section><!--convenorresources-->
 	 	
 	 	
 	 	<!-- Clinical Teacher Resources		
 	 		================================== -->
 	 		<section id="clinical-resources">
 	 			<div class="container">
 	 		
 	 		
 	 				<h2><?php echo($clinical_resources_title) ?></h2>
 	 		
 	 					<?php $loop = new WP_Query( array( 'post_type' => 'tlresources', 'category_name' => 'clinical-resources', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
 	 							
 	 						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
 	 												
 	 							<div class="row">
 	 								<?php
 	 										$resource_description	=	get_field('resource_description');
 	 										$resource_url			=	get_field('resource_url');
 	 										$resource_file			=	get_field('resource_file');
 	 									?>
 	 								
 	 									<div class="col-sm-12">
 	 									
 	 										<h3><a href="<?php echo($resource_url); ?>" target="_blank"><?php the_title(); ?></a></h3>			
 	 										<p><?php echo($resource_description);?>
 	 										</p>
 	 										
 	 										<?php if( get_field('resource_file') ): ?>
 	 										
 	 											<a href="<?php the_field('resource_file'); ?>" >Download File</a>
 	 										
 	 										<?php endif; ?>
 	 										
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
 				<a href="/staff-development"><img src="/wp-content/themes/hstl/assets/images/staff_development_button.png" alt="staff development icon"></a>
 				</div>
 				
 				<div class="col-sm-6">
 				<a href="/staff-development/medical-education-research/"><img src="/wp-content/themes/hstl/assets/images/mea_research.png" alt="medical education research icon"></a>
 				</div>
 										
 				</div><!-- row -->
 					
 		</div><!-- /.container -->
 </section><!-- /.main-content -->
 	 		
 	 
<?php get_footer(); ?>