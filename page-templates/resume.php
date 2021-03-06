<?php
/**
 * Template Name: Resume
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ARE_Visual
 */

get_header();
?>

<main id="primary" class="site-main">
	<h1><?php the_title(); ?></h1>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
endif;
	?>
	
	
  <section id="jobs-outer-container">
		<section id="jobs-inner-container">
		<?php
		$args = array(
			'post_type' => 'jobs',
		);

		$the_query = new WP_Query( $args );
		$i         = 1;

		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				?>
				<?php $job_id = 'job-item' . $i; ?>
				<article class="jobs-item" id="<?php echo $job_id; ?>">
					<section class="job-item-inner wow animate__animated animate__fadeInUp animate__slow">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</section>
					<?php $i++; ?>
				</article>
	
				<?php
			endwhile; // End of the loop.
			else :
				?>
				<p><?php _e( 'Nothing to Show. Please come back later.' ); ?></p>
		<?php endif; ?>
		
	<?php wp_reset_postdata(); ?>
		</section>

  </section>
	</main>
	

<?php
get_sidebar();
get_footer();
