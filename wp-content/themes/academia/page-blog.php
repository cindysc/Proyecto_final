<?php get_header(); ?>

    <!-- Header -->
    <header class="header_articulo">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Noticias</h1>
            </div>
        </div>
    </div>
    </header>
    <!--fin Header -->

    <div class="container blog_cont">
    	<div class="row">
      	<?php
      		$arg = array(
      			'post_type'		 => 'post',
      			'posts_per_page' => -1
      		);

      		$get_arg = new WP_Query( $arg );

      		while ( $get_arg->have_posts() ) {
      			$get_arg->the_post();
      		?>
            <div class="col-md-3 mt-5">
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'custom-size-blog', array( 'class' => 'img-responsive mb-3' ) );
                } else { ?>
                    <img src="<?php echo get_theme_file_uri( '/assets/img/noticia_4.jpg' ) ?>" class="img-responsive mb-3"/>
                <?php } ?>

                <h3><?php the_title() ?></h3>
                <p><?php the_excerpt() ?></p>
                <a class="btn clase-button" href="<?php the_permalink() ?>">Ver más</a>
            </div>
      		<?php } wp_reset_postdata();
      	?>
    	</div>
    </div>

    <?php echo get_template_part( '_includes/destacado' ); ?>

<?php get_footer(); ?>
