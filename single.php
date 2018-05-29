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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

		<div class="container-fluid">
		    <section class="hero">
		        <div class="row">
		          <img src="<?php echo get_template_directory_uri(); ?>/img/havannacabildo-01.jpg" class="mx-auto d-block proyppal" alt="Grande proyecto">
		        </div>
		    </section>

		    <section class="container-fluid" >
		         <div class="contenedoproyecto">
						 		<div class="h1proyecto"> HAVANNA Cabildo	</div>
 								<div class="h2proyecto">Diseño de mobiliario y espacio.</div>

		        </div>
		    </section>

		    <div class="grillaproyectos" >
		      <div class="container-fluid">

		        <div class="row">
		          <div class="col-sm">
		            <img src="<?php echo get_template_directory_uri(); ?>/img/havannacabildo-02.jpg" class="mx-auto d-block proyduo" alt="Proyecto01">
		          </div>
		          <div class="col-sm">
		            <img src="<?php echo get_template_directory_uri(); ?>/img/havannacabildo-03.jpg" class="mx-auto d-block proyduo" alt="Proyecto01">
		          </div>
		        </div>


					<div class="row">
						<div class="col-sm">
							<img src="<?php echo get_template_directory_uri(); ?>/img/havannacabildo-04.jpg" class="mx-auto d-block proysolo" alt="Proyecto01">
						</div>
					</div>

		        <div class="row">
		          <div class="col-sm">
		            <img src="<?php echo get_template_directory_uri(); ?>/img/havannacabildo-05.jpg" class="mx-auto d-block proyduo" alt="Proyecto01">
		          </div>
		          <div class="col-sm">
		            <img src="<?php echo get_template_directory_uri(); ?>/img/havannacabildo-06.jpg" class="mx-auto d-block proyduo" alt="Proyecto01">
		          </div>
		        </div>
					</div>
			</div>

		</div><!-- #container-fluid -->
	</div><!-- #primary -->

<?php
get_footer();
