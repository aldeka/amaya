<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="singleton section row">
	              <div class="col-lg-9 col-sm-12">
	                <div id="post-<?php the_ID(); ?>" class="highlight">
		                <h2><?php the_title(); ?></h2>
		                <div class="entry-content">
		                	<?php the_content(); ?>
		            	</div>
		            	<footer class="entry-meta">
							<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
						</footer><!-- .entry-meta -->
	                </div>
	              </div>
	            </div>
			<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
