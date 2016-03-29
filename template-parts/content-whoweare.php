<?php 
// Custom Fields
$who_we_are_title		= get_field('who_we_are_title');
$who_we_are_body		= get_field('who_we_are_body');
 ?>

<!-- WHO WE ARE
==================================== -->
<section id="staff-intros">

<div class="container">

	<h2><?php echo ($who_we_are_title); ?></h2>
	<p class="lead"><?php echo ($who_we_are_body); ?></p>
	
	<div class="row staff-titles">
		<div class="col-sm-4">
			<h3>Faculty &amp; Medical Education Advisors</h3>
			<!--STAFF INFO-->
			
				<div class="row staff">
				 		 				 		 
				 		 <?php $loop = new WP_Query( array( 'post_type' => 'mea_staff', 'orderby' => 'meta_value', 'meta_key' => 'mea_campus', 'order' => 'ASC' ) ); ?>
				 		 <?php while ( $loop->have_posts()) : $loop->the_post(); ?>
				 		
				 		 <div class="col-sm-5">
				 		  	 <?php 
				 		  	 	if ( has_post_thumbnail() ) {
				 		  	 		the_post_thumbnail( array(90, 90) );
				 		  	 	} else { echo '<img src="' .  get_bloginfo('stylesheet_directory') . '/assets/images/profile_default_l.jpg" height="90px" width="90p" />';}
				 		  	 ?>
				 		  	 </div><!--col-sm-5-->
					 		 
					 		 <div class="col-sm-7">
					 		 <p><strong><?php the_title(); ?></strong><br /><?php the_field('mea_campus'); ?></p>
				 		 </div><!--col-sm-7-->
				 		
				 		<?php endwhile; wp_reset_query(); ?>
			 	</div><!--row staff-->	
			 </div><!--col--> 
					
		<div class="col-sm-4">
			<h3>eLearning Facilitators</h3>
				<!--STAFF INFO-->
					<div class="row staff">
						 
						 <?php $loop = new WP_Query( array( 'post_type' => 'elf_staff', 'orderby' => 'meta_value', 'meta_key' => 'elf_campus', 'order' => 'ASC' ) ); ?>
						 	 <?php while ( $loop->have_posts()) : $loop->the_post(); ?>
						 	
						 	 <div class="col-sm-5">
						 	 	 <?php 
						 	 	 	if ( has_post_thumbnail() ) {
						 	 	 		the_post_thumbnail( array(90, 90) );
						 	 	 	} else { echo '<img src="' .  get_bloginfo('stylesheet_directory') . '/assets/images/profile_default_l.jpg" height="90px" width="90p" />';}
						 	 	 ?>
						 	 	 </div><!--col-sm-5-->
						 	 	 
						 		 <div class="col-sm-7">
						 		 <p><strong><?php the_title(); ?></strong><br /><?php the_field('elf_campus'); ?></p>
						 	 </div><!--col-sm-7-->
						 	
						 	<?php endwhile; wp_reset_query(); ?>					 
						 	
				 </div><!--row staff-->
			 
		 	</div><!--col-->
		
		<div class="col-sm-4">
			<h3>Clinical Education Advisors</h3>
				<!--STAFF INFO-->
					<div class="row staff">
						 <?php $loop = new WP_Query( array( 'post_type' => 'cea_staff', 'orderby' => 'meta_value', 'meta_key' => 'cea_campus', 'order' => 'ASC' ) ); ?>
						 	 <?php while ( $loop->have_posts()) : $loop->the_post(); ?>
						 	
						 	 <div class="col-sm-5">
						 	  	 <?php 
						 	  	 	if ( has_post_thumbnail() ) {
						 	  	 		the_post_thumbnail( array(90, 90) );
						 	  	 	} else { echo '<img src="' .  get_bloginfo('stylesheet_directory') . '/assets/images/profile_default_l.jpg" height="90px" width="90p" />';}
						 	  	 ?>
						 	  	 </div><!--col-sm-5-->
						 	 	 
						 		 <div class="col-sm-7">
						 		 <p><strong><?php the_title(); ?></strong><br /><?php the_field('cea_campus'); ?></p>
						 	 </div><!--col-sm-7-->
						 	
						 	<?php endwhile; wp_reset_query(); ?>
						 			
	 	 	  	 	  </div><!--row staff-->
		</div><!--col-->
		
	</div><!--row-->

</div><!--container-->


</section><!--staff-intros-->
