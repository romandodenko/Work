<?php if ( empty(session_id()) ) session_start(); ?>
<?php 
  include 'header.php';
?>
<main>
  <section class="cockie">
    <div class="cockie__container container">
      <h1 class="cockie__title">
        Politik om cookies
      </h1>
      <ul class="cockie__list">
        <li class="cockie__item">
          <h2 class="cockie__subtitle">
            Hvad er cookies
          </h2>
        </li>
        <li class="cockie__item">
          <p class="cockie__text">
            Som det er almindelig praksis på næsten alle professionelle websteder, bruger dette websted cookies, som
            er små filer
            der downloades til din computer for at forbedre din oplevelse. Denne side beskriver, hvilke oplysninger
            de indsamler, hvordan vi bruger dem, og hvorfor vi nogle gange har brug for at gemme disse cookies. Vi
            vil også fortælle, hvordan du
            kan forhindre disse cookies i at blive gemt, men dette kan dog nedgradere eller "bryde" visse elementer
            af
            webstedets funktionalitet.
          </p>
        </li>
        <li>
          <h2 class="cockie__subtitle">
            How We Use Cookies
          </h2>
        </li>
        <li class="cockie__item">
          <p class="cockie__text">
            We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no
            industry
            standard options for disabling cookies without completely disabling the functionality and features they
            add to this site. It is recommended that you leave on all cookies if you are not sure whether you need
            them or not in case they are used to provide a service that you use.
          </p>
        </li>
        <li>
          <h2 class="cockie__subtitle">
            Disabling Cookies
          </h2>
        </li>
        <li class="cockie__item">
          <p class="cockie__text">
            You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help
            for how to do this). Be aware that disabling cookies will affect the functionality of this and many
            other
            websites that you visit. Disabling cookies will usually result in also disabling certain functionality
            and
            features of the this site. Therefore it is recommended that you do not disable cookies.
          </p>
        </li>
        <li>
          <h2 class="cockie__subtitle">
            The Cookies We Set
          </h2>
        </li>
        <li class="cockie__item">
          <p class="cockie__text">
            <span>1) Account related cookies:</span> If you create an account with us then we will use cookies for
            the
            management of the signup process and general administration. These cookies will usually be deleted when
            you log out however in some cases they may remain afterwards to remember your site preferences when
            logged
            out.
          </p>
        </li>
        <li class="cockie__item">
          <p class="cockie__text">
            <span>2) Login related cookies:</span> We use cookies when you are logged in so that we can remember
            this
            fact. This prevents you from having to log in every single time you visit a new page. These cookies are
            typically removed or cleared when you log out to ensure that you can only access restricted features and
            areas when logged in.
          </p>
        </li>
        <li class="cockie__item">
          <p class="cockie__text">
            <span>3) Forms related cookies:</span> When you submit data to through a form such as those found on
            contact
            pages or comment forms cookies may be set to remember your user details for future correspondence.
          </p>
        </li>
        <li>
          <h2 class="cockie__subtitle">
            Third Party Cookies
          </h2>
        </li>
        <li class="cockie__item">
          <p class="cockie__text">
            In some special cases we also use cookies provided by trusted third parties. The following section
            details
            which third party cookies you might encounter through this site.
          </p>
        </li>
        <li>
          <h2 class="cockie__subtitle">
            More Information
          </h2>
        </li>
        <li class="cockie__item">
          <p class="cockie__text">
            Hopefully that has clarified things for you and as was previously mentioned if there is something that
            you
            aren't sure whether you need or not it's usually safer to leave cookies enabled in case it does interact
            med en af de funktioner, du bruger på vores websted.
          </p>
        </li>
      </ul>
    </div>
  </section>
</main>
<div class="reg" id="reg">
  <div class="reg__container container">
    <form class="reg__form" action="#" method="POST">
      <div class="reg__label">
        <input class="reg__input" type="text" placeholder="Email" name="email">
        <input class="reg__input" type="text" placeholder="Login" name="login">
      </div>
      <div class="reg__label">
        <input class="reg__input" type="password" placeholder="Password" name="password">
        <input class="reg__input" type="password" placeholder="Your password again" name="password_2">
      </div>
      <div class="reg__button">
        <div class="reg__close">x</div>
        <input class="reg__btn" type="submit" name="sign_up" value="Sende">
      </div>
    </form>
  </div>
</div>
<div class="log" id="log">
  <div class="log__container container">
    <form class="log__form" action="#" method="POST">
      <div class="log__label">
        <input class="log__input" type="text" placeholder="Your login" name="login">
      </div>
      <div class="log__label">
        <input class="log__input" type="password" placeholder="Password" name="password">
      </div>
      <div class="log__buttons">
        <div class="log__close">x</div>
        <input class="log__btn" type="submit" name="log_in" value="Indgang">
      </div>
    </form>
  </div>
</div>
<div class="cockie-body">
  <p class="cockie-body__text">
    Dette websted bruger cookies, klik ok for at acceptere, klik mere for at læse vores cookiepolitik.
  </p>
  <div class="cockie-body__buttons">
    <button class="cockie-body__btn agree">Enig</button>
    <a class="cockie-body__link more" href="cock.html">Mere</a>
  </div>
</div>
<?php 
  include 'footer.php';
?>