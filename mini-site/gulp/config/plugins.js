import plumber from 'gulp-plumber'; // Обработка ошибок
import notify from 'gulp-notify'; // Сообщение (подсказки)) 
import browsersync from 'browser-sync'; // Локальный сервер
import newer from 'gulp-newer'; // Проверка обновлений

// Эмпортируем плагины
export const plugins = {
  plumber: plumber,
  notify: notify,
  browsersync: browsersync,
  newer: newer,
}