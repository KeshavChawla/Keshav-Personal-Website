<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('includes/header.html'); ?>
  <link href="css/projects.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
  <?php include('includes/google-tag-and-preloader.html'); ?>
  <!-- Navigation -->
  <?php include('includes/navbar.html'); ?>
  <!-- Page Content -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <div class="overflow-auto">
    <section>
      <div class="container containerpadding">
        <?php include('includes/site-logo.html'); ?>
      </div>
    </section>
    <div class="container projects-container">
    <h1 id="project-title">Projects &#x1F4CB;</h1>
    <br><br>
      <?php include('includes/projects/magic-mirror.html'); ?>
      <?php include('includes/projects/hack-the-fridge.html'); ?>
      <?php include('includes/projects/deca-website.html'); ?>
      <?php include('includes/projects/insuremotion.html'); ?>
      <?php include('includes/projects/design-portfolio.html'); ?>

      <script>
        // Sizes the pictures based on the min of the actual size or the size of the 
        //  text box in the card
        var class_node = document.getElementsByClassName('card-img');
        var class_node_length = class_node.length;
        var i;
        for (i = 0; i < class_node_length; i++) {
          var image_height = document.getElementsByClassName('card-img')[i].offsetHeight;
          var textbox_height = document.getElementsByClassName('card-body')[i].offsetHeight;
          console.log(image_height);
          console.log(textbox_height);
          if (image_height > textbox_height) {
            (document.getElementsByClassName('card-img')[i]).style.height = textbox_height + "px";
          }
        }
      </script>
    </div>
    <?php include('includes/footer.html'); ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 0, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 0, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 30, // values from 0 to 3000, with step 50ms
        duration: 400, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: true, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

      });
    </script>
</body>

</html>