$(".faded-div").fadeIn(0);
$(".faded-div").delay(300).fadeOut(600);

$("a.fade-out").click(function () {
  $(".faded-div").fadeOut(1000);
});

$("div.hidden").fadeIn(1000).removeClass("hidden");

$(".carousel").carousel({
  interval: 2000,
});

$(".keshav-animoji").fadeIn(0);
$(".keshav-animoji").delay(100).fadeOut(500);

$("a.keshav-animoji").click(function () {
  $(".keshav-animoji").fadeOut(1000);
});

$(function () {
  // $(document).ready shorthand
  $(".monster").fadeIn("slow");
});

$(document).ready(function () {
  /* Every time the window is scrolled ... */
  $(window).scroll(function () {
    /* Check the location of each desired element */
    $(".hideme").each(function (i) {
      var bottom_of_object = $(this).position().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      /* If the object is completely visible in the window, fade it it */
      if (bottom_of_window > bottom_of_object) {
        $(this).animate({ opacity: "1" }, 1500);
      }
    });
  });
});

function addMemojiSlides() {
  var ul = document.getElementById("memoji-list");
  var number_of_memojis = 33;
  var i;
  // Loops through each and every memoji and adds it to
  //    the glide slides
  for (i = 0; i <= number_of_memojis; i++) {
    var memojiImage = "img/memojis/memoji-";
    memojiImage += i;
    memojiImage += ".png";
    var li = document.createElement("li");
    var img = document.createElement("img");
    img.setAttribute("src", memojiImage); // added line
    img.setAttribute("alt", "Keshav Memoji"); // added line
    img.setAttribute("class", "d-block memoji-cars"); // added line
    // img.setAttribute("data-tilt", ""); // added line
    li.setAttribute("class", "glide__slide"); // added line
    li.appendChild(img);
    ul.appendChild(li);
  }
}

function glideSlideSetup() {
  var input = document.querySelector("#options-autoplay");

  var glide = new Glide("#options-autoplay", {
    autoplay: 1000,
    hoverpause: false,
    perView: 3,
  });

  input.addEventListener("input", function (event) {
    glide.update({
      autoplay: event.target.value != 0 ? event.target.value : false,
    });
  });

  glide.mount();
}

function fontAwesomeIconTilt() {
  $(document).ready(function () {
    $(".fab").tilt({
      maxTilt: 70,
      perspective: 500, // Transform perspective, the lower the more extreme the tilt gets.
    });
  });
}
