<?php 
 include 'header-page.php';
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
          <a class="hero__link link-hero" href="index.php#game">Próbálj meg játszani</a>
        </div>
      </div>
    </section>
    <section class="politicks">
      <div class="politicks__container container">
        <h1>A play-goldgame.com cookie-kra vonatkozó szabályzata</h1>

        <p>Ez a play-goldgame.com cookie-kra vonatkozó szabályzata, amely a play-goldgame.com webhelyről érhető el.</p>

        <h2><strong>Mik azok a cookie-k</strong></h2>

        <p>Amint az szinte minden professzionális webhelyen bevett gyakorlat, ez a webhely cookie-kat használ, amelyek
          apró fájlok, amelyek letöltődnek az Ön számítógépére, hogy javítsák az élményt. Ez az oldal leírja, hogy
          milyen információkat gyűjtenek, hogyan használjuk azokat, és miért kell néha tárolnunk ezeket a sütiket. Azt
          is megosztjuk majd, hogyan akadályozhatja meg ezeknek a cookie-knak a tárolását, azonban ez a webhely
          funkcióinak bizonyos elemeit leminősítheti vagy „megszakíthatja”.</p>

        <h2><strong>Hogyan használjuk a sütiket</strong></h2>

        <p>Az alábbiakban részletezett számos okból sütiket használunk. Sajnos a legtöbb esetben nincsenek ipari
          szabványok a cookie-k letiltására anélkül, hogy teljesen letiltanák az oldalhoz hozzáadott funkciókat és
          funkciókat. Javasoljuk, hogy hagyjon bekapcsolva minden cookie-t, ha nem biztos abban, hogy szüksége van-e
          rájuk, vagy sem, ha az Ön által használt szolgáltatás nyújtására használják őket.</p>

        <h2><strong>Cookie-k letiltása</strong></h2>

        <p>A cookie-k beállítását úgy akadályozhatja meg, hogy módosítja a böngésző beállításait (erről a böngésző
          súgójában olvashat). Ügyeljen arra, hogy a cookie-k letiltása hatással lesz ennek és sok más, Ön által
          meglátogatott webhelynek a működésére. A cookie-k letiltása általában az oldal bizonyos funkcióinak és
          funkcióinak letiltását is eredményezi. Ezért azt javasoljuk, hogy ne tiltsa le a cookie-kat.</p>

        <h2><strong>Az általunk beállított cookie-k</strong></h2>

        <ul>

          <li>
            <p>E-mailes hírlevelekkel kapcsolatos cookie-k</p>
            <p>Ez a webhely hírlevél- vagy e-mail feliratkozási szolgáltatásokat kínál, és cookie-kat használhatunk
              annak emlékezésére, hogy Ön már regisztrált-e, és hogy megjelenjenek-e bizonyos értesítések, amelyek csak
              a feliratkozott/leiratkozott felhasználókra vonatkozhatnak.</p>
          </li>

        </ul>

        <h2><strong>Harmadik féltől származó cookie-k</strong></h2>

        <p>Egyes speciális esetekben megbízható harmadik felek által biztosított cookie-kat is használunk. A következő
          szakasz részletezi, hogy mely harmadik féltől származó cookie-kkal találkozhat ezen a webhelyen.</p>

        <ul>

          <li>
            <p>Ez a webhely a Google Analytics szolgáltatást használja, amely az egyik legelterjedtebb és
              legmegbízhatóbb elemzési megoldás az interneten, és segít megérteni, hogyan használja a webhelyet, és
              hogyan javíthatjuk a felhasználói élményt. Ezek a cookie-k nyomon követhetik például azt, hogy mennyi időt
              tölt a webhelyen, és milyen oldalakat látogat meg, hogy továbbra is lebilincselő tartalmat állíthassunk
              elő.</p>
            <p>A Google Analytics cookie-kkal kapcsolatos további információkért tekintse meg a hivatalos Google
              Analytics oldalt.</p>
          </li>

        </ul>

        <h2><strong>További információ</strong></h2>

        <p>Remélhetőleg ez tisztázta a dolgokat, és amint azt korábban említettük, ha nem biztos abban, hogy szüksége
          van-e valamire, általában biztonságosabb engedélyezni a cookie-kat arra az esetre, ha az interakcióba lépne az
          Ön által használt szolgáltatások valamelyikével. oldalunkon.</p>

      </div>
    </section>
  </main>
  <div class="popup-log">
    <div class="popup-log__close"></div>
    <div class="popup-log__body">
      <form class="popup-log__form-log log" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="text" placeholder="Your e-mail" name="email" required>
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
          <input class="reg__input" type="text" placeholder="Email" name="email" required>
        </div>
        <div class="reg__label">
          <input class="reg__input" type="password" placeholder="Password" name="password" required>
        </div>
        <div class="reg__label">
          <input class="reg__checkbox" type="checkbox" required><span class="reg__span">ismerkedtem meg <a
              href="policy.html">adatvédelmi irányelvek</a> és <a href="terms.html">felhasználási feltételek</a> és elfogadom
              van</span>
        </div>
        <input class="reg__btn" type="submit" name="sign_up" value="Bejegyzés">
      </form>
      <button class="popup-reg__exit"></button>
    </div>
  </div>
  <?php 
  include 'footer-page.php';
?>