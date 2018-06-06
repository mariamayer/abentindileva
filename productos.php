<?php
/**
 Template Name: Productos
 */

get_header(); ?>

<section id="productos">
    <div class="container-fluid">
        <div class="row">
            <?php $my_query = new WP_Query( 'category_name=productos&posts_per_page=6' );
            while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                <div class="col-md-4">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                        <div class="descripcionproyecto">
                            <div class="nombreproyecto">
                                <?php echo get_the_title(); ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
