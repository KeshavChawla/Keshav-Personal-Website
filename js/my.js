$(".faded-div").fadeIn(0);
$(".faded-div").delay(300).fadeOut(600);

$("div.hidden").fadeIn(1000).removeClass("hidden");

$(".keshav-animoji").fadeIn(0);
$(".keshav-animoji").delay(100).fadeOut(500);

$("a.keshav-animoji").click(function () {
  $(".keshav-animoji").fadeOut(1000);
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

function adjustProjectImages() {
  // Sizes the pictures based on the min of the actual size or the size of the
  //  text box in the card
  var class_node = document.getElementsByClassName("card-img");
  var class_node_length = class_node.length;
  var i;
  for (i = 0; i < class_node_length; i++) {
    var image_height = document.getElementsByClassName("card-img")[i]
      .offsetHeight;
    var textbox_height = document.getElementsByClassName("card-body")[i]
      .offsetHeight;
    console.log(image_height);
    console.log(textbox_height);
    if (image_height > textbox_height) {
      document.getElementsByClassName("card-img")[i].style.height =
        textbox_height + "px";
    } else {
      document.getElementsByClassName("card-img")[i].style.height =
        textbox_height + "px";
    }
    console.log(document.getElementsByClassName("card-img")[i].offsetHeight);
  }
}
