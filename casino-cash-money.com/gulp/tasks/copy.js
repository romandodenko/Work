export const copy = () => {
  return app.gulp.src(app.path.src.src)
  .pipe(app.gulp.dest(app.path.dev.dist))
}

export const mailPhp = () => {
  return app.gulp.src(app.path.src.mailPhp)
  .pipe(app.gulp.dest(app.path.dev.mailPhp))
}

export const mailPhpBuild = () => {
  return app.gulp.src(app.path.dev.mailPhpBuild)
  .pipe(app.gulp.dest(app.path.build.mailPhpBuild))
}

export const phpMailer = () => {
  return app.gulp.src(app.path.src.phpMailer)
  .pipe(app.gulp.dest(app.path.dev.phpMailer))
}

export const phpMailerBuild = () => {
  return app.gulp.src(app.path.dev.phpMailerBuild)
  .pipe(app.gulp.dest(app.path.build.phpMailer))
}