<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hstl
 */

?>

<?php wp_footer(); ?>

<!-- FOOTER
===================================== -->
<footer>

	<div class="container">

		<div class="col-sm-2">
			<p><a href="/"><img src="http://www.otago.ac.nz/ou-logo.png" alt="University of Otago logo. " /></p>

		</div><!--col-->

		<div class="col-sm-7">
			<nav>
				<ul class="list-unstyled list-inline">
					<li><a href="http://www.otago.ac.nz" target="_blank">Otago Home</a></li>
					<li><a href="http://www.otago.ac.nz/its/services/teaching/otago068451.html" target="_blank">eLearning Toolbox</a></li>
					<li><a href="http://hedc.otago.ac.nz/magnolia/meg/Home.html" target="_blank">Medical Education Unit</a></li>
					<li><a href="https://medschool.otago.ac.nz/" target="_blank">MedMoodle</a></li>
					<li><a href="https://hsmoodle.otago.ac.nz/" target="_blank">HSMoodle</a></li>

				</ul>
			</nav>
		</div><!--col-->

		<div class="col-sm-3">
			<p class="pull-right">&copy; 2016 University of Otago</p>
		</div><!--col-->

	</div><!--container-->

</footer>


<!-- BOOTSTRAP CORE JAVASCRIPT
		Placed at the end of the document so the pages load faster
================================================================== -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Typekit Fonts -->
<script src="//use.typekit.net/fwc0xbd.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

</body>
</html>
