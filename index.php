<?php
// function to allow easy insertion of gallery code
include("functions.php");
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Anime Image Hub – Download high-quality romance, action, fantasy, and slice-of-life anime images."> 
  <meta name="keywords" content="anime, romance, action, fantasy, slice of life, images, wallpapers, downloads">
  <meta name="author" content="Ryotaro">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Anime Image Hub</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=LatoUbuntu" rel="stylesheet">

  <!-- External Stylesheets -->
  <link rel="stylesheet" href="css/font-awesome.min.css" >
  <link rel="stylesheet" href="css/simple-lightbox.css" >
  <link rel="stylesheet" href="css/gallery.css" >
  <link rel="stylesheet" href="css/layout.css" >
  <link rel="stylesheet" href="css/navigation.css" >
  <link rel="stylesheet" href="css/form.css" >

  <!-- jQuery -->
  <script src="js/j_query_min.js"></script>
  <script src="js/simple-lightbox.min.js"></script>
</head>

<body>
  <div class="wrapper">

    <!-- Logo -->
    <div class="logo">
      <a href="index.php">
        <img class="responsive" src="images/anime.png" alt="Anime Logo" >
      </a>
    </div>

    <!-- Top Title -->
    <div class="top-title">
      <h2>AnimeHub 🎀</h2>
    </div>

    <!-- Navigation Header -->
    <div class="header">
      <div class="menu-header">

        <i class="fa fa-bars"></i>

        <div class="menu-content">

          <ul>
            <li><a class="nav" href="index.php">Home</a></li>
            <li>
              <a class="nav dropbtn" href="#">
                Gallery <i class="fa fa-chevron-down"></i>
              </a>
              <ul class="dropdown">
                <li><a class="nav" href="index.php?page=romance">Romance 💕</a></li>
                <li><a class="nav" href="index.php?page=action">Action 💥</a></li>
                <li><a class="nav" href="index.php?page=fantasy">Fantasy ✨</a></li>
                <li><a class="nav" href="index.php?page=sliceoflife">Slice of Life ☕</a></li>
              </ul>
            </li>
            <li><a class="nav" href="index.php?page=questions">FAQ</a></li>
            <li><a class="nav" href="index.php?page=links">Links</a></li>
            <li><a class="nav" href="index.php?page=contact">Contact</a></li>
          </ul>
        </div> <!-- /menu-content -->
      </div> <!-- /menu-header -->
    </div> <!-- /header -->

    <!-- Main Content -->
    <?php
      if (!isset($_REQUEST['page'])) {
        include("home.php");
      } else {
        $page = preg_replace('/[^0-9a-zA-Z]-/', '', $_REQUEST['page']);
        include("$page.php");
      }
    ?>

    <!-- Footer -->
    <div class="box footer">
      Ryotaro 2025
    </div>

  </div> <!-- /wrapper -->


  <!-- jQuery Script -->
  <script>
    $(document).ready(function() {

        // Dropdown for Gallery menu
        $('.dropbtn').click(function() {
            $('.dropdown').toggleClass('display');
        });

        // Hamburger menu toggle
        $('.fa-bars').click(function() {
            $('.menu-content').toggleClass('show-menu');
        });
    });
    </script>
  
  <script>
    (function() {
      var $gallery = new SimpleLightbox('.gallery a', {})
    })();
  </script>

</body>
</html>
