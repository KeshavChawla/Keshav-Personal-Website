$('.faded-div').fadeIn(0);

    $('.faded-div').delay(300).fadeOut(500);

$('a.fade-out').click(function(){
    $('.faded-div').fadeOut(1000);
});
$('.carousel').carousel({
  interval: 2000
})
