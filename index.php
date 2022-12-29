<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Henry F. Dotson</title>
  <link href="style.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap');
  </style>
  <?php
    $imagesDir = 'images/';
    $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $randomImage = '/'.$images[array_rand($images)]; // See comments
  ?>
</head>
<body>
<h1>henryd.studio</h1>
<p>Philadelphia, PA</p>
<img src="<?php echo $randomImage ?>" id="homeImage" />
<div id="date-time"></div>
<div id="nav">
<a href="/about.php">about</a> -
<a href="https://docs.google.com/document/d/1Npps1HTL0XLMM3XFGOym5WqFlYdfMssT_S1B6T8n0mc" target="_blank">resume</a> -
<a href="/contact.php">contact</a>

</div>

<script>
  function dateTime() {
    var today = new Date();
    var date = '<p>' + (today.getMonth() + 1) + '/' + today.getDate() + "/" + today.getFullYear(); + '</p>'
  
    document.getElementById('date-time').innerHTML=date;
  };
  dateTime();
</script>
</body>
</html>