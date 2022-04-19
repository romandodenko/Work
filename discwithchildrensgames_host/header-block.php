
  <?php if(isset($_SESSION['logged_user'])) : ?>

	<div class="welcome__links welcome-links vis" style="justify-content: space-between;">
									<div class="header__profile profile">
										<p class="profile__text text"><?php echo $_SESSION['logged_user']->login; ?></p>
										<button class="profile__btn"></button>
										</div>
                  <a class="welcome-links__link reg-link" href="games.php">Games</a>
								</div>
<ul class="welcome__list welcome-list">
	<li class="welcome-list__item">
		<a class="welcome-list__link" href="policy.php">Privacy policy</a>
	</li>
	<li class="welcome-list__item">
		<a class="welcome-list__link" href="terms.php">Terms and conditions</a>
	</li>
		<li class="welcome-list__item">
			<a class="welcome-list__link" href="cockie.php">Cookie policy</a>
		</li>
	</ul>

          <?php else : ?>


            <div class="welcome__links welcome-links">
	<a class="welcome-links__link reg-link" href="reg.php">Registration</a>
  <a class="welcome-links__link reg-link" href="games.php">Games</a>
	<a class="welcome-links__link" href="log.php">Authorization</a>
</div>
<ul class="welcome__list welcome-list">
	<li class="welcome-list__item">
		<a class="welcome-list__link" href="policy.php">Privacy policy</a>
	</li>
	<li class="welcome-list__item">
		<a class="welcome-list__link" href="terms.php">Terms and conditions</a>
	</li>
		<li class="welcome-list__item">
			<a class="welcome-list__link" href="cockie.php">Cookie policy</a>
		</li>
	</ul>




            <?php endif; ?>