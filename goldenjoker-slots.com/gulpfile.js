// Основной модуль
import gulp from 'gulp';

// Импорт путей
import { path } from './gulp/config/path.js';

// Импорт плагинов
import { plugins } from './gulp/config/plugins.js';

// Передаем значения в глобальную переменную
global.app = {
  path: path,
  gulp: gulp,
  plugins: plugins,
}

// Ипорт задач
import { copy, phpMailer, phpMailerBuild, mailPhp, mailPhpBuild, video, videoBuild, jsonFile, jsonFileBuild } from './gulp/tasks/copy.js';
import { reset, resetBuild } from './gulp/tasks/reset.js';
import { html, htmlBuild } from './gulp/tasks/html.js'
import { server } from './gulp/tasks/server.js';
import { scss, cssBuild } from './gulp/tasks/scss.js';
import { js, jsBuild } from './gulp/tasks/js.js';
import { images, imagesBuild, svgSprites } from './gulp/tasks/images.js';
import { fonts, fontsBuild } from './gulp/tasks/fonts.js';
import { resources, resourcesBuild } from './gulp/tasks/resources.js';

// Наблюдатель за изменениями в файлах
function watcher() {
  // gulp.watch(path.watch.src, copy);
  gulp.watch(path.watch.html, html);
  gulp.watch(path.watch.scss, scss);
  gulp.watch(path.watch.js, js);
  gulp.watch(path.watch.images, images);
  // gulp.watch(path.watch.video, video);
  // gulp.watch(path.watch.resources, resources);
  // gulp.watch(path.watch.jsonFile, jsonFile);
}

// Построение сценариев задач по умолчанию
const mainTasks = gulp.series(fonts, gulp.parallel(copy, html, scss, js, resources, images, mailPhp, phpMailer, video, jsonFile));

const dev = gulp.series(reset, mainTasks, gulp.parallel(watcher, server));

// Выполнения сценария по умолчанию
gulp.task('default', dev);

// Построение сценариев задач build версия
const build = gulp.series(resetBuild, fontsBuild, htmlBuild, cssBuild, jsBuild, resourcesBuild, imagesBuild, svgSprites, mailPhpBuild, phpMailerBuild, videoBuild, jsonFileBuild);

// Выполнения сценария build версия
gulp.task('build', build);
