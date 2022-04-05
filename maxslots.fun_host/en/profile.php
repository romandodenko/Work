<?php 
  include 'header-profile-en.php';
?>
  <main>
    <section class="profile">
      <div class="profile__container container">
        <div class="profile__body">
          <div class="profile__left">
            <h1 class="profile__name">
            <?php echo $_SESSION['logged_user']->login; ?>
            </h1>
            <p class="profile__mail">
              E-mail: <?php echo $_SESSION['logged_user']->mail; ?>
            </p>
            <button class="profile__exit">
              Exit
            </button>
          </div>
          <div class="profile__right">
            <h2 class="profile__title">
              Games for you
            </h2>
            <ul class="profile__list">
              <li class="profile__item">
                <div class="profile__image">
                  <a href="./egypt/index.html">
                    <picture><source srcset="./img/egypt-img.webp"type="image/webp"><img src="./img/egypt-img.jpg" alt="Egypt"></picture>
                  </a>
                </div>
                <div class="profile__descr">
                  <h3 class="profile__subtitle subtitle">
                    Egypt - the star of the east
                  </h3>
                  <div class="profile__wrapper-link">
                    <a class="profile__link link" href="./egypt/index.html">Play</a>
                  </div>
                </div>
              </li>
              <li class="profile__item">
                <div class="profile__image">
                  <a href="./rome/index.html">
                    <picture><source srcset="./img/rome-img.webp"type="image/webp"><img src="./img/rome-img.jpg" alt="Rome"></picture>
                  </a>
                </div>
                <div class="profile__descr">
                  <h3 class="profile__subtitle subtitle">
                    Rome, city of the gods
                  </h3>
                  <div class="profile__wrapper-link">
                    <a class="profile__link link" href="./rome/index.html">Play</a>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="profile__list">
              <li class="profile__item">
                <div class="profile__image">
                  <a href="./egypt-fortune/index.html">
                    <picture><source srcset="./img/egypt-fortune.webp"type="image/webp"><img src="./img/egypt-fortune.jpg" alt="Egypt"></picture>
                  </a>
                </div>
                <div class="profile__descr">
                  <h3 class="profile__subtitle subtitle">
                    Egypt
                  </h3>
                 <div class="profile__wrapper-link">
                  <a class="profile__link link" href="./egypt-fortune/index.html">Play</a>
                 </div>
                </div>
              </li>
              <li class="profile__item">
                <div class="profile__image">
                  <a href="./rome-fortune/index.html">
                    <picture><source srcset="./img/rome-fortune.webp"type="image/webp"><img src="./img/rome-fortune.jpg" alt="Rome"></picture>
                  </a>
                </div>
                <div class="profile__descr">
                  <h3 class="profile__subtitle subtitle">
                    Rome
                  </h3>
                  <div class="profile__wrapper-link">
                    <a class="profile__link link" href="./rome-fortune/index.html">Play</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="./js/main.min.js"></script>
</body>

</html>