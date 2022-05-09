<?php
// Подключаем библиотеку RedBeanPHP
require "libs/rb-mysql.php";

// Подключаемся к БД
R::setup( 'mysql:host=localhost;dbname=Admin_gold_bd',
        'Admin_goldgame', 'goldgame12');

// Проверка подключения к БД
if(!R::testConnection()) die('No DB connection!');

session_start(); // Создаем сессию для авторизации
?>