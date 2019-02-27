<?php get_header(); ?>

    <!-- Header -->
    <header class="header_articulo">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Galería</h1>
            </div>
        </div>
    </div>
    </header>
    <!--fin Header -->
    <!--Inicio galeria -->
    <div class="grid_masonry container">
     <div class="grid-item grid-item--vertical"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/pintura_1.jpg" rel="lightbox" data-lightbox="cursos" data-title="Curso de pintura | 20 OCT"><img src="<?php the_field('imagen_vertical_1'); ?>" alt="" class=""></a></div>
     <div class="grid-item grid-item--vertical"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/pintura_2.jpg" rel="lightbox" data-lightbox="cursos" data-title="Curso de pintura | 20 OCT"><img src="<?php the_field('imagen_vertical_2'); ?>" alt="" class=""></a></div>
     <div class="grid-item grid-item--horizontal"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/pintura_3.jpg" rel="lightbox" data-lightbox="cursos" data-title="Curso de pintura | 20 OCT"><img src="<?php the_field('imagen_horizontal_1'); ?>" alt="" class=""></a></div>
     <div class="grid-item grid-item--vertical"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/pintura_4.jpg" rel="lightbox" data-lightbox="cursos" data-title="Curso de pintura | 20 OCT"><img src="<?php the_field('imagen_vertical_3'); ?>" alt="" class=""></a></div>
     <div class="grid-item grid-item--horizontal"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/pintura_5.jpg" rel="lightbox" data-lightbox="cursos" data-title="Curso de pintura | 20 OCT"><img src="<?php the_field('imagen_horizontal_2'); ?>" alt="" class=""></a></div>
     <div class="grid-item grid-item--vertical"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/pintura_6.jpg" rel="lightbox" data-lightbox="cursos" data-title="Curso de pintura | 20 OCT"><img src="<?php the_field('imagen_vertical_4'); ?>" alt="" class=""></a></div>
     <div class="grid-item grid-item--vertical"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/pintura_7.jpg" rel="lightbox" data-lightbox="cursos" data-title="Curso de pintura | 20 OCT"><img src="<?php the_field('imagen_vertical_5'); ?>" alt="" class=""></a></div>
     <div class="grid-item grid-item--vertical"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/pintura_8.jpg" rel="lightbox" data-lightbox="cursos" data-title="Curso de pintura | 20 OCT"><img src="<?php the_field('imagen_vertical_6'); ?>" alt="" class=""></a></div>
     <div class="grid-item grid-item--horizontal"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/caja_1.jpg" rel="lightbox" data-lightbox="cursos" data-title="Pintura de caja vintage | 27 OCT"><img src="<?php the_field('imagen_horizontal_3'); ?>" alt="" class=""></a></div>
     <div class="grid-item grid-item--horizontal"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/caja_2.jpg" rel="lightbox" data-lightbox="cursos" data-title="Pintura de caja vintage | 27 OCT"><img src="<?php the_field('imagen_horizontal_4'); ?>" alt="" class=""></a></div>
     <div class="grid-item grid-item--horizontal"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/caja_2.jpg" rel="lightbox" data-lightbox="cursos" data-title="Pintura de caja vintage | 27 OCT"><img src="<?php the_field('imagen_horizontal_5'); ?>" alt="" class=""></a></div>
     <div class="grid-item grid-item--horizontal"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/caja_4.jpg" rel="lightbox" data-lightbox="cursos" data-title="Pintura de caja vintage | 27 OCT"><img src="<?php the_field('imagen_horizontal_6'); ?>" alt="" class=""></a></div>
     <div class="grid-item grid-item--vertical"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/pintura_1.jpg" rel="lightbox" data-lightbox="cursos" data-title="Curso de pintura | 20 OCT"><img src="<?php the_field('imagen_vertical_7'); ?>" alt="" class=""></a></div>
     <div class="grid-item grid-item--vertical"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/pintura_4.jpg" rel="lightbox" data-lightbox="cursos" data-title="Curso de pintura | 20 OCT"><img src="<?php the_field('imagen_vertical_8'); ?>" alt="" class=""></a></div>
    </div>
    <!--Fin galeria -->

<?php get_footer(); ?>
