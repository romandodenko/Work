
export const resources = () => {
  return app.gulp.src(app.path.src.resources)
 .pipe(app.gulp.dest(app.path.dev.resources))
 .pipe(app.plugins.browsersync.stream());
}

export const resourcesBuild = () => {
  return app.gulp.src(app.path.dev.resourcesBuild)
 .pipe(app.gulp.dest(app.path.build.resources))
}