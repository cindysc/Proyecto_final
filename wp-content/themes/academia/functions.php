<?php

  // REGISTRO DE ESTILOS

  function register_enqueue_style() {
  		$theme_data = wp_get_theme();

  		/* Registrando estilos */
  		wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/vendor/css/bootstrap.min.css'), null, '1.0.0', 'screen');
        wp_register_style('bootstrap-theme', get_parent_theme_file_uri('/assets/vendor/css/bootstrap-theme.min.css'), null, '1.0.0', 'screen');
        wp_register_style('fonts','https://fonts.googleapis.com/css?family=Lato:300,400,700|Raleway:300,400,500,600,700' , null, '1.0.0', 'screen');
        wp_register_style('swiper', get_parent_theme_file_uri('/assets/vendor/css/swiper.min.css'), null, '1.0.0', 'screen');
        wp_register_style('lightbox', get_parent_theme_file_uri('/assets/vendor/css/lightbox.min.css'), null, '1.0.0', 'screen');
        /*mapa*/
        wp_register_style('leaflet', get_parent_theme_file_uri('/assets/vendor/leaflet/leaflet.css'), null, '1.0.0', 'screen');
        wp_register_style('leaflet_2','https://unpkg.com/leaflet@1.3.4/dist/leaflet.css' , null, '1.0.0', 'screen');
        wp_register_style('leaflet_3', get_parent_theme_file_uri('/assets/vendor/leaflet/L.Control.Locate.min.css'), null, '1.0.0', 'screen');
        /*localizacion*/
        wp_register_style('local_icon','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' , null, '1.0.0', 'screen');
        wp_register_style('local','https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@1.3.4/dist/L.Control.Locate.min.css' , null, '1.0.0', 'screen');
        /*propio*/
        wp_register_style('main', get_parent_theme_file_uri('/assets/css/style.css'), null, '1.0.0', 'screen');

  		/* Enqueue estilos */
  		wp_enqueue_style('bootstrap');
  		wp_enqueue_style('bootstrap-theme');
        wp_enqueue_style('fonts');
        wp_enqueue_style('swiper');
        wp_enqueue_style('lightbox');
        wp_enqueue_style('leaflet');
        wp_enqueue_style('leaflet_2');
        wp_enqueue_style('leaflet_3');
        wp_enqueue_style('local_icon');
        wp_enqueue_style('local');
        wp_enqueue_style('main');

	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

  // REGISTRO DE SCRIPTS

  function register_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

        /* Registrando Scripts */
        wp_register_script('jquery-3', get_parent_theme_file_uri('/assets/vendor/js/jquery-3.1.1.js'), null, null, true);
        wp_register_script('bootstrap-min', get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'), array('jquery-3'), null, true);
        wp_register_script('fontawesome','https://use.fontawesome.com/releases/v5.0.8/js/all.js', null, null, true);
        wp_register_script('swiper', get_parent_theme_file_uri('/assets/vendor/js/swiper.min.js'), null, null, true);
        wp_register_script('isotope','https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', null, null, true);
        wp_register_script('lightbox-plus', get_parent_theme_file_uri('/assets/vendor/js/lightbox-plus-jquery.min.js'), null, null, true);
        wp_register_script('masonry', get_parent_theme_file_uri('/assets/vendor/js/masonry.js'), null, null, true);
        wp_register_script('jquery-ui', get_parent_theme_file_uri('/assets/vendor/js/jquery-ui-1.12.1.custom/jquery-ui.js'), null, null, true);
        wp_register_script('slimscroll', get_parent_theme_file_uri('/assets/vendor/js/jquery.slimscroll.js'), null, null, true);

        /*mapa*/
        wp_register_script('leaflet_js', get_parent_theme_file_uri('/assets/vendor/leaflet/leaflet.js'), null, null, true);
        wp_register_script('leaflet_js_2', get_parent_theme_file_uri('/assets/js/leaflet.js'), null, null, true);
        wp_register_script('leaflet_js_3','https://unpkg.com/leaflet@1.3.4/dist/leaflet-src.js', null, null, true);
        wp_register_script('locate_1', get_parent_theme_file_uri('/assets/vendor/leaflet/L.Control.Locate.js'), null, null, true);
        wp_register_script('locate_2','https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@1.3.4/dist/L.Control.Locate.min.js', null, null, true);
        /*propio*/
        wp_register_script('scriptJS', get_parent_theme_file_uri('/assets/js/script.js'), array('jquery-3'), null, true);

		/* Enqueue Scripts */
		wp_enqueue_script('jquery-3');
		wp_enqueue_script('bootstrap-min');
        wp_enqueue_script('fontawesome');
        wp_enqueue_script('swiper');
        wp_enqueue_script('isotope');
        wp_enqueue_script('lightbox-plus');
        wp_enqueue_script('masonry');
        wp_enqueue_script('jquery-ui');
        wp_enqueue_script('slimscroll');
        wp_enqueue_script('leaflet_js');
        wp_enqueue_script('leaflet_js_2');
        wp_enqueue_script('leaflet_js_3');
        wp_enqueue_script('locate_1');
        wp_enqueue_script('locate_2');

		wp_enqueue_script('scriptJS');
	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

    /*------------------------ menú----------------------------*/
    function menus_setup() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			'footer-menu'	=> __( 'Footer Menu' ),
    		)
    	);
    }

    add_action( 'after_setup_theme', 'menus_setup' );

    /*----------------------------logo sitio----------------------*/
    function config_custom_logo() {
      add_theme_support( 'custom-logo', array(
        'height'      => 38,
        'width'       => 256,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
      ));
    }

