<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ARE_Visual
 */

get_header();
?>

	<main id="primary" class="site-main">
		<h1>Blog</h1>
		<?php
		if ( have_posts() ) :
			?>
							
				<section id="blog-container">
				<?php

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					?>
				<a href="<?php the_permalink(); ?>"  class="blog-link">
					<article class="blog-item job-item-inner wow animate__animated animate__fadeIn animate__slower">
						<?php the_post_thumbnail( 'large' ); ?>
						<section class="text-container">
							<h2><?php the_title(); ?></h2>
						</section>
					</article>
				</a>
					<?php
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
</section>
<?php the_posts_navigation(); ?>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
