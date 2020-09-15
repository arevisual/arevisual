<?php
/**
 * Template Name: Portfolio
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ARE_Visual
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		$args = array(
			'post_type' => 'portfolio',
		);

		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<article>
				<?php the_title();?>
			</article>
				
				<?php
			endwhile; // End of the loop.
			else : ?>
				<p><?php _e( 'Nothing to Show. Please come back later.' ); ?></p>
		<?php endif; ?>
		

		 <!-- Button to Open the Modal -->
		 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
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
  
</div>
	</main>
	

<?php
get_sidebar();
get_footer();