add_action( 'after_setup_theme', 'config_custom_logo' );

    /* ------------------------- footer rrss --------------------- */
    function dl_widgets() {
      register_sidebar( array(
          'name' => 'Widget Footer',
          'id' => 'widget_footer'
      ));
    }

    add_action('widgets_init', 'dl_widgets');

    /*----------------------tamaño de imágenes-------------------------*/
    function thumbnails_setup() {
       add_theme_support( 'post-thumbnails' );
     }

     function dl_image_sizes( $sizes ) {

       $add_sizes = array(
         'portfolio-home'		=> __( 'Tamaño de las imágenes del portafolio en el home' ),
         'square'				=> __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
         'post-custom-size'	=> __( 'Tamaño personalizado para la imagen destada de los post' ),
         'custom-size-blog'	=> __( 'Tamaño personalizado para la imagen destada de los post' )
       );

       return array_merge( $sizes, $add_sizes );

     }

     if ( function_exists( 'add_theme_support' ) ) {

       add_image_size( 'portfolio-home', 465, 250, true );
       add_image_size( 'square', 400, 400, true );
       add_image_size( 'post-custom-size', 800, 600, true );
       add_image_size( 'custom-size-blog', 400, 300, true );

       add_filter( 'image_size_names_choose', 'dl_image_sizes' );

     }

     add_action( 'after_setup_theme', 'thumbnails_setup' );


    /*--------------------preguntas frecuentes --------------------*/
    function preguntas_post_type() {

    	$labels = array(
    		'name'                  => _x( 'Preguntas', 'Post Type General Name', 'text_domain' ),
    		'singular_name'         => _x( 'Pregunta', 'Post Type Singular Name', 'text_domain' ),
    		'menu_name'             => __( 'Preguntas', 'text_domain' ),
    		'name_admin_bar'        => __( 'post type', 'text_domain' ),
    		'archives'              => __( 'Archivos del artículo', 'text_domain' ),
    		'attributes'            => __( 'Atributos del artículo', 'text_domain' ),
    		'parent_item_colon'     => __( 'ítem principal', 'text_domain' ),
    		'all_items'             => __( 'Todos los ítems', 'text_domain' ),
    		'add_new_item'          => __( 'Agregar nuevo ítem', 'text_domain' ),
    		'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
    		'new_item'              => __( 'Nuevo ítem', 'text_domain' ),
    		'edit_item'             => __( 'Editar ítem', 'text_domain' ),
    		'update_item'           => __( 'Actualizar ítem', 'text_domain' ),
    		'view_item'             => __( 'Ver ítem', 'text_domain' ),
    		'view_items'            => __( 'Ver ítems', 'text_domain' ),
    		'search_items'          => __( 'Buscar ítem', 'text_domain' ),
    		'not_found'             => __( 'No se encuentra', 'text_domain' ),
    		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'text_domain' ),
    		'featured_image'        => __( 'Foto principal', 'text_domain' ),
    		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
    		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
    		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
    		'insert_into_item'      => __( 'Insertar en el ítem', 'text_domain' ),
    		'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
    		'items_list'            => __( 'Lista de artículos', 'text_domain' ),
    		'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
    		'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
    	);
    	$args = array(
    		'label'                 => __( 'Pregunta', 'text_domain' ),
    		'description'           => __( 'Preguntas frecuentes', 'text_domain' ),
    		'labels'                => $labels,
    		'supports'              => array( 'title', 'editor', 'thumbnail' ),
    		'taxonomies'            => array( 'category', 'post_tag' ),
    		'hierarchical'          => false,
    		'public'                => true,
    		'show_ui'               => true,
    		'show_in_menu'          => true,
    		'menu_position'         => 5,
    		'menu_icon'             => 'dashicons-editor-help',
    		'show_in_admin_bar'     => true,
    		'show_in_nav_menus'     => true,
    		'can_export'            => true,
    		'has_archive'           => true,
    		'exclude_from_search'   => false,
    		'publicly_queryable'    => true,
    		'capability_type'       => 'page',
    	);
    	register_post_type( 'preguntas', $args );

    }
    add_action( 'init', 'preguntas_post_type', 0 );

    /*-------------------Artículos destacados -----------------*/
    function destacados_post_type() {

    	$labels = array(
    		'name'                  => _x( 'Destacados', 'Post Type General Name', 'text_domain' ),
    		'singular_name'         => _x( 'Destacado', 'Post Type Singular Name', 'text_domain' ),
    		'menu_name'             => __( 'Destacados', 'text_domain' ),
    		'name_admin_bar'        => __( 'post type', 'text_domain' ),
    		'archives'              => __( 'Archivos del artículo', 'text_domain' ),
    		'attributes'            => __( 'Atributos del artículo', 'text_domain' ),
    		'parent_item_colon'     => __( 'ítem principal', 'text_domain' ),
    		'all_items'             => __( 'Todos los ítems', 'text_domain' ),
    		'add_new_item'          => __( 'Agregar nuevo ítem', 'text_domain' ),
    		'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
    		'new_item'              => __( 'Nuevo ítem', 'text_domain' ),
    		'edit_item'             => __( 'Editar ítem', 'text_domain' ),
    		'update_item'           => __( 'Actualizar ítem', 'text_domain' ),
    		'view_item'             => __( 'Ver ítem', 'text_domain' ),
    		'view_items'            => __( 'Ver ítems', 'text_domain' ),
    		'search_items'          => __( 'Buscar ítem', 'text_domain' ),
    		'not_found'             => __( 'No se encuentra', 'text_domain' ),
    		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'text_domain' ),
    		'featured_image'        => __( 'Foto principal', 'text_domain' ),
    		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
    		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
    		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
    		'insert_into_item'      => __( 'Insertar en el ítem', 'text_domain' ),
    		'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
    		'items_list'            => __( 'Lista de artículos', 'text_domain' ),
    		'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
    		'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
    	);
    	$args = array(
    		'label'                 => __( 'Destacado', 'text_domain' ),
    		'description'           => __( 'Artículos destacados', 'text_domain' ),
    		'labels'                => $labels,
    		'supports'              => array( 'title', 'editor', 'thumbnail' ),
    		'taxonomies'            => array( 'category', 'post_tag' ),
    		'hierarchical'          => false,
    		'public'                => true,
    		'show_ui'               => true,
    		'show_in_menu'          => true,
    		'menu_position'         => 5,
    		'menu_icon'             => 'dashicons-format-aside',
    		'show_in_admin_bar'     => true,
    		'show_in_nav_menus'     => true,
    		'can_export'            => true,
    		'has_archive'           => true,
    		'exclude_from_search'   => false,
    		'publicly_queryable'    => true,
    		'capability_type'       => 'page',
    	);
    	register_post_type( 'destacados', $args );

    }
    add_action( 'init', 'destacados_post_type', 0 );

?>
