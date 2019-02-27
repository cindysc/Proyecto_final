/* Initialize Swiper */
$(document).ready(function(){

    /* slider */
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    //-------------------- scroll ---------------------
    $(function() {
         $('#DivScroll').slimScroll({
             height: '80vh',
             width: '100%',
             alwaysVisible: true,
             railVisible: true
         });
     });

    //------------------ accordion --------------------
    $( function() {
      $( "#accordion" ).accordion({
        collapsible: true,
        heightStyle: "content",
        active:false,
      });
    } );

    /* scroll de menú */
    $( window ).scroll(function() {
        $('.navbar').toggleClass( 'navbar-academia', $(this).scrollTop() > 50);
    });

});

/*----------------------mapa selector--------------------------------*/
$(document).ready(function(){
   $(".sec-mapa").hide();
   $("#select").change(function(){
   $(".sec-mapa").hide();
       $("#sec_" + $(this).val()).show();
   });
});


//---------------------------- Masonry ---------------------------
$('.grid_masonry').masonry({
  itemSelector: '.grid-item',
    percentPosition: true
});

//------------------- Isotope --------------------------
// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.color-shape'
});

// store filter for each group
var filters = {};

$('.filters').on( 'click', '.button', function( event ) {
  var $button = $( event.currentTarget );
  // get group key
  var $buttonGroup = $button.parents('.button-group');
  var filterGroup = $buttonGroup.attr('data-filter-group');
  // set filter for group
  filters[ filterGroup ] = $button.attr('data-filter');
  // combine filters
  var filterValue = concatValues( filters );
  // set filter for Isotope
  $grid.isotope({ filter: filterValue });
});

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function( event ) {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    var $button = $( event.currentTarget );
    $button.addClass('is-checked');
  });
});

// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}
