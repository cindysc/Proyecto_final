<!--Inicio footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p class="titulo_rrss" >Síguenos en nuestras redes sociales</p>
                    <?php if ( is_active_sidebar( 'widget_footer' ) ) {
                        dynamic_sidebar( 'widget_footer' );
                    }; ?>
                </div>
                <div class="col-xs-12 col-sm-6 datos-direc">
                    <h4>Cantacto</h4>
                    <p>Dirección: Avenida Libertad #204, Viña del Mar.<br>Teléfono: 978326590
                </div>
            </div>
        </div>
    </footer>
    <!--Fin footer -->

    <?php wp_footer() ?>


  </body>
</html>
