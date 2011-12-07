<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Demo</title>
  <meta name="description" content="Demo Site Thing">
  <meta name="author" content="Benjamin Lundquist">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <!-- <meta name="viewport" content="width=device-width,initial-scale=1"> -->
  <meta name="viewport" content="width=1022,maximum-scale=1.0,initial-scale=1" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/supersized.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

  <div id="container">

    <header>

    </header>

    <div id="main" role="main">

		<?php include('content/main.php');  ?>

    </div>

    <footer>

    </footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>

  <script defer src="js/mylibs/supersized.3.2.6.js"></script>
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>


</body>
</html>
