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


<div class="container">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php

		if ( has_post_thumbnail() ) {
		  $img = get_the_post_thumbnail_url('', 'post-custom-size');
		} else {
		  $img = get_template_directory_uri() . '/assets/img/fondo_3.jpg';
		}

		?>

    <div id="post-jumbotron" class="jumbotron p-5 md-3 text-white text-center" style="background-image: url('<?= $img ?>')">

    </div>
    <div class="contenido_blog">
        <div class="titular_blog_int">
            <h2><?php the_title() ?></h2>
            <p><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
        </div>

        <?php the_content(); ?>

        <div class="text-center mb-5 btn_int_blog">
          <a class="btn clase-button" href="blog">Volver al Blog</a>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
