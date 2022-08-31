import webpHtmlNoSvg from 'gulp-webp-html-nosvg'; // для webp формата
import htmlMin from 'gulp-htmlmin';

export const html = () => {
  return app.gulp.src(app.path.src.html)
    .pipe(app.plugins.plumber(
      app.plugins.notify.onError({
        title: 'HTML',
        message: 'Error: <%= error.message %>',
      }))
    )
    .pipe(webpHtmlNoSvg()) // для webp формата
    .pipe(app.gulp.dest(app.path.dev.dist))
    .pipe(app.plugins.browsersync.stream());
}

export const htmlBuild = () => {
  return app.gulp.src(app.path.dev.html)
    .pipe(app.plugins.plumber(
      app.plugins.notify.onError({
        title: 'HTML',
        message: 'Error: <%= error.message %>',
      }))
    )
    .pipe(htmlMin({
      collapseWhitespace: true,
    }))
    .pipe(app.gulp.dest(app.path.build.build))
}