<?php 
  include 'header.php';
?>
<section class="user">
  <div class="user__container container">
  <?php if(isset($_SESSION['logged_user'])) : ?>
    <div class="user__body">
        <h1 class="user__name">
          asdsadsdads
        </h1>
        <div class="user__mail">
          email dadssadsad
        </div>
        <div class="user__endgame">
          Games completed: 26
        </div>
        <div class="user__game">
            Featured Games: Vikings, Rome, Dark castle
        </div>
        <div class="user__data">
            Entry time: 13:23:23
        </div>
        <button class="user__btn">Exit</button>
    </div>
    <?php else : ?>
    <form class="buttons__form" action="#" method="POST">
      <div class="buttons__label">
       <input class="buttons__input" type="text" placeholder="Your login" name="login">
      </div>
      <div class="buttons__label">
        <input class="buttons__input" type="password" placeholder="Password" name="password">
      </div>
        <input class="buttons__btn" type="submit" name="log_in" value="Entrance">
    </form>
  <?php
  $data = $_POST;
  if(isset($data['log_in'])) {
    $errors = array();

    $user = R::findOne('users', 'login = ?', array($data['login']));

    if($user) {
      if(password_verify($data['password'], $user->password)) {
        $_SESSION['logged_user'] = $user;
          header('Location: index.php');
      }
    } else {
      $errors[] = 'The password was entered incorrectly';
    }
  } else {
    $errors[] = 'No users found with this name!';
  }
  if(!empty($errors)) {
    echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
  }
  ?>
  <?php endif; ?>
  </div>

</section>
<?php 
  include 'footer.php';
?>