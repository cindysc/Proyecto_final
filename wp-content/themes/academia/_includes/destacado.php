<!--Inicio ariticulo-->
<div class="container destacados">
   <div class="row">
       <?php
       $arg = array(
         'post_type'		 => 'destacados',
         'posts_per_page' => 4
       );

       $get_arg = new WP_Query( $arg );

       while ( $get_arg->have_posts() ) {
         $get_arg->the_post();
       ?>
           <div class="col-sm-12 col-md-6 col-lg-3 articulo">
               <div class="recorte">
                  <?php the_post_thumbnail('custom-size-blog', array('class' => 'img-responsive')); ?>
                </div>
                <h3><?php the_title() ?></h3>
                <p><?php the_content() ?></p>
           </div>

       <?php } wp_reset_postdata();
      ?>
   </div>
</div>

<!--Fin ariticulo-->
