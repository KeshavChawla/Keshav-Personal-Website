<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('includes/header.html'); ?>
  <link rel="stylesheet" href="  https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css"> -->
  <link rel="stylesheet" href="  https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css"> -->


  <!-- Required Core Stylesheet 
  <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css"> -->
  <!-- Optional Theme Stylesheet
  <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css"> -->
</head>
<body>
  <?php include('includes/google-tag-and-preloader.html'); ?>
  <!-- Navigation -->
  <?php include('includes/navbar.html'); ?>
  <!-- Page Content -->
  <div class="overflow-auto">
    <section>
      <div class="container containerpadding">
        <?php include('includes/site-logo.html'); ?>
        <div class="row text-div">
          <div class="col-md-3">
          </div>
          <div class="col-md-9 welcomepara">
            <h1 class="hello-about">Contact &#128241;</h1>
            <br>
            <h5 class="contact-link">&#128075; Say hello: <a href="mailto:hello@keshavchawla.com">hello@keshavchawla.com</a></h5>
            <h5 class="contact-link">&#128240; Read more at my blog: <a target="_blank" href="blog.keshavchawla.com">blog.keshavchawla.com</a></h5>
            <a class="github" href="https://github.com/KeshavChawla" target="_blank"> <i class="icon-first-link fab fa-github-square span-ic-space fa-2x" style="color: #000000" data-tilt></i></a>
            <a href="https://www.linkedin.com/in/keshav-chawla/" target="_blank"> <i class="fab fa-linkedin span-ic-space fa-2x" style="color: #000000"></i></a>
            <a href="https://twitter.com/KeshavChawla_" target="_blank"> <i class="fab fa-twitter-square span-ic-space fa-2x" style="color: #000000"></i></a>
            <a href="https://instagram.com/keshav.chawla_/" target="_blank"> <i class="fab fa-instagram-square span-ic-space fa-2x" style="color: #000000"></i></a>
            <!-- <a href="https://facebook.com/keshav1chawla" target="_blank"> <i class="fab fa-facebook-square span-ic-space fa-2x" style="color: #000000"></i></a> -->
            <a href="https://dribbble.com/keshavc" target="_blank"> <i class="fab fa-dribbble-square span-ic-space fa-2x" style="color: #000000"></i></a>
            <br><br>
            <?php include('includes/memoji-carousel.html'); ?>
            <br>
            <h5>Made with love in &#10084;&#65039; in &#127464;&#127462;</h5>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include('includes/footer.html'); ?>
  <!-- <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script> -->
  
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <script>
    fontAwesomeIconTilt();
    addMemojiSlides();
    glideSlideSetup();
  </script>

</body>

</html>