<?php
/**
 Template Name: Home
 */

get_header(); ?>

<div class="container-fluid">
    <section class="hero">
        <div class="row">
          <img src="<?php echo get_template_directory_uri(); ?>/img/abentindileva01.jpg" class="mx-auto d-block" alt="Proyecto01">
        </div>
    </section>

    <section id="txtestudio" class="container" >
         <div class="contenedorabout">
            <p class="font-weight-light text-justify about"> - <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum velit ut venenatis lobortis. Pellentesque convallis erat eu tortor porttitor dapibus. Sed fringilla augue eu sagit- tis egestas. Proin egestas nunc sed fringilla rhoncus. Vestibulum ullamcorper sed velit et commodo. Praesent vitae ligula aliquam nisl dapibus dictum vel et lectus. Proin velit erat, dapibus at dui sed, rutrum tincidunt dolor. Donec aliquet odio at sapien bibendum hendrerit. Donec a tincidunt nunc. Aliquam erat volutpat. </p>
        </div>
    </section>

    <section id="proyectos" class="" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/img/proyecto-03.jpg" class="mx-auto d-block" alt="Proyecto01">
            <div class="descripcionproyecto">
                <div class="nombreproyecto">RETAIL HAVANNA</div>
            </div>
          </div>
          <div class="col-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/img/proyecto-04.jpg" class="mx-auto d-block" alt="Proyecto01">
            <div class="descripcionproyecto">
                <div class="nombreproyecto">CASA SOLÁ</div>
            </div>
          </div>
          <div class="col-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/img/proyecto-05.jpg" class="mx-auto d-block" alt="Proyecto01">
            <div class="descripcionproyecto">
                <div class="nombreproyecto">RESTAURANT UREÑA</div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/img/proyecto-07.jpg" class="mx-auto d-block" alt="Proyecto01">
            <div class="descripcionproyecto">
                <div class="nombreproyecto">RETAIL HAVANNA</div>
            </div>
          </div>
          <div class="col-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/img/proyecto-08.jpg" class="mx-auto d-block" alt="Proyecto01">
            <div class="descripcionproyecto">
                <div class="nombreproyecto">CASA SOLÁ</div>
            </div>
          </div>
          <div class="col-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/img/proyecto-09.jpg" class="mx-auto d-block" alt="Proyecto01">
            <div class="descripcionproyecto">
                <div class="nombreproyecto">RESTAURANT UREÑA</div>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>

<?php get_footer(); ?>
