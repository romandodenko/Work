import webp from 'gulp-webp'; // для webp формата
import imagemin from 'gulp-image';

export const images = () => {
  return app.gulp.src(app.path.src.images, {sourcemaps: true })
  .pipe(app.plugins.plumber(
    app.plugins.notify.onError({
      title: 'IMAGES',
      message: 'Error: <%= error.message %>',
    }))
  )
  .pipe(app.plugins.newer(app.path.dev.images))
  .pipe(webp()) // для webp формата
  .pipe(app.gulp.dest(app.path.dev.images))
  .pipe(app.gulp.src(app.path.src.images))
  .pipe(app.plugins.newer(app.path.dev.images))
  .pipe(app.gulp.dest(app.path.dev.images))
  .pipe(app.gulp.src(app.path.src.svg))
  .pipe(app.gulp.dest(app.path.dev.images))
  .pipe(app.plugins.browsersync.stream());
}

export const imagesBuild = () => {
   app.gulp.src(app.path.dev.imagesWebpSvg)
  .pipe(app.gulp.dest(app.path.build.images))
  return app.gulp.src(app.path.dev.imagesBuild)
  .pipe(imagemin())
  .pipe(app.gulp.dest(app.path.build.images))
}

export const svgSprites = () => {
  return app.gulp.src(app.path.dev.svgSprite)
 .pipe(app.gulp.dest(app.path.build.svgSprite))
}