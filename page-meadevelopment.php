<?php

/*
	Template Name: MEA Development Page
*/
 
//Custom Fields
$mea_introduction	=	get_field('mea_introduction');
$mbchb_title		=	get_field('mbchb_title');
$mbchb_links		=	get_field('mbchb_links');

 get_header();?>

<!-- DEVELOPMENT HEADER
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
	

<!-- Introduction		
================================== -->

<div class="container">	
<div class="row" id="primary">

	<div id="content" class="col-sm-12">
	
		<section class="main-content">
			
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php the_content(); ?>
				
			<?php endwhile; //end of the loop ?>
		</section>
	</div>
</div>				

</div>									

	
<section id="mea_intro">
	<div class="container">
	
		<p><?php echo($mea_introduction) ?></p>
		
	</div>
				
</section>

<!-- SUBPAGE LINKS		
================================== -->
<section class="main-content" id="mea_sublinks">
<div class="container">
	<div class="row">
	
		<div class="col-sm-6">
				<a href="/staff-development/teaching-and-learning-resources/"><img src="/wp-content/themes/hstl/assets/images/mea_resources.png" alt="teaching and learning resources icon"></a>
				</div>
				
				<div class="col-sm-6">
				<a href="/staff-development/medical-education-research/"><img src="/wp-content/themes/hstl/assets/images/mea_research.png" alt="medical education research icon"></a>
				</div>
										
				</div><!-- row -->
					
		</div><!-- /.container -->
</section><!-- /.main-content -->


<!-- OTAGO LINKS		
================================== -->
<section id="mea_otago_links">

	<div class="container">
	
		<h2><?php echo($mbchb_title) ?></h2>
		
		<p><?php echo($mbchb_links) ?></p>
	
	</div><!--container-->

</section><!--meaotagolinks-->

<?php get_footer(); ?>