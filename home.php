<?php
/**
 Template Name: Home
 */

get_header(); ?>

<section class="hero">
    <div class="row">
      <img src="<?php echo get_theme_mod('hero_img'); ?>" class="mx-auto d-block" alt="Grande proyecto">
    </div>
</section>


<section id="txtestudio">
    <div class="container">
        <div class="contenedorabout">
           <p class="font-weight-light text-justify about"> - <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum velit ut venenatis lobortis. Pellentesque convallis erat eu tortor porttitor dapibus. Sed fringilla augue eu sagit- tis egestas. Proin egestas nunc sed fringilla rhoncus. Vestibulum ullamcorper sed velit et commodo. Praesent vitae ligula aliquam nisl dapibus dictum vel et lectus. Proin velit erat, dapibus at dui sed, rutrum tincidunt dolor. Donec aliquet odio at sapien bibendum hendrerit. Donec a tincidunt nunc. Aliquam erat volutpat. </p>
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
