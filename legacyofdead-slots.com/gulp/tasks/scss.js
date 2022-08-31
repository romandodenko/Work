import dartSass from 'sass';
import gulpSass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import webpcss from 'gulp-webpcss'; // для webp формата
import autoprefixer from 'gulp-autoprefixer';
import sourcemaps from 'gulp-sourcemaps';

const sass = gulpSass(dartSass);

export const scss = () => {
   app.gulp.src(app.path.src.scssOveral)
  .pipe(app.plugins.plumber(
    app.plugins.notify.onError({
      title: 'SCSS',
      message: 'Error: <%= error.message %>',
    }))
  )
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(webpcss( // для webp формата
    {
      webpClass: '.webp',
      noWebpClass: '.no-webp',
    }
  ))
  .pipe(autoprefixer({
    grid: true,
    overrideBrowserslist: ["last 3 versions"],
    cascade: false
  }))
  .pipe(sourcemaps.write())
  .pipe(app.gulp.dest(app.path.dev.cssOveral))
  return app.gulp.src(app.path.src.scss)
  .pipe(app.plugins.plumber(
    app.plugins.notify.onError({
      title: 'SCSS',
      message: 'Error: <%= error.message %>',
    }))
  )
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(webpcss( // для webp формата
    {
      webpClass: '.webp',
      noWebpClass: '.no-webp',
    }
  ))
  .pipe(autoprefixer({
    grid: true,
    overrideBrowserslist: ["last 3 versions"],
    cascade: false
  }))
  .pipe(sourcemaps.write())
  .pipe(app.gulp.dest(app.path.dev.css))
  .pipe(app.plugins.browsersync.stream());
}


export const cssBuild = () => {
  //  app.gulp.src(app.path.dev.cssOveralBuild) // хз что за код, не помню ))
  // .pipe(sass().on('error', sass.logError))
  // .pipe(webpcss(
  //   {
  //     webpClass: '.webp',
  //     noWebpClass: '.no-webp',
  //   }
  // ))
  // .pipe(autoprefixer({
  //   grid: true,
  //   overrideBrowserslist: ["last 3 versions"],
  //   cascade: false
  // }))
  // .pipe(cleanCss())
  // .pipe(app.gulp.dest(app.path.build.cssOveral))  // хз что за код, не помню ))
  return app.gulp.src(app.path.dev.cssBuild)
  .pipe(sass().on('error', sass.logError))
  .pipe(webpcss( // для webp формата
    {
      webpClass: '.webp',
      noWebpClass: '.no-webp',
    }
  ))
  .pipe(autoprefixer({
    grid: true,
    overrideBrowserslist: ["last 3 versions"],
    cascade: false
  }))
  .pipe(cleanCss())
  .pipe(app.gulp.dest(app.path.build.css))
}