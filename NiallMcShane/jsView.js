  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems, {});
  });
  
  
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, {});
	
  });

  $('carouselStuff').carousel({
      fullWidth: true,
      indicators: false
   });
   
   // move next carousel
   $('.moveNextCarousel').click(function(e){
      e.preventDefault();
      e.stopPropagation();
      $('carouselStuff').carousel('next');
   });

   // move prev carousel
   $('.movePrevCarousel').click(function(e){
      e.preventDefault();
      e.stopPropagation();
      $('carouselStuff').carousel('prev');
   });


function myFunction() {
  document.getElementById("ProjectInfoCard").style.zIndex = "-1";
};


 