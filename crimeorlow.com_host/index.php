<?php 
  include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                PLAY JUST WITH <span>ONE CLICK</span> <span>ALL GAMES FREE</span>
              </h1>
              <a class="hero__link" href="#slots">
                Play now
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits">
        <div class="benefits__container container">
          <h2 class="benefits__title">Benefits</h2>
          <div class="benefits__content">
            <ul class="benefits__list">
              <li class="benefits__item">
                <div class="benefits__icon">
                  <picture><source srcset="./img/benefits/star.webp"type="image/webp"><img src="./img/benefits/star.png" alt="Icon star"></picture>
                </div>
                <p class="benefits__text">
                  PLAY FUN SLOTS FOR FREE
                </p>
              </li>
              <li class="benefits__item">
                <div class="benefits__icon">
                  <picture><source srcset="./img/benefits/star.webp"type="image/webp"><img src="./img/benefits/star.png" alt="Icon star"></picture>
                </div>
                <p class="benefits__text">
                  Various themed online slots with different themes
                </p>
              </li>
              <li class="benefits__item">
                <div class="benefits__icon">
                  <picture><source srcset="./img/benefits/star.webp"type="image/webp"><img src="./img/benefits/star.png" alt="Icon star"></picture>
                </div>
                <p class="benefits__text">
                  Safe game without risks
                </p>
              </li>
            </ul>
            <div class="benefits__image">
              <picture><source srcset="./img/benefits/img.webp"type="image/webp"><img src="./img/benefits/img.jpg" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="about__container container">
          <h2 class="about__title">
            about us
          </h2>
          <div class="about__content">
            <div class="about__column about__column_one">
              <p class="about__text">
                Find out what social online games are, how to play them and how you can benefit from them. Check out the
                most popular live social casino games that don't require any investment. Live social casinos are those
                that offer games for free. They are called so because they do not require their players to play for
                real.
              </p>
              <p class="about__text">
                These casinos or games have found their way onto tablets and smartphones and can easily be played on
                social networking sites. The point is that you don't need to invest money to play games and enjoy them.
              </p>
            </div>
            <div class="about__column about__column_two">
              <p class="about__text">
                Free slots and social slots are becoming more and more popular among gambling fans, but none are more
                iconic than the premium selection we offer here at crimeorlow.com. Selected with only the best player
                experience in mind, we bring together the highest tier of free reel and slot games on our site,
                delivering exceptional accessibility, usability and an unrivaled casino-style experience.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="slots" id="slots">
        <div class="slots__container container">
          <h2 class="slots__title">
            Slots
          </h2>
          <ul class="slots__list">
            <li class="slots__item">
              <div class="slots__image">
                <a href="slot-1.php">
                  <picture><source srcset="./img/slots/slot-1.webp"type="image/webp"><img src="./img/slots/slot-1.jpg" alt="Image slot"></picture>
                </a>
              </div>
              <div class="slots__descr">
                <a class="slots__name" href="slot-1.php">
                  Cowboys Gold
                </a>
                <a class="slots__play" href="slot-1.php">
                  Play now
                </a>
              </div>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="slot-2.php">
                  <picture><source srcset="./img/slots/slot-2.webp"type="image/webp"><img src="./img/slots/slot-2.jpg" alt="Image slot"></picture>
                </a>
              </div>
              <div class="slots__descr">
                <a class="slots__name" href="slot-2.php">
                  Gubslinger Reloader
                </a>
                <a class="slots__play" href="slot-2.php">
                  Play now
                </a>
              </div>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="slot-3.php">
                  <picture><source srcset="./img/slots/slot-3.webp"type="image/webp"><img src="./img/slots/slot-3.jpg" alt="Image slot"></picture>
                </a>
              </div>
              <div class="slots__descr">
                <a class="slots__name" href="slot-3.php">
                  Wild West Gold
                </a>
                <a class="slots__play" href="slot-3.php">
                  Play now
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Our games are intended for an ADULT audience of 18 years and older. By clicking on the button you confirm your age.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <button class="popup__button">Agree</button>
          </div>
        </form>
      </div>
    </div>
    <?php 
    include 'footer.php';
  ?>
  