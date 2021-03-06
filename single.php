<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Doode_Foundational
 * @since Doode-Foundational 5.5.2.1
 */

get_header(); ?>

	<div id="content" class="medium-8 large-8 columns" role="main">
    
    	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="breadcrumbs">','</p>'); } ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<nav class="nav-single">
				<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&laquo;', 'Previous post link', 'wp-forge' ) . '</span> %title' ); ?></span>
				<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&raquo;', 'Next post link', 'wp-forge' ) . '</span>' ); ?></span>
			</nav><!-- .nav-single -->

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>