<?php
/**
 Template Name: Productos
 */

get_header(); ?>

<div class="container-fluid">
  <section class="productos">
    <div class="container-fluid">
      <div> <!-- #este es el logo, va en todas las páginas. -->
        <div class="h1logo">ESTUDIO</div>
        <div class="h2logo font-weight-light">GABY ABENTIN <br> LARA DI LEVA</div>
     </div>
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
