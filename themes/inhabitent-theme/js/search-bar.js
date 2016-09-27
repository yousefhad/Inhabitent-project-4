
jQuery(document).ready(function( $ ) {

 $(".icon-search").on('click',function(){
 	$input = $('.header-search input');
 	$input.toggle('slow');


 });



  if ( is_home() && is_about() ) {

     $('#masthead').addClass('change-header');


        } else {$('#masthead').removeClass('change-header');

           }



} )( jQuery );
