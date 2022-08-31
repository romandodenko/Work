<?php 
  include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__image">
              <picture>
                <source srcset="./img/hero.webp" type="image/webp"><img src="./img/hero.png" alt="Img"></picture>
            </div>
            <div class="hero__body">
              <h1 class="hero__title">Ingyenes online közösségi kaszinójátékok szórakozásból</h1><a class="hero__link"
                href="#games">Játék</a>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits">
        <div class="container">
          <h2 class="benefits__title">Előnyeink</h2>
          <ul class="benefits__list">
            <li class="benefits__item"><span class="benefits__icon">
                <picture>
                  <source srcset="./img/i1.webp" type="image/webp"><img src="./img/i1.png" alt="Icon"></picture>
              </span>
              <h3 class="benefits__subtitle">SLOTS INGYENES</h3>
              <p class="benefits__text">Játssz és érezd jól magad pénz befizetése nélkül</p>
            </li>
            <li class="benefits__item"><span class="benefits__icon">
                <picture>
                  <source srcset="./img/i2.webp" type="image/webp"><img src="./img/i2.png" alt="Icon"></picture>
              </span>
              <h3 class="benefits__subtitle">KASZINÓ REGISZTRÁCIÓ NÉLKÜL</h3>
              <p class="benefits__text">Játékaink nem igényelnek regisztrációt</p>
            </li>
            <li class="benefits__item"><span class="benefits__icon">
                <picture>
                  <source srcset="./img/i3.webp" type="image/webp"><img src="./img/i3.png" alt="Icon"></picture>
              </span>
              <h3 class="benefits__subtitle">Játssz kockázat nélkül</h3>
              <p class="benefits__text">A mi játékaink nem szerencsejátékok</p>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">RÓLUNK</h2>
          <p class="about__text">Ahogy a kaszinók a fizikai kaszinókból új online kaszinókká fejlődtek, az emberek egyre
            jobban megismerték az ingyenes kaszinójátékokat. Olyan kaszinótípus, amelyben nincs pénz vagy pénznyeremény;
            Ehelyett mindent a maximális játékélményre terveztek. A jövőben a legjobb online kaszinók jobban
            összpontosítanak a játék szórakoztatására, mint a nyerés vagy a veszteség izgalmára. Büszkén jelentjük be,
            hogy ezt a jövőt mi vezetjük teljesen ingyenes online kaszinólehetőségeinkkel, ahol nem nyerhet vagy
            veszíthet, de rengeteget szórakozhat!</p>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image"><a href="game-1.php">
                  <picture>
                    <source srcset="./img/game-1.webp" type="image/webp"><img src="./img/game-1.jpg" alt="Img">
                  </picture>
                </a></div>
            </li>
            <li class="games__item">
              <div class="games__image"><a href="game-2.php">
                  <picture>
                    <source srcset="./img/game-2.webp" type="image/webp"><img src="./img/game-2.jpg" alt="Img">
                  </picture>
                </a></div>
            </li>
            <li class="games__item">
              <div class="games__image"><a href="game-3.php">
                  <picture>
                    <source srcset="./img/game-3.webp" type="image/webp"><img src="./img/game-3.jpg" alt="Img">
                  </picture>
                </a></div>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php 
    include 'footer.php';
  ?>