
        <?php 
require "./db.php"; // подключаем файл для соединения с БД

// Производим выход пользователя
unset($_SESSION['logged_user']);

// Редирект на главную страницу
header('Location: ./index.php');

?>
        
