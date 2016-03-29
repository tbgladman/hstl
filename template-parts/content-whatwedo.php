<?php
// Custom Fields
$what_we_do_title		= get_field('what_we_do_title');
$what_we_do_intro		= get_field('what_we_do_intro');
$mea_list				= get_field('mea_list');
$cea_list				= get_field('cea_list');
$elf_list				= get_field('elf_list');
 ?>

<!-- WHAT WE DO
==================================== -->
<section id="our-services">

<div class="container">

	<h2><?php echo ($what_we_do_title); ?></h2>
	<p class="lead"><?php echo ($what_we_do_intro); ?></p>
	
	<div class="row staff-titles services">
		<div class="col-sm-4">
			<h3>Medical Education Advisors</h3>
				<?php echo ($mea_list); ?>
		</div><!--col-->
		
		<div class="col-sm-4">
			<h3>eLearning Facilitators</h3>
				<?php echo ($elf_list); ?>
		</div><!--col-->
		
		<div class="col-sm-4">
			<h3>Clinical Education Advisors</h3>
				<?php echo ($cea_list); ?>
		</div><!--col-->
		
	</div><!--row-->

</div><!--container-->


</section><!--our-services-->
