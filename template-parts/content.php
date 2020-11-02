<?php
/**
 * Template part for displaying posts.
 *
 * @see https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'arevisual' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'arevisual' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php arevisual_entry_footer(); ?>
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				arevisual_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php
		if ( 'portfolio' === get_post_type() ) :
			$slug          = $post->post_name;
			$skills_array  = get_the_terms( $post->ID, 'skills' );
			$skills_string = join( ', ', wp_list_pluck( $skills_array, 'name' ) )
			?>
			<div class="entry-meta">
				<?php
				 if ( $skills_string && ! is_wp_error( $skills_string ) ) : ?>
					<section class="modal-skills-list">
						<span class="skills-list-heading">Skills:</span>
						<?php echo wp_kses_post( $skills_string ); ?>
						<?php endif; ?>
					</section>
			
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
