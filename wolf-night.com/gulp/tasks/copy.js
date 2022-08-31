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

export const video = () => {
  return app.gulp.src(app.path.src.video)
  .pipe(app.gulp.dest(app.path.dev.video))
}

export const videoBuild = () => {
  return app.gulp.src(app.path.dev.videoBuild)
  .pipe(app.gulp.dest(app.path.build.videoBuild))
}

export const jsonFile = () => {
  return app.gulp.src(app.path.src.jsonFile)
  .pipe(app.gulp.dest(app.path.dev.jsonFile))
}

export const jsonFileBuild = () => {
  return app.gulp.src(app.path.dev.jsonFileBuild)
  .pipe(app.gulp.dest(app.path.build.jsonFileBuild))
}

export const phpMailer = () => {
  return app.gulp.src(app.path.src.phpMailer)
  .pipe(app.gulp.dest(app.path.dev.phpMailer))
}

export const phpMailerBuild = () => {
  return app.gulp.src(app.path.dev.phpMailerBuild)
  .pipe(app.gulp.dest(app.path.build.phpMailer))
}