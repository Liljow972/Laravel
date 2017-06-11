<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<style>
        body, html {
            height: 100%;
            font-family: "Inconsolata", sans-serif;
        }
        .bgimg {
           background-position: center;
            background-size: cover;
            background-image: url("http://cdn2.hubspot.net/hubfs/53/To_Do_List.png");
            min-height: 75%;

            ba
        }
        .menu {
            display: none;
        }
</style>
<body>

<?php include ('en_tete.html');
  ?>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
      <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
        <span class="w3-tag">Open Everyday</span>
      </div>
      <div class="w3-display-middle w3-center">
        <span class="w3-text-white" style="font-size:90px">GET YOUR <br>LIST</span>
      </div>
        <div class="w3-display-bottomright w3-center w3-padding-large">
        <span class="w3-text-white">TodoList your life</span>
      </div>
</header>

<!-- Add a background color and large text to the whole page ! Yinw --> 
<div class="w3-sand w3-grayscale w3-large">

<!-- button to  my to do list -->
<div class="w3-container" id="getlist">
  <div class="w3-content" style="max-width:700px">
   <a href="TheToDoList.php"><h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide"><button class="w3-button w3-black">GET LIST</span></h5></button></a>
    

  </div>
</div>
</body>
</html>