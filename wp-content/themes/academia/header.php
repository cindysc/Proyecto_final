<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body id="page-top">

    <?php
    	$custom_logo_id = get_theme_mod( 'custom_logo' );
    	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img class="logo" src="<?php echo $logo[0]; ?>" alt="logo academia encuentra tu arte"></a>
            </div>

            <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
            	<?php wp_nav_menu( array(
            		'theme_location' 	=> 'header-menu',
            		'container_id'		=> 'bs-example-navbar-collapse-1',
            		'container_class' 	=> 'collapse navbar-collapse',
            		'menu_class'     	=> 'nav navbar-nav navbar-right navbar__navigation'
            		)
            	); ?>
            <?php } ?>
            <!--
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right navbar__navigation">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="nosotros.html">Quienes somos</a></li>
                    <li><a href="cursos.html">Cursos</a></li>
                    <li><a href="noticias.html">Noticias</a></li>
                    <li><a href="galeria.html">Galería</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                </ul>
            </div>
            -->
        </div>
    </nav>
    <!-- Fin Navbar-->
