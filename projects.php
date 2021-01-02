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
      <div class="col-md-12">
        <h1 class="hello-about" id="project-title">Projects &#x1F4CB;</h1>
        <br><br>
        <?php include('includes/projects/latex-to-mobius.html'); ?>
        <?php include('includes/projects/magic-mirror.html'); ?>
        <?php include('includes/projects/hack-the-fridge.html'); ?>
        <?php include('includes/projects/straights.html'); ?>
        <?php include('includes/projects/deca-website.html'); ?>
        <?php include('includes/projects/simplex.html'); ?>
        <?php include('includes/projects/insuremotion.html'); ?>
        <?php include('includes/projects/design-portfolio.html'); ?>
      </div>
     
    </div>
    <?php include('includes/footer.html'); ?>
    <script>
        adjustProjectImages();
      </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/projects-AOS.js"></script>
</body>

</html>