<?php 
  include 'header-page.php';
?>
  <main>
    <section class="block-log">
      <div class="block-log__container container">
        <div class="block-log__body">
          <form class="block-log__form-log log" action="#" method="POST">
            <div class="log__label">
              <input class="log__input" type="text" placeholder="Your e-mail" name="login">
            </div>
            <div class="log__label">
              <input class="log__input" type="password" placeholder="Password" name="password">
            </div>
            <input class="log__btn" type="submit" name="log_in" value="Authorization">
          </form>
          <button class="popup-log__exit"></button>
        </div>
      </div>
    </section>
  </main>
  <?php 
  include 'footer.php';
?>