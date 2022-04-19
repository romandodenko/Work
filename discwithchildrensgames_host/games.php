<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main.css">
  <script src="./js/main.js" defer></script>
  <script src="./js/backer.js" defer></script>
  <title>discwithchildrensgames.com</title>
  <?php 
		require "./db.php";
	?>
</head>

<body class="games-body">
  <div class="games">
    <div class="games__container container">
      <?php 
      include 'header-page.php';
    ?>
      <h2 class="games__title">
        Games
      </h2>
      <div class="games__body">
        <div class="games__image">
          <img src="./img/dragon-chinese.jpg" alt="Games">
        </div>
        <div class="games__descr">
          <h3 class="games__subtitle">
            Dragon chinese
          </h3>
          <div class="games__wrapper-link">
            <a class="games__link" href="./china-dragon/index.html">Play</a>
          </div>
        </div>
      </div>
      <div class="frame__content games">
        <div class="games__body">
          <div class="games__image">
            <img src="./img/pirates.jpg" alt="Games">
          </div>
          <div class="games__descr">
            <h3 class="games__subtitle">
              Pirates fortune
            </h3>
            <div class="games__wrapper-link">
              <a class="games__link" href="./pirates-fortune/index.html">Play</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>