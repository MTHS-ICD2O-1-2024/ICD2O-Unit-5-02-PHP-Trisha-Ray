<!DOCTYPE html>
<!-- ICS2O-Unit5-02-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Positive or negative #, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Trisha Ray" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <title>Positive or negative #, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Positive or negative #, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/positive_negative.jpg" alt="positive or negative number" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $userNumber = $_POST["kind-of-number"];
          if ($userNumber == "1") {
            $randomNumber = rand(1, 6);
          } else {
            $randomNumber = rand(-6, -1);
          }
          echo "The random number is: " . $randomNumber;
          ?>
        </div>
        <br />
        <div class="page-content-answer">
          <a href="./index.php"> Return ...</a>
        </div>
        <br />
    </main>
  </div>
</body>

</html>