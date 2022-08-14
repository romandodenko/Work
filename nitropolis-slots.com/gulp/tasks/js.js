import webpack from 'webpack-stream';

export const js = () => {
  app.gulp.src(app.path.src.modules, {})
 .pipe(app.gulp.dest(app.path.dev.modules))
 return app.gulp.src(app.path.src.js, {sourcemaps: true })
 .pipe(app.plugins.plumber(
   app.plugins.notify.onError({
     title: 'JS',
     message: 'Error: <%= error.message %>',
   }))
 )
 .pipe(webpack({
   mode: 'development',
   output: {
     filename: 'main.min.js',
   }
 }))
 .pipe(app.gulp.dest(app.path.dev.js))
 .pipe(app.plugins.browsersync.stream());
}

export const jsBuild = () => {
  app.gulp.src(app.path.dev.modulesBuild, {})
 .pipe(app.gulp.dest(app.path.build.modules))
 return app.gulp.src(app.path.dev.jsBuild, {})
 .pipe(app.gulp.dest(app.path.build.js))
}