<?php if (!$kirby->user()) go('/panel/login') ?>
<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">

  <?php snippet('head') ?>
  <!-- <meta name="description" content="The HTML5 Herald"> -->
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
        <?php if($page->image_text()->kirbytext() === ""): ?>
      <div id="image-content">
        <div id="image-text">
        <?= $page->image_text()->kirbytext() ?>
        </div>
      </div>
      <?php endif ?>
    </div>
    <div id="content-text">
        <?= $page->text()->kirbytext() ?>
        <?= $response ?>
      <?php if($page->toggle()->toBool()): ?>
      <form id="form" action="<?= $page->url() ?>" method="post">
        NAME: *
        <br>
        <input class="text-input" type="text" name="name" value="" size="40">
        <br>
        EMAIL ADDRESS: *
        <br>
        <input class="text-input" type="text" name="email" value="" size="40">
        <br>
        HOW CAN WE HELP YOU: *
        <br>
        <textarea class="text-input" name="text" rows="8" cols="38"></textarea>
        <br>
        <input class="input-button" type="reset" name="resetButton" value="Reset">
        <input class="input-button" type="submit" name="submit" value="Submit">
        <input type="hidden" name="destination-email" value="<?= $page->form_email() ?>" size="40">
      </form>
      <?php endif ?>

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