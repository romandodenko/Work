<header class="header">
    <div class="header__container container">
      <div class="header__body" data-aos="fade-right">
        <a class="header__logo" href="index.php">SC Crown</a>
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link" href="index.php">Main</a>
            </li>
            <?php if(isset($_SESSION['logged_user'])) : ?>
            <li class="header__item">
            <div class="header__profile profile">
            <p class="profile__text">
              <?php echo $_SESSION['logged_user']->login; ?>
              </p>
              <button class="profile__btn">Exit</button>
            </div>
            </li>
          <?php else : ?>
            <li class="header__item">
              <button class="header__btn reg-click">Registration</button>
            </li>
            <li class="header__item">
              <button class="header__btn log-click">Log in</button>
            </li>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </div>
  </header>