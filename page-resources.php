<?php 
/*
	Template Name: eLearning Resources Page
*/

get_header();

 $thumbnail_url			=	wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
 
 $software_title		=	get_field('software_title');
 $software_desc			=	get_field('software_description');
 $mobile_title			=	get_field('mobile_title');
 $mobile_desc			=	get_field('mobile_description');
 $web_title				=	get_field('web_title');
 $web_desc				=	get_field('web_description');
 $hardware_title		=	get_field('hardware_title');
 $hardware_desc			=	get_field('hardware_description');
 
  ?>
 

 
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

<!-- MAIN CONTENT		
================================== -->

<div class="container">
	<div class="row" id="primary">
	
		<div id="content" class="col-sm-12">
		
			<section class="main-content">
				
				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php the_content(); ?>
					
				<?php endwhile; //end of the loop ?>
		
			</section><!-- /.main-content -->
		
			<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
			  <li role="presentation" class="active"><a href="#software" data-toggle="tab">Software</a></li>
			  <li role="presentation"><a href="#mobile" data-toggle="tab">Mobile Apps</a></li>
			  <li role="presentation"><a href="#web" data-toggle="tab">Websites</a></li>
			  <li role="presentation"><a href="#hardware" data-toggle="tab">Hardware</a></li>
			</ul>
				
<div id="my-tab-content" class="tab-content">		
		
<!-- DESKTOP APPS		
================================== -->
		
	<div class="tab-pane active" id="software">
				
	<h2><?php echo($software_title) ?></h2>
	
	<?php if( !empty($software_desc) ) : ?>
	<?php echo($software_desc); ?>
	<?php endif; ?>
			
	<?php $loop = new WP_Query( array( 'post_type' => 'digital_resources', 'category_name' => 'software', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
		
		<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
		
		<div class="row">
		
			<?php
				$software_image			=	get_field('software_image');
				$software_link			=	get_field('software_link');	
				$software_button_text	=	get_field('software_button_text');
			?>
		
			<div class="col-sm-4">
						
				<img src="<?php echo ($software_image['url']); ?>" alt="<?php echo ($software_image['alt']); ?>" />
							
				</div><!--colsm4-->
				
				<div class="col-sm-8">
				<h3><a href="<?php echo($software_link); ?>" target="_blank"><?php the_title(); ?></a></h3>
				<p><?php the_content();?>
				</p>
				
				<?php if( !empty($software_button_text) ) : ?>
				<a href="<?php echo($software_link); ?>" target="_blank" class="btn btn-success"><?php echo($software_button_text) ?></a>
				<?php endif; ?>
				
				</div><!--colsm8-->
				
		</div><!-- row -->	
			<hr />		
		
		<?php endwhile; wp_reset_query(); ?>
				
	</div><!--software-->

	
<!-- MOBILE APPS		
================================== -->
	
	<div class="tab-pane" id="mobile">		
		
			<h2><?php echo($mobile_title) ?></h2>
			
			<?php if( !empty($mobile_desc) ) : ?>
			<?php echo($mobile_desc); ?>
			<?php endif; ?>	
			
			<?php $loop = new WP_Query( array( 'post_type' => 'digital_resources', 'category_name' => 'mobile', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
				
			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
								
			<div class="row">
				<?php
						$mobile_image			=	get_field('mobile_image');
						$mobile_link			=	get_field('mobile_link');	
						$mobile_button_text		=	get_field('mobile_button_text');
					?>
				
					<div class="col-sm-4">
								
						<img src="<?php echo ($mobile_image['url']); ?>" alt="<?php echo ($mobile_image['alt']); ?>" />
									
						</div><!--colsm4-->
						
						<div class="col-sm-8">
						<h3><a href="<?php echo($mobile_link); ?>" target="_blank"><?php the_title(); ?></a></h3>
						<p><?php the_content();?>
						</p>
						
						<?php if( !empty($mobile_button_text) ) : ?>
						<a href="<?php echo($mobile_link); ?>" target="_blank" class="btn btn-success"><?php echo($mobile_button_text) ?></a>
						<?php endif; ?>
						
						</div><!--colsm8-->
						
						
				</div><!-- row -->	
					<hr />		
				
				<?php endwhile; wp_reset_query(); ?>					
			</div><!--mobile-->				
	
	<!-- WEB APPS		
	================================== -->
						
		<div class="tab-pane" id="web">
			
				<h2><?php echo($web_title) ?></h2>
				
				<?php if( !empty($web_desc) ) : ?>
				<?php echo($web_desc); ?>
				<?php endif; ?>
				
				<?php $loop = new WP_Query( array( 'post_type' => 'digital_resources', 'category_name' => 'websites', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
					
				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
									
				<div class="row">
					<?php
							$web_image			=	get_field('web_image');
							$web_link			=	get_field('web_link');	
							$web_button_text	=	get_field('web_button_text');
						?>
					
						<div class="col-sm-4">
									
							<img src="<?php echo ($web_image['url']); ?>" alt="<?php echo ($web_image['alt']); ?>" />
										
							</div><!--colsm4-->
							
							<div class="col-sm-8">
							<h3><a href="<?php echo($web_link); ?>" target="_blank"><?php the_title(); ?></a></h3>
							<p><?php the_content();?>
							</p>
							
							<?php if( !empty($web_button_text) ) : ?>
							<a href="<?php echo($web_link); ?>" target="_blank" class="btn btn-success"><?php echo($web_button_text) ?></a>
							<?php endif; ?>
							
							</div><!--colsm8-->
							
							
					</div><!-- row -->	
						<hr />		
					
					<?php endwhile; wp_reset_query(); ?>						
			</div><!--web-->
	
	<!-- HARDWARE		
	================================== -->
						
		<div class="tab-pane" id="hardware">
		
				<h2><?php echo($hardware_title) ?></h2>
				
				<?php if( !empty($hardware_desc) ) : ?>
				<?php echo($hardware_desc); ?>
				<?php endif; ?>
				
				<?php $loop = new WP_Query( array( 'post_type' => 'digital_resources', 'category_name' => 'hardware', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 3 ) ); ?>
					
				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<div class="row">
					<?php
							$hardware_image			=	get_field('hardware_image');
							$hardware_link			=	get_field('hardware_link');	
							$hardware_button_text	=	get_field('hardware_button_text');
						?>
					
						<div class="col-sm-4">
									
							<img src="<?php echo ($hardware_image['url']); ?>" alt="<?php echo ($hardware_image['alt']); ?>" />
										
							</div><!--colsm4-->
							
							<div class="col-sm-8">
							<h3><a href="<?php echo($hardware_link); ?>" target="_blank"><?php the_title(); ?></a></h3>
							<p><?php the_content();?>
							</p>
							
							<?php if( !empty($hardware_button_text) ) : ?>
							<a href="<?php echo($hardware_link); ?>" target="_blank" class="btn btn-success"><?php echo($hardware_button_text) ?></a>
							<?php endif; ?>
							
							</div><!--colsm8-->
							
					</div><!-- row -->
						<hr />			
					
					<?php endwhile; wp_reset_query(); ?> 									
 				
 				</div><!--hardware-->
 				
 			</div><!--tab-content-->
 
 		</div><!-- /#content.col-sm-12 -->
 			
 	</div><!-- /#primary.row -->
 	
 </div><!-- /.container -->
 			
		 			
<?php get_footer(); ?>