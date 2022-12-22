<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Henry F. Dotson</title>
  <link href="style.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
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
<img src="<?php echo $randomImage ?>" id="homeImage" />
<div id="date-time"></div>
<div id="nav">
<a href="/about.php">about</a> -
<a href="">resume</a> -
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