<?php 
  include 'header.php';
?>
    <main>
      <section class="heros">
        <div class="container">
          <div class="heros__content">
            <div class="heros__body">
              <h1 class="heros__title">Ingyenes nyerőgépek és online kaszinó játékok</h1>
              <p class="heros__text">Oldalunkon ingyenes online kaszinó játékokat játszhatok regisztráció nélkül.</p><a
                class="heros__link" href="#slots">Játék</a>
            </div>
            <div class="heros__image">
              <picture>
                <source srcset="./img/image.webp" type="image/webp"><img src="./img/image.png" alt="Img"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="aboutus" id="aboutus">
        <div class="container">
          <h2 class="aboutus__title">RÓLUNK</h2>
          <p class="aboutus__text">Ha szereted a kaszinójátékokat, de nem akarod kockáztatni a pénzedet, ingyenes online
            játékok oldalunk csak neked szól. Itt találsz játékgépeket, mivel ezek a legnépszerűbbek. A legizgalmasabb
            játékgépek hangeffektusokkal várnak rád oldalunkon, merülj bele az izgalmas játékok világába és töltsd el a
            szabadidőt. Játékaink teljesen ingyenesek, és nem igényelnek semmilyen befektetést.</p>
          <p class="aboutus__text">Weboldalunk egy kis luxust kínál, amely Önt helyezi előtérbe. Játékosaink mindig az
            elsők! Mint minden értéknél, itt is azt akarjuk, hogy biztonságban legyél, ezért a biztonság, valamint a
            fair play alapelve kaszinónknak. Csapatunk rengeteg tudással és hatalmas tapasztalattal rendelkezik az
            iparágban, és mi játékosként megértjük azokat az elveket és értékeket, amelyek kívánatosak egy kaszinó
            számára a játékosok szemében. Játssz bárhol, bármikor, mobilon, számítógépen vagy táblagépen. Lehetőséget
            kínálunk arra, hogy otthon, barátokkal vagy akár útközben is megnyerje ezeket a jackpotokat – éjjel-nappal!
          </p>
        </div>
      </section>
      <section class="benefites" id="benefites">
        <div class="container">
          <h2 class="benefites__title">Előnyeink</h2>
          <ul class="benefites__list">
            <li class="benefites__item">
              <p class="benefites__text">Ha csatlakozik, több száz játékot próbálhat ki szórakozásból – anyagi
                kötelezettség nélkül. Így csak a szórakozásra koncentrálhat.</p>
            </li>
            <li class="benefites__item">
              <p class="benefites__text">A közösségi nyerőgépek kaszinója 100%-ban legális. Csak azért, mert nem játszik
                készpénzben, még nem jelenti azt, hogy az oldal figyelmen kívül hagyhatja a helyi törvényeket és
                előírásokat.</p>
            </li>
            <li class="benefites__item">
              <p class="benefites__text">Közösségi játékaink minden eszközön elérhetőek lesznek. Ha megnézi a
                statisztikákat, az ezeken az oldalakon keresett pénz nagy része mobilfelhasználóktól származik.</p>
            </li>
          </ul>
        </div>
      </section>
      <section class="slots" id="slots">
        <div class="container">
          <ul class="slots__list">
            <li class="slots__item">
              <div class="slots__image"><a href="slot-1.php">
                  <picture>
                    <source srcset="./img/slot-1.webp" type="image/webp"><img src="./img/slot-1.jpg" alt="Img">
                  </picture>
                </a></div>
              <div class="slots__descr"><a class="slots__link" href="slot-1.php">Egyptian Fortunes </a><a
                  class="slots__play" href="slot-1.php">Játék</a></div>
            </li>
            <li class="slots__item">
              <div class="slots__image"><a href="slot-2.php">
                  <picture>
                    <source srcset="./img/slot-2.webp" type="image/webp"><img src="./img/slot-2.jpg" alt="Img">
                  </picture>
                </a></div>
              <div class="slots__descr"><a class="slots__link" href="slot-2.php">Mysterious Egypt </a><a
                  class="slots__play" href="slot-2.php">Játék</a></div>
            </li>
            <li class="slots__item">
              <div class="slots__image"><a href="slot-3.php">
                  <picture>
                    <source srcset="./img/slot-3.webp" type="image/webp"><img src="./img/slot-3.jpg" alt="Img">
                  </picture>
                </a></div>
              <div class="slots__descr"><a class="slots__link" href="slot-3.php">Pyramid King </a><a
                  class="slots__play" href="slot-3.php">Játék</a></div>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Oldal 18 év felettiek számára. 18 éves vagy?</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Van</a>
          </div>
        </form>
      </div>
    </div>
    <?php 
    include 'footer.php';
  ?>