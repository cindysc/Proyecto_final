<?php get_header(); ?>

<!-- Header -->
<header class="header_articulo">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Necesitas ayuda</h1>
            </div>
        </div>
    </div>
</header>
<!--fin Header -->
<div class="container">
    <h2>Preguntas frecuentes</h2>
    <!--acordeon-->
    <div id="accordion">
        <?php
        $arg = array(
          'post_type'		 => 'preguntas',
          'posts_per_page' => 6
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>
            <!-- inicio acordeón 1-->
             <div class="contenido-ac">
                <span class="text-titulo"><?php the_title() ?></span>
             </div>
             <div class="desplegable-ac">
                <p class="text-ac"><?php the_content() ?></p>
             </div>

         <?php } wp_reset_postdata();
      ?>

    </div>
</div>


    <!--Inicio sección formulario -->

    <div class="cont_formulario">
        <div class="container">
            <h3 class="titulo-formulario">¿Aún no encuentras lo que buscas? Contáctanos</h3>
        </div>
    </div>
    <!--Inicio template formulario -->
    <?php echo get_template_part( '_includes/formulario' ); ?>
    <!--Fin template formulario -->

    <!--Fin sección formulario -->

<?php get_footer(); ?>
