// import webpack from 'webpack-stream';
import fileinclude from "gulp-file-include";
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
 .pipe(fileinclude({
  prefix: "--",
 }))
//  .pipe(webpack({
//    mode: 'development',
//    output: {
//      filename: 'main.min.js',
//    }
//  }))
 .pipe(app.gulp.dest(app.path.dev.js))
 .pipe(app.plugins.browsersync.stream());
}

export const jsBuild = () => {
 return app.gulp.src(app.path.dev.jsBuild, {})
 .pipe(app.gulp.dest(app.path.build.js))
}