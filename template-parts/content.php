<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hstl
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php
		if ( 'post' === get_post_type() ) : ?>

		<div class="post-details">
			<i class="fa fa-user"></i> <?php the_author(); ?>
			<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
			<i class="fa fa-folder"></i> <?php the_category(', '); ?>
			<i class="fa fa-tags"></i> <?php the_tags('', ', ', ''); ?>

			<div class="post-comments-badge">
				<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number( 0, 1, '%'); ?></a>
			</div><!--post-comments-badge-->

			<div><?php edit_post_link( 'Edit', '<div i class="fa fa-pencil">', '</div>'); ?></div>
		</div><!--post-details-->

		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php
		if ( has_post_thumbnail() ) { // check for feature image
			the_post_thumbnail(array(640, 480));
		}
		else {
			echo '<img src="' .  get_bloginfo('stylesheet_directory') . '/assets/images/DefaultRecentStories.png" height="480px" width="640px" />';
        }
	?>

	<div class="post-excerpt">
		<?php the_excerpt(); ?>
	</div><!--post-excerpt-->

    <!-- XXX - worried, the_content() is not called anywhere here.
         Is this template being used for its intended purpose? -->

</article><!-- #post-## -->
