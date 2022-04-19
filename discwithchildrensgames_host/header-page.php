<?php if(isset($_SESSION['logged_user'])) : ?>

  


  <div class="welcome__links welcome-links vis">
            <div class="header__profile profile">
										<p class="profile__text profile-text-games"><?php echo $_SESSION['logged_user']->login; ?></p>
										<button class="profile__btn profile-btn-games"></button>
										</div>
                  <a class="welcome-links__link games-link" href="games.php">Home</a>
      </div>
      <ul class="welcome__list welcome-list vis">
        <li class="welcome-list__item">
          <a class="welcome-list__link games-link" href="policy.php">Privacy policy</a>
        </li>
        <li class="welcome-list__item">
          <a class="welcome-list__link games-link" href="terms.php">Terms and conditions</a>
        </li>
        <li class="welcome-list__item">
          <a class="welcome-list__link games-link" href="cockie.php">Cookie policy</a>
        </li>
      </ul>




          <?php else : ?>


           <div class="welcome__links welcome-links vis">
        <a class="welcome-links__link reg-link games-link" href="reg.php">Registration</a>
        <a class="welcome-links__link reg-link games-link" href="main-page.php">Home</a>
        <a class="welcome-links__link games-link" href="log.php">Authorization</a>
      </div>
      <ul class="welcome__list welcome-list vis">
        <li class="welcome-list__item">
          <a class="welcome-list__link games-link" href="policy.php">Privacy policy</a>
        </li>
        <li class="welcome-list__item">
          <a class="welcome-list__link games-link" href="terms.php">Terms and conditions</a>
        </li>
        <li class="welcome-list__item">
          <a class="welcome-list__link games-link" href="cockie.php">Cookie policy</a>
        </li>
      </ul>



            <?php endif; ?>