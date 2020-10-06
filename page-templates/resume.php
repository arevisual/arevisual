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
	
	
  <section id="resume-outer-container">
		<section id="resume-inner-container">
			<article class="resume-item one">

			</article>
			<article class="resume-item two">

			</article>

			<article class="resume-item one">

			</article>
			<article class="resume-item two">

			</article>

			<article class="resume-item one">

			</article>
			<article class="resume-item two">

			</article>
		</section>

  </section>
	</main>
	

<?php
get_sidebar();
get_footer();
