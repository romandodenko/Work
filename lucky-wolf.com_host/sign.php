<?php 
  include 'header-page.php';
?>
  <main>
    <section class="block-sign">
      <div class="block-sign__container container">
        <div class="block-sign__body">
          <form class="block-sign__form-reg reg" action="#" method="POST">
            <input type="text" name="country" hidden value="en">
            <input type="text" name="site" hidden value="lucky-wolf.com">
            <div class="reg__label">
              <input class="reg__input" type="text" placeholder="Email" name="email">
            </div>
            <div class="reg__label">
              <input class="reg__input" type="password" placeholder="Password" name="password">
            </div>
            <div class="reg__label">
              <input class="reg__checkbox" type="checkbox" required><span class="reg__span">I met <a
                  href="privacy.php">privacy policy</a> and <a href="terms.php">terms and conditions</a> and
                  I accept van</span>
            </div>
            <input class="reg__btn" type="submit" name="sign_up" value="Registration">
          </form>
        </div>
      </div>
    </section>
  </main>
  <?php 
  include 'footer.php';
?>