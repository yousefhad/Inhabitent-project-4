

(function($) {
	//search bar toggle		
$( ".search-toggle" ).click(function(e) {
  $( ".search-form" ).animate({
    right: "+=200",
    width: "toggle",
  }, 500); 
});
  


	//header scroll 
  if ($('.home, .page-template-about, .single-adventure').length > 0) {

    var targetOffset = $(".anchor").offset().top;
    var $w = $(window).scroll(function(){


        if ( $w.scrollTop() > targetOffset ) {   
            $('.head').css({
            	"position":"fixed",
            	"background-color":"rgba(250,250,250,.8)",
            	"border-bottom":"1px solid #e1e1e1",
          });
            $('#wpadminbar').css({
            	"visibility":"hidden",
          });
            $('.main-navigation li a,.search-toggle').css({
            	"color":"#248A83",
            	"text-shadow":"none",
            });
            $('#site-logo').removeClass('logo');
            $('#site-logo').addClass('logo2');
            
            $(".main-navigation li a,.search-toggle").hover(function(){
                  $(this).css("color", "#2f1339");
                  }, function(){
                  $(this).css("color", "#248A83");
              });
        
        } else {
            $('.head').css({
            	"position":"absolute",
            	"top":"0",
            	"background-color":"rgba(255,255,255,0)",
            	"border-bottom":"none",
            });
            $('#wpadminbar').css({
            	"visibility":"visible"
          });
           $('.main-navigation li a,.search-toggle').css({
            	"color":"#fff",
              "text-shadow":"1px 1px 1px #222",
            });
           $('#site-logo').removeClass('logo2');
            $('#site-logo').addClass('logo');

           $(".main-navigation li a,.search-toggle").hover(function(){
                  $(this).css("color", "#f0e4d1");
                  }, function(){
                  $(this).css("color", "#fff");
              });
        }
    });
}

})( jQuery );







