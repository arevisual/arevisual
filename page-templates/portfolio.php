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
				<?php $slug = $post->post_name; ?>

			<a data-toggle="modal" data-target="#portfolio-<?php echo $slug; ?>">
	  <article>
	  
				<?php the_title(); ?>
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
			<?php $slug = $post->post_name; ?>
	
 <!-- The Modal -->
 <div class="modal fade" id="portfolio-<?php echo $slug; ?>">
	<div class="modal-dialog">
	  <div class="modal-content">
	  
		<!-- Modal Header -->
		<div class="modal-header">
		  <h4 class="modal-title"><?php the_title(); ?></h4>
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		
		<!-- Modal body -->
		<div class="modal-body">
		  Modal body..
		</div>
		
		<!-- Modal footer -->
		<div class="modal-footer">
		  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
