<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package abentindileva
 */

get_header();
?>

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );


	endwhile; // End of the loop.
	?>
 	<div class="navegador">
		

		
	<?php previous_post_link('%link', '<<', TRUE, '7'); ?> &nbsp;&nbsp; - &nbsp;&nbsp;<?php next_post_link('%link', '>>', TRUE, '7'); ?>
		
	</div>
<?php
get_footer();
