<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Inter-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Inter-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Moul-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Moul-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/MPLUS1p-Regular.woff" as="font">
  <link rel="preload" href="./fonts/MPLUS1p-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/MPLUS1p-ExtraBold.woff" as="font">
  <link rel="preload" href="./fonts/MPLUS1p-ExtraBold.woff2" as="font">
  <link rel="stylesheet" href="./resources/simplebar.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>LUCKY WOLF</title>
  <?php 
		require "./db.php";
	?>
</head>
<body>
  <div class="back">
    <div class="back__item">
      <picture><source srcset="./img/bg.webp"type="image/webp"><img src="./img/bg.png" alt="Back cockie"></picture>
    </div>
  </div>

 <div class="cockie">
   <div class="cockie__body">
     <p class="cockie__text">
      Cookies are collected on our website. Read about the terms of use of cookies or accept them.
     </p>
     <div class="cockie__wrapper-checkbox">
      <input checked class="cockie__checkbox" type="checkbox"><span class="cockie__span">I accept cookies</span>
     </div>
     <div class="cockie__buttons">
      <a class="cockie__link" href="page-main.php">Join</a>
      <button class="cockie__btn">
        Read
      </button>
     </div>
   </div>
 </div>

<div class="start-cockie">
  <div class="start-cockie__wrapper-cockie">
    <div class="start-cockie__close"></div>
    <div class="start-cockie__body">
      <div class="start-cockie__scroll" data-simplebar>
        <h1 class="start-cockie__title-cockie">Cookie Policy</h1>

        <p class="start-cockie__text-cockie">This is the cookie policy for available on</p>

        <h2 class="start-cockie__subtitle-cockie"><strong>What are cookies</strong></h2>

        <p class="start-cockie__text-cockie">As is common practice with almost all professional websites, this website uses cookies, which are small files that
          are downloaded to your computer to improve your experience. This page describes what information they collect,
          how we use them and why we sometimes need to store these cookies. We will also share how you can prevent it
          storing cookies, however, doing so may degrade or "disrupt" certain elements of the website's functionality.
        </p>

        <h2 class="start-cockie__subtitle-cockie"><strong>How we use cookies</strong></h2>

        <p class="start-cockie__text-cockie">We use cookies for a variety of reasons detailed below. Unfortunately, in most cases, there is no industry
          standard options for disabling cookies without completely disabling the functionality and functions to which they add
          this page. It is recommended that you leave all cookies if you are unsure whether you need them or not
          when they are used to provide the services you use.</p>

        <h2 class="start-cockie__subtitle-cockie"><strong>Disabling cookies</strong></h2>

        <p class="start-cockie__text-cockie">You can prevent the setting of cookies by adjusting the settings on your browser (see browser help for
          how to do it). Please note that disabling cookies will affect the functionality of this and many other websites
          which you visit. Disabling cookies usually also disables some features and functions
          on this page. Therefore, it is advisable not to disable cookies.</p>

        <h2 class="start-cockie__subtitle-cockie"><strong>Cookies we set</strong></h2>
        <ul>

          <li>
            <p class="start-cockie__text-cockie">Account related cookies</p>
            <p class="start-cockie__text-cockie">If you create an account with us, we will use cookies to manage the registration process and
              general administration. These cookies are usually deleted when you log out, however in some cases
              may remain later to remember your site preferences when you log out.</p>
          </li>
        </ul>

        <h2 class="start-cockie__subtitle-cockie"><strong>Third party cookies</strong></h2>

        <p class="start-cockie__text-cockie">In some special cases, we also use cookies provided by trusted third parties. Details section below
          what third party cookies you may encounter through this website.</p>

        <ul>

          <li>
            <p class="start-cockie__text-cockie">This website uses Google Analytics, which is one of the most widespread and trusted analytics solutions in
              web to help us understand how you are using the website and how we can improve your experience. These
              cookies can track things like time spent on the site and pages visited so we can
              continue to create engaging content.</p>
            <p class="start-cockie__text-cockie">More information on Google Analytics cookies can be found on the official Google Analytics website.</p>
          </li>
        </ul>

        <h2 class="start-cockie__subtitle-cockie"><strong>More information</strong></h2>

        <p class="start-cockie__text-cockie">Hope this cleared things up for you and as mentioned earlier if there is anything you like
          you are not sure if you need it or not, it is usually safer to leave cookies enabled in case of interaction
          one of the functions you use on our website.</p>
      </div>
      <button class="start-cockie__exit"></button>
    </div>
  </div>
</div>
 
</body>
<script src="./resources/simplebar.js"></script>
<script src="./js/modules/cockie.js"></script>
</html>