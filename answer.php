<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of a Trapezoid, in PHP" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Nathan De Silva" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Area of a Trapezoid, in PHP</title>
</head>
<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of a Trapezoid, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/trapezoid.svg" alt="trapezoid" width="250" />
      </div>
      <div class="page-content-php">
        <div name="area-of-trapezoid">
          <div class="mdl-layout__header-row">
            <br />
            <div class="mdl-layout__content">
            </div>
            <div class= "mdl-layout__left">
        <?php

        // input
        $aBase = $_POST["a-base"];
        $bBase = $_POST["b-base"];
        $height = $_POST["height"];

        // process
        $area = (($aBase + $bBase) / 2) * $height;

        // output
        echo "If Base A is " . $aBase . " and Base B is " . $bBase . " and the height is " . $height . ". ";
        echo "<br />";
        echo "<br />";
        echo "Then the Area is: " . $area . " mm²";
        echo "<br />";

        ?>
        </div>
      </div>
  </div>
  </main>
  </div>
</body>
</html>