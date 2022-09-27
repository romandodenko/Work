export const server = (done) => {
  app.plugins.browsersync.init({
    server: {
      baseDir: `${app.path.dev.dist}`,
    },
    notify: false,
    port: 3000,
  });
}