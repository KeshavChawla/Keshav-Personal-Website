$('.faded-div').fadeIn(0);
$('.faded-div').delay(300).fadeOut(600);

$('a.fade-out').click(function(){
    $('.faded-div').fadeOut(1000);
});

$('div.hidden').fadeIn(1000).removeClass('hidden');



$('.carousel').carousel({
  interval: 2000
})


$('.keshav-animoji').fadeIn(0);
    $('.keshav-animoji').delay(100).fadeOut(500);

$('a.keshav-animoji').click(function(){
    $('.keshav-animoji').fadeOut(1000);
});

$(function(){  // $(document).ready shorthand
    $('.monster').fadeIn('slow');
  });
  
  $(document).ready(function() {
      
      /* Every time the window is scrolled ... */
      $(window).scroll( function(){
      
          /* Check the location of each desired element */
          $('.hideme').each( function(i){
              
              var bottom_of_object = $(this).position().top + $(this).outerHeight();
              var bottom_of_window = $(window).scrollTop() + $(window).height();
              
              /* If the object is completely visible in the window, fade it it */
              if( bottom_of_window > bottom_of_object ){
                  
                  $(this).animate({'opacity':'1'},1500);
                      
              }
              
          }); 
      
      });
      
  });