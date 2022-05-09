<?php 
 include 'header.php';
?>
  <main>
    <section class="hero">
      <div class="hero__container container">
        <div class="hero__body">
          <h1 class="hero__title title">
            Goldgame
          </h1>
          <p class="hero__text text-hero">
            Játékok és szórakozás közösségi kaszinó mindenkinek
          </p>
          <a class="hero__link link-hero link-anchor" href="#game">Próbálj meg játszani</a>
        </div>
      </div>
    </section>
    <section class="game" id="game">
      <div class="game__container container">
        <ul class="game__list">
          <li class="game__item">
            <div class="game__image">
              <a href="silverback-gold.php">
                <picture>
                  <source media="(min-width: 601px)" srcset="./img/silverback-gold.png" type="image/webp">
                  <source media="(max-width: 600px)" srcset="./img/silverback-gold_320.png" type="image/png">
                  <source media="(max-width: 600px)" srcset="./img/silverback-gold_320.png" type="image/webp">
                  <img src="./img/silverback-gold.png" alt="Silverback-gold">
                </picture>
              </a>
            </div>
            <div class="game__body">
              <div class="game__descr">
                <h2 class="game__title subtitle">
                  Silverback Gold
                </h2>
                <p class="game__text text">
                  A Silverback Gold azok számára lesz érdekes, akik szeretik a klasszikus, kísérleti elemekkel
                  rendelkező játékmenetet. És ahol a fő mód olyan lenyűgöző, mint azok a pillanatok, amikor wildek,
                  scatterek és egyéb speciális szimbólumok vagy funkciók jelennek meg a képernyőn.
                </p>
              </div>
              <div class="game__wrapper-link">
                <a class="game__link link-game" href="silverback-gold.php">
                  Játék
                </a>
              </div>
            </div>
          </li>
          <li class="game__item">
            <div class="game__image">
              <a href="gonzos-gold.php">
                <picture>
                  <source media="(min-width: 601px)" srcset="./img/gonzo-gold.png" type="image/webp">
                  <source media="(max-width: 600px)" srcset="./img/gonzo-gold_320.png" type="image/png">
                  <source media="(max-width: 600px)" srcset="./img/gonzo-gold_320.png" type="image/webp">
                  <img src="./img/gonzo-gold.png" alt="Gonzos-gold">
                </picture>
              </a>
            </div>
            <div class="game__body">
              <div class="game__descr">
                <h2 class="game__title subtitle">
                  Gonzo's gold
                </h2>
                <p class="game__text text">
                  A Gonzo's Gold nyerőgépet a kaland témának szentelték. A Gonzo's Gold slot felülete a lehető
                  legegyszerűbb és legtisztább. A jobb alsó részén található gombok a főmenü hívására, a forgatás
                  elindítására, valamint az automatikus lejátszás bekapcsolására és a fogadás kiválasztására szolgálnak.
                </p>
              </div>
              <div class="game__wrapper-link">
                <a class="game__link link-game" href="gonzos-gold.php">
                  Játék
                </a>
              </div>
            </div>
          </li>
          <li class="game__item">
            <div class="game__image">
              <a href="gods-of-gold.php">
                <picture>
                  <source media="(min-width: 601px)" srcset="./img/gods-of-gold.png" type="image/webp">
                  <source media="(max-width: 600px)" srcset="./img/gods-of-gold_320.png" type="image/png">
                  <source media="(max-width: 600px)" srcset="./img/gods-of-gold_320.png" type="image/webp">
                  <img src="./img/gods-of-gold.png" alt="Gods-of-gold">
                </picture>
              </a>
            </div>
            <div class="game__body">
              <div class="game__descr">
                <h2 class="game__title subtitle">
                  Gods of gold
                </h2>
                <p class="game__text text">
                  A játék egy nagyon egyszerű beállítással kezdődik, 3 tárcsával és 3 sorral. Ezt a számot minden egyes
                  hozzáadott dob esetén megszorozzák 3-mal. A fő játék felpörgetése érdekében néhány véletlenszerűen
                  kiváltott funkció került hozzáadásra. A pörgetések elvesztése esetén néha látni fogja, hogy az utolsó
                  tárcsa hozzáadódik a keverékhez.
                </p>
              </div>
              <div class="game__wrapper-link">
                <a class="game__link link-game" href="gods-of-gold.php">
                  Játék
                </a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="about" id="about">
      <div class="about__container container">
        <h2 class="about__title subtitle">
          Ról ről goldgame
        </h2>
        <p class="about__text text">
          A Goldgame egy olyan kaszinóoldal, amely nem igényel pénzt vagy befizetést a játékhoz. Izgalmas online
          játékok, amelyekben örömmel töltheti szabadidejét. Megbízható közösségi kaszinó online nyerőgépekkel. A
          játékautomaták demóverziói engedély nélkül szerezhetők be a játékklubban.
        </p>
        <p class="about__text text">
          Játékgyűjteményünk rendszeresen frissül új és izgalmas játékokkal, így minden alkalommal, amikor felkeresi
          weboldalunkat, kipróbálhat valamit, amit még soha nem játszott. Ne hagyja ki a lehetőséget, hogy játssza a
          játékainkat. Felhívjuk figyelmét, hogy az összes biztosított játék nem igényel készpénz befektetést, nincs
          lehetőség pénznyeremények megnyerésére sem.
        </p>
        <p class="about__text text">
          Az oldalunkon csak 18 éves kortól lehet játszani
        </p>
      </div>
    </section>
  </main>
  <div class="popup-log">
    <div class="popup-log__close"></div>
    <div class="popup-log__body">
      <form class="popup-log__form-log log" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="email" placeholder="Your e-mail" name="email" required>
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password" required>
        </div>
        <input class="log__btn" type="submit" name="log_in" value="Engedélyezés">
      </form>
      <button class="popup-log__exit"></button>
    </div>
  </div>
  <div class="popup-reg">
    <div class="popup-reg__close"></div>
    <div class="popup-reg__body">
      <form class="popup-reg__form-reg reg" action="#" method="POST">
      <input type="text" name="country" hidden value="hu">
			<input type="text" name="site" hidden value="play-goldgame.com">
        <div class="reg__label">
          <input class="reg__input" type="email" placeholder="Email" name="email" required>
        </div>
        <div class="reg__label">
          <input class="reg__input" type="password" placeholder="Password" name="password" required>
        </div>
        <div class="reg__label">
          <input class="reg__checkbox" type="checkbox" required><span class="reg__span">ismerkedtem meg <a
              href="privacy.php">adatvédelmi irányelvek</a> és <a href="terms.php">felhasználási feltételek</a> és
            elfogadom
            van</span>
        </div>
        <input class="reg__btn" type="submit" name="sign_up" value="Bejegyzés">
      </form>
      <button class="popup-reg__exit"></button>
    </div>
  </div>
  <?php 
  include 'footer.php';
?>