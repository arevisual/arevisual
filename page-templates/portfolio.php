<?php
/**
 * Template Name: Portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ARE_Visual
 */

get_header();
?>

<main id="primary" class="site-main">
	<h1><?php the_title(); ?></h1>
	  <section id="portfolio-container">
		<?php
		$args = array(
			'post_type' => 'portfolio',
		);

		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				?>
				<?php
					$slug        = $post->post_name;
					$role_array  = get_the_terms( $post->ID, 'role' );
					$role_string = join( ', ', wp_list_pluck( $role_array, 'name' ) )

				?>

			<a data-toggle="modal" data-target="#portfolio-<?php echo $slug; ?>" class="portfolio-link">
				<article class="portfolio-item job-item-inner wow animate__animated animate__fadeIn animate__slower">
					<?php the_post_thumbnail( 'large' ); ?>
					<section class="text-container">
						<h2><?php the_title(); ?></h2>
						<p><?php echo wp_kses_post( $role_string ); ?></p>
					</section>
				</article>
			</a>
				<?php
			endwhile; // End of the loop.
			else :
				?>
				<p><?php _e( 'Nothing to Show. Please come back later.' ); ?></p>
		<?php endif; ?>
		
	<?php wp_reset_postdata(); ?>

<?php
	$args      = array(
		'post_type' => 'portfolio',
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			?>
			<?php
				$slug          = $post->post_name;
				$skills_array  = get_the_terms( $post->ID, 'skills' );
				$skills_string = join( ', ', wp_list_pluck( $skills_array, 'name' ) )
			?>
	
			<!-- The Modal -->
			<div class="modal fade" id="portfolio-<?php echo $slug; ?>">
				<div class="modal-dialog">
				<div class="modal-content">
				
					<!-- Modal Header -->
					<div class="modal-header">
					<h2 class="modal-title"><?php the_title(); ?></h2>
					<?php if ( $skills_string && ! is_wp_error( $skills_string ) ) : ?>
						<section class="modal-skills-list">
							<span class="skills-list-heading">Skills Used:</span>
							<?php echo wp_kses_post( $skills_string ); ?>
						</section>
					<?php endif; ?>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<?php the_content(); ?>
					</div>
					
					<!-- Modal footer -->
					<div class="modal-footer">
						<div class="wp-block-button is-style-fill">
							<a type="button" class="btn btn-danger wp-block-button__link" data-dismiss="modal">Close</a>
						</div>
					</div>
					
				</div>
				</div>
			</div>

			<?php
	  endwhile;// End of the loop.
	endif;
	?>

</section
	</main>
	

<?php
get_sidebar();
get_footer();
