<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="private/css/global_style.css">
    <title>Ivory_Tower_Beta</title>
  </head>



  <body>
<div id="main">


<?php


// ****************** HEADER/SECTION **********************
  include "private/sections/header.php";


// ****************** HEADER/SECTION **********************
  include "private/sections/module_C2.php";




 ?>
</div>

<div class="iframe_app">


  <iframe name="Framename1" src="http://192.168.1.31:8080/" width="50%" height="400"  class="frame-area_c1" scrolling ="auto">
  </iframe>

  <iframe name="Framename2" src="http://192.168.1.36:8080/" width="49.5%" height="400"   class="frame-area_c2" >
  </iframe>
</div>


<iframe name="Framename2" src="http://192.168.1.36:8080/sensors.html" width="49.5%" height="400"   class="frame-area" >
</iframe>


  </body>
<script src="private/js/main.js"></script>
</html>
