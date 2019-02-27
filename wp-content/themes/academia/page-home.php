<?php get_header(); ?>

    <!-- Header -->
    <header class="container-fluid header_academia">
        <h1>Te invitamos a conocer y participar de estas actividades que tenemos para ti</h1>
        <!--Inicio beneficios -->
        <div class="container">
            <h3>Poder desarrollar la creatividad por medio de cursos entregan beneficios como poder Sociabilizar, aliviar el estres, son Recreativos y otorgan aprendizaje  </h3>
            
        </div>
        <!-- Fin beneficios -->
    </header>
    <!--Fin Header-->
    <div class="filters">

      <div class="ui-group">
        <h3>Tipo</h3>
        <div class="button-group js-radio-button-group" data-filter-group="color">
          <button class="button is-checked" data-filter="">Todos</button>
          <button class="button" data-filter=".taller">Taller</button>
          <button class="button" data-filter=".curso">Curso</button>
          <button class="button" data-filter=".seminario">Seminario</button>
        </div>
      </div>

      <div class="ui-group">
        <h3>Tema</h3>
        <div class="button-group js-radio-button-group" data-filter-group="size">
          <button class="button is-checked" data-filter="">Todos</button>
          <button class="button" data-filter=".pintura">Pintura</button>
          <button class="button" data-filter=".decora">Decoración</button>
          <button class="button" data-filter=".tejido">Tejido</button>
          <button class="button" data-filter=".deco">Decoupage</button>
        </div>
      </div>

      <div class="ui-group">
        <h3>Materiales</h3>
        <div class="button-group js-radio-button-group" data-filter-group="shape">
          <button class="button is-checked" data-filter="">Todos</button>
          <button class="button" data-filter=".con_material">Incluye materiales</button>
          <button class="button" data-filter=".sin_material">Sin materiales</button>
        </div>
      </div>

    </div>

    <div class="grid">

        <div class="card with-media color-shape sin_material pintura curso">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminario_caja.jpg" alt="" class="img-responsive">
            <div class="date">
                <p><span class="tag">Curso</span> | 12 nov</p>
            </div>
            <div class="title">
                <h4>Pintura de caja vintage</h4>
                <h5>Valor: $22.500</h5>
            </div>
            <div class="datos">
                <div class="datos__inner">
                    <i class="far fa-calendar-alt"></i>
                    <p>4 clases al mes</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-edit"></i>
                    <p>Materiales no incluidos</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-clock"></i>
                    <p>3 horas de duración</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-user"></i>
                    <p>Clases de 15 personas</p>
                </div>
                <div class="monitor">
                    <p>Monitor: Marcia Contreras</p>
                </div>
            </div>
            <div class="footer">
                <p>+569 30221241 - mcontreras@gmail.com<br>Dirección: Arlegui, 257 Viña del Mar</p>
            </div>
        </div>


        <div class="card with-media color-shape con_material pintura curso">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminario_caja.jpg" alt="" class="img-responsive">
            <div class="date">
                <p><span class="tag">Curso</span> | 12 nov</p>
            </div>
            <div class="title">
                <h4>Pintura de caja vintage</h4>
                <h5>Valor: $22.500</h5>
            </div>
            <div class="datos">
                <div class="datos__inner">
                    <i class="far fa-calendar-alt"></i>
                    <p>4 clases al mes</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-edit"></i>
                    <p>Materiales no incluidos</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-clock"></i>
                    <p>3 horas de duración</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-user"></i>
                    <p>Clases de 15 personas</p>
                </div>
                <div class="monitor">
                    <p>Monitor: Marcia Contreras</p>
                </div>
            </div>
            <div class="footer">
                <p>+569 30221241 - mcontreras@gmail.com<br>Dirección: Portal Álamos, 257 Viña del Mar</p>
            </div>
        </div>

        <div class="card with-media color-shape sin_material decoracion curso">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminario_caja.jpg" alt="" class="img-responsive">
            <div class="date">
                <p><span class="tag">Curso</span> | 12 nov</p>
            </div>
            <div class="title">
                <h4>Pintura de caja vintage</h4>
                <h5>Valor: $22.500</h5>
            </div>
            <div class="datos">
                <div class="datos__inner">
                    <i class="far fa-calendar-alt"></i>
                    <p>4 clases al mes</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-edit"></i>
                    <p>Materiales no incluidos</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-clock"></i>
                    <p>3 horas de duración</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-user"></i>
                    <p>Clases de 15 personas</p>
                </div>
                <div class="monitor">
                    <p>Monitor: Marcia Contreras</p>
                </div>
            </div>
            <div class="footer">
                <p>+569 30221241 - mcontreras@gmail.com<br>Dirección: Portal Álamos, 257 Viña del Mar</p>
            </div>
        </div>
        <div class="card with-media color-shape con_material pintura seminario">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminario_cinta.jpg" alt="" class="img-responsive">
            <div class="date">
                <p><span class="tag">Seminario</span> | 18 nov</p>

            </div>
            <div class="title">
                <h4>Pintura de bailarina </h4>
                <h5>Valor: $15.000</h5>
            </div>
            <div class="datos">
                <div class="datos__inner">
                    <i class="far fa-calendar-alt"></i>
                    <p>1 clase</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-edit"></i>
                    <p>Materiales incluidos</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-clock"></i>
                    <p>3 horas de duración</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-user"></i>
                    <p>Clases de 6 personas</p>
                </div>
                <div class="monitor">
                    <p>Monitor: Sandra Mena</p>
                </div>
            </div>
            <div class="footer">
                <p>+569 30221241 - mcontreras@gmail.com<br>Dirección: Portal Álamos, 257 Viña del Mar</p>
            </div>
        </div>
        <div class="card with-media color-shape con_material pintura seminario">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminario_cinta.jpg" alt="" class="img-responsive">
            <div class="date">
                <p><span class="tag">Seminario</span> | 18 nov</p>

            </div>
            <div class="title">
                <h4>Pintura de bailarina </h4>
                <h5>Valor: $15.000</h5>
            </div>
            <div class="datos">
                <div class="datos__inner">
                    <i class="far fa-calendar-alt"></i>
                    <p>1 clase</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-edit"></i>
                    <p>Materiales incluidos</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-clock"></i>
                    <p>3 horas de duración</p>
                </div>
                <div class="datos__inner">
                    <i class="far fa-user"></i>
                    <p>Clases de 6 personas</p>
                </div>
                <div class="monitor">
                    <p>Monitor: Sandra Mena</p>
                </div>
            </div>
            <div class="footer">
                <p>+569 30221241 - mcontreras@gmail.com<br>Dirección: Portal Álamos, 257 Viña del Mar</p>
            </div>
        </div>
    </div>


    <?php echo get_template_part( '_includes/swiper' ); ?>


    <?php echo get_template_part( '_includes/destacado' ); ?>

    <!--Inicio sección formulario -->
    <div class="cont_formulario">
        <div class="container">
            <h3 class="titulo-formulario">¿Tienes dudas? Contáctanos</h3>
        </div>
    </div>
    <?php echo get_template_part( '_includes/formulario' ); ?>

<?php get_footer(); ?>
