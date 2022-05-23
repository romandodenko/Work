<?php 
include 'header-page.php';
?>
  <main>
    <section class="background">
      <div class="background__body">
        <div class="background__item">
          <picture><source srcset="./img/hero-back.webp"type="image/webp"><img src="./img/hero-back.png" alt="Hero back"></picture>
        </div>
      </div>
    </section>
    <section class="politicks">
      <div class="politicks__container container">
        <h1 class="title">Cookie Policy for Lucky-onlinegames</h1>

        <p class="text">This is the Cookie Policy for SITE.COM, accessible from Lucky-onlinegames</p>
        
        <h2 class="subtitle"><strong>What Are Cookies</strong></h2>
        
        <p class="text">As is common practice with almost all professional websites this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. This page describes what information they gather, how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these cookies from being stored however this may downgrade or 'break' certain elements of the sites functionality.</p>
        
        <h2 class="subtitle"><strong>How We Use Cookies</strong></h2>
        
        <p class="text">We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry standard options for disabling cookies without completely disabling the functionality and features they add to this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in case they are used to provide a service that you use.</p>
        
        <h2 class="subtitle"><strong>Disabling Cookies</strong></h2>
        
        <p class="text">You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites that you visit. Disabling cookies will usually result in also disabling certain functionality and features of the this site. Therefore it is recommended that you do not disable cookies.</p>

        <h2 class="subtitle"><strong>The Cookies We Set</strong></h2>
        
        <ul>
      
        <li>
            <p>Email newsletters related cookies</p>
            <p>This site offers newsletter or email subscription services and cookies may be used to remember if you are already registered and whether to show certain notifications which might only be valid to subscribed/unsubscribed users.</p>
        </li>
        
        </ul>
        
        <h2 class="subtitle"><strong>Third Party Cookies</strong></h2>
        
        <p class="text">In some special cases we also use cookies provided by trusted third parties. The following section details which third party cookies you might encounter through this site.</p>
        
        <ul>
        
        <li>
            <p>This site uses Google Analytics which is one of the most widespread and trusted analytics solution on the web for helping us to understand how you use the site and ways that we can improve your experience. These cookies may track things such as how long you spend on the site and the pages that you visit so we can continue to produce engaging content.</p>
            <p>For more information on Google Analytics cookies, see the official Google Analytics page.</p>
        </li>
        </ul>
        
        <h2 class="subtitle"><strong>More Information</strong></h2>
        
        <p class="text">Hopefully that has clarified things for you and as was previously mentioned if there is something that you aren't sure whether you need or not it's usually safer to leave cookies enabled in case it does interact with one of the features you use on our site.</p>
      
        
      </div>
    </section>
  </main>
  <div class="form-popup form-popup-transition">
    <div class="form-popup__close"></div>
    <div class="form-popup__body">
      <p class="form-popup__text text">
        Subscribe to our updates
      </p>
      <form action="#" class="form-popup__form" method="post" enctype="multipart/form-data">
        <input type="text" name="country" hidden value="au">
        <input type="text" name="site" hidden value="lucky-onlinegames.com">
        <label class="form-popup__label">
          <input class="form-popup__input" type="text" name="name" placeholder="Name*" required>
          </label>
        <label class="form-popup__label">
          <input class="form-popup__input" type="email" name="email" placeholder="E-mail*">
          </label>
          <div class="form-popup__wrapper-checkbox">
            <input class="form-popup__checkbox" type="checkbox" required><span class="form-popup__checkbox-span">I have read the <a class="form-popup__checkbox-link" href="politick.php">privacy policy</a> and <a class="form-popup__checkbox-link" href="terms.php">terms and conditions</a> and agree to them</span>
          </div>
          <input class="form-popup__btn" type="submit" name="clicker" value="Subscribe">
      </form>
      <?php
          $data = $_POST;
          $get_url = 'https://top10casino-no.com/social/mail/?mail=' . trim($data['email']) . '&country=' . trim($data['country']) . '&site=' . trim($data['site']);
          $responce = file_get_contents($get_url);
          $jsonstr = json_decode($responce);
      ?>
      <button class="form-popup__exit"></button>
    </div>
  </div>
  <?php 
include 'footer.php';
?>