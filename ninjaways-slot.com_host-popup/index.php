<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/JejuGothic-Regular.woff" as="font">
  <link rel="preload" href="./fonts/JejuGothic-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Kanit-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Kanit-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Kanit-Bold.woff" as="font">
  <link rel="preload" href="./fonts/Kanit-Bold.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>ninjaways-slot.com</title>
</head>
<body>
  <main>
    <section class="block-1">
      <div class="block-1__container container">
        <div class="block-1__body">
            <div class="block-1__logo">
              <img src="./img/logo.png" alt="site logotip">
            </div>
            <span class="block-1__span">
              Wszystkie twoje ulubione gry na automatach tutaj, na stronie automatów online!
            </span>
            <h1 class="block-1__title">
              Społecznościowe kasyno online
            </h1>
            <div class="block-1__link">
              <a href="#slot">
                Automaty
              </a>
            </div>
        </div>
      </div>
    </section>
    <section class="block-navigation">
      <div class="block-navigation__container container">
        <ul class="block-navigation__list">
          <li class="block-navigation__item">
            <a class="block-navigation__link" href="index.php">Strona główna</a>
          </li>
          <li class="block-navigation__item">
            <a class="block-navigation__link" href="#slot">Automaty</a>
          </li>
          <li class="block-navigation__item">
            <a class="block-navigation__link" href="#about">O nas</a>
          </li>
        </ul>
      </div>
    </section>
    <section class="block-2" id="about">
      <div class="block-2__container container">
          <div class="block-2__image" data-da=".block-2__descr, 991, 2">
            <img src="./img/block-2/image.jpg" alt="image">
          </div>
          <div class="block-2__descr">
            <h2 class="block-2__title">
              Darmowe automaty do gry już teraz
            </h2>
            <p class="block-2__text">
              Dzięki kasynu społecznościowemu możesz grać w darmowe automaty i możesz przetestować funkcje każdej gry, aby sprawdzić, czy pasuje do Twojego stylu gry. Ta lista darmowych automatów zawiera wszystkich ulubionych graczy, więc jeśli jesteś nowy w świecie kasyn online, jest to doskonały sposób, aby ich poznać. 
            </p>
            <h2 class="block-2__title">
              Ciesz się automatami do gry
            </h2>
            <p class="block-2__text">
              Witamy w domu społecznościowego kasyna! Jeśli jesteś fanem automatów online, prawdopodobnie znajdziesz coś dla siebie, a wszystko to w jednym świetnym miejscu. Co więcej, prawie co tydzień dodawane są nowe gry. Jeśli chcesz zobaczyć listę popularnych automatów do gry w kasynie. 
            </p>
          </div>
      </div>
    </section>
    <section class="block-3" id="slot">
      <div class="block-3__container container">
        <ul class="block-3__list">
          <li class="block-3__item">
            <div class="block-3__image">
              <a href="lucky-fortune-cat.php">
                <img src="./img/block-3/lucky-fortune-cat.jpg" alt="picture">
              </a>
            </div>
          </li>
          <li class="block-3__item">
            <div class="block-3__image">
              <a href="yakozuna-clash.php">
                <img src="./img/block-3/yakozuna-clash.jpg" alt="picture">
              </a>
            </div>
          </li>
          <li class="block-3__item block-3__item_big">
            <div class="block-3__image">
              <a href="beaty-warrior.php">
                <img src="./img/block-3/beaty-warrior.jpg" alt="picture">
              </a>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="block-4">
      <div class="block-4__container container">
        <ul class="block-4__list">
          <li class="block-4__item">
            <h2 class="block-4__title">
              <span class="block-4__icon">
                <img src="./img/block-4/icon-1.png" alt="icon">
              </span>
              Czas ciągłej rozrywki
            </h2>
            <p class="block-4__text">
              Godziny nieprzerwanej rozrywki, najnowocześniejsza grafika i przyjemna rozgrywka.
            </p>
          </li>
          <li class="block-4__item">
            <h2 class="block-4__title">
              <span class="block-4__icon">
                <img src="./img/block-4/icon-2.png" alt="icon">
              </span>
              Kasyno w podróży
            </h2>
            <p class="block-4__text">
              Możesz grać we wszystkie swoje ulubione automaty, gry stołowe i karciane w dowolnym czasie.
            </p>
          </li>
        </ul>
      </div>
    </section>
  </main>
  <div class="popup popup-active">
  <div class="popup__close"></div>
  
  <div class="popup__body">
  <form class="popup__form" action="/">
    <p class="popup__text">Ta strona jest przeznaczona dla dorosłych użytkowników.
<span>Czy masz ukończone 18 lat?</span></p>
<label>
<input type="checkbox" name="number">
</label>
<label>
<input type="text" name="years-old">
</label>
<button class="popup__button">Tak</button>
  </form>
  </div>
  </div>
  <?php 
  include 'footer.php';
?>