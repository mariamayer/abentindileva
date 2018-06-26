<?php
/**
 Template Name: Home
 */

get_header(); ?>

<section class="hero">
    <img src="<?php echo get_theme_mod('hero_img'); ?>" class="mx-auto d-block" >
</section>


<section id="txtestudio">
    <div class="container">
        <div class="contenedorabout">
           <p class="font-weight-light text-justify about"> - <br>Le damos marco a la experiencia. Creamos entornos con sentido. Encontramos  la identidad a los espacios teniendo en cuenta el espíritu y las necesidades de quienes nos convocan. <br>
             Nuestro alcance es de lo macro a lo micro, desde la arquitectura al interiorismo, desde el diseño y produccion de mobiliario a la iluminación, los textiles, accesorios y mínimos detalles.  </p>
       </div>
    </div>
</section>

<section id="proyectos">
    <div class="container-fluid">
        <div class="row">
            <?php $my_query = new WP_Query( 'category_name=proyectos&posts_per_page=6' );
            while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                <div class="col-md-4">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                        <div class="descripcionproyecto">
                            <h2 class="nombreproyecto"><?php echo get_the_title(); ?></h2>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
