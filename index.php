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
      <h3>Formula
        <br />
        <br ?>
        A = [ (a + b) / 2 ] x h
      </h3>
      <br />
      <div class="page-content">Please enter integers for dimensions:</div>
      <div class="page-content-php">
        <br />
        <form action="answer.php" method="POST">
            A base:
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="a-base">
              <label class="mdl-textfield__label" for="a-base">A Base</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            mm
            <br />
            B base:
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="b-base">
              <label class="mdl-textfield__label" for="b-base">B Base</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            mm
          <br />
            Height:
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="height">
              <label class="mdl-textfield__label" for="height">Height</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            mm
          <br />
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
            Calculate
          </button>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
