<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abentindileva
 */

global $post;

?>

<section class="hero">
    <img src="<?php echo get_post_meta(get_the_ID(),'custom_img',true); ?>" class="mx-auto d-block proyppal">
</section>

<section>
    <div class="container-fluid">
        <div class="col-md-12 contenedoproyecto">
        <h1 class="h1proyecto"><?php echo get_the_title(); ?></h1>
        <h2 class="h2proyecto"><?php echo get_the_excerpt(); ?></h2>
        </div>
    </div>
</section>

<section class="grillaproyectos">
    <div class="container-fluid">
        <div class="row">
            <?php
                $gallery = get_post_gallery_images( $post );
                // Loop through each image in each gallery
                foreach( $gallery as $key=>$image_url ) {
                    if ($key==2 || $key==5 || $key==8){
                        $class='col-md-12 padding';
                    }else {
                        $class='col-md-6 mobile-padding';
                    }
                    echo '<div class="' . $class . '">' . '<img src="' . $image_url . '">' . '</div>';
                }
            ?>
        </div>
    </div>
</section>

</div>
