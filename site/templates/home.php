<?php if (!$kirby->user()) go('/panel/login') ?>
<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">

  <?php snippet('head') ?>
  <!-- <meta name="author" content="SitePoint"> -->

  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>

<body>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
  <?php snippet('header') ?>
  <div class="content">
    <div id="image-container">
        <?php if($image = $page->image_cover()): ?>
            <img src="<?= $image->url() ?>" width="100%" alt="Cover">
        <?php endif ?>
      <div id="image-content">
        <div id="image-text">
        <?= $page->image_text()->kirbytext() ?>
        </div>
      </div>
    </div>
    <div id="content-text">
        <?= $page->text()->kirbytext() ?>
    </div>


    <?php snippet('footer') ?>

    <script>
      window.onscroll = function () { stickyHeader() };

      var navbar = document.getElementById("header");
      var sticky = navbar.offsetTop;

      function stickyHeader() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")
        } else {
          navbar.classList.remove("sticky");
        }
      }
    </script>

</body>

</html>