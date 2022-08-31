import * as nodePath from 'path';
const rootFolder = nodePath.basename(nodePath.resolve());

const buildFolder = `./build`;
const devFolder = `./dist`;
const srcFolder = `./src`;

export const path = {
  build: {
    build: `${buildFolder}/`,
    css: `${buildFolder}/css`,
    images: `${buildFolder}/img/`,
    fonts: `${buildFolder}/fonts/`,
    resources: `${buildFolder}/resources/`,
    svgSprite: `${buildFolder}/img/svg/`,
    js: `${buildFolder}/js/`,
    modules: `${buildFolder}/js/modules/`,
    phpMailer: `${buildFolder}/PHPMailer/`,
    mailPhpBuild: `${buildFolder}/`,
    videoBuild: `${buildFolder}/video/`,
    jsonFileBuild: `${buildFolder}/json/`,
  },
  dev: {
    js: `${devFolder}/js/`,
    jsBuild: `${devFolder}/js/**`,
    modules: `${devFolder}/js/modules/`,
    modulesBuild: `${srcFolder}/js/modules/**`,
    css: `${devFolder}/css`,
    cssOveral: `${devFolder}/css/overall/`,
    cssBuild: `${devFolder}/css/*-min.css`,
    fonts: `${devFolder}/fonts/`,
    fontsBuild: `${devFolder}/fonts/**/*.{woff,woff2}`,
    images: `${devFolder}/img/`,
    imagesBuild: `${devFolder}/img/**/*.{jpg,jpeg,png,gif}`,
    imagesWebpSvg: `${devFolder}/img/**/*.{webp,svg}`,
    dist: `${devFolder}/`,
    video: `${devFolder}/video/`,
    videoBuild: `${devFolder}/video/**`,
    html: `${devFolder}/**/*.html`,
    resources: `${devFolder}/resources/`,
    resourcesBuild: `${devFolder}/resources/**`,
    svgSprite: `${devFolder}/img/svg/sprites.svg`,
    phpMailer: `${devFolder}/PHPMailer/`,
    phpMailerBuild: `${devFolder}/PHPMailer/**`,
    mailPhp: `${devFolder}/`,
    mailPhpBuild: `${devFolder}/mail.php`,
    jsonFile: `${devFolder}/json/`,
    jsonFileBuild: `${devFolder}/json/**`,
  },
  src: {
    js: `${srcFolder}/js/main.js`,
    modules: `${srcFolder}/js/modules/**`,
    scss: `${srcFolder}/css/**/*.scss`,
    images: `${srcFolder}/img/**/*.{jpg,jpeg,png,gif,webp}`,
    fonts: `${srcFolder}/fonts/**.ttf`,
    svg: `${srcFolder}/img/**/*.svg`,
    html: `${srcFolder}/**/*.html`,
    src: `${srcFolder}/`,
    phpMailer: `${srcFolder}/PHPMailer/**`,
    resources: `${srcFolder}/resources/**`,
    video: `${srcFolder}/video/**`,
    jsonFile: `${srcFolder}/json/**`,
    mailPhp: `${srcFolder}/mail.php`,
  },
  watch: {
    js: `${srcFolder}/js/**/*.js`,
    scss: `${srcFolder}/css/**/*.scss`,
    images: `${srcFolder}/img/**/*.{jpg,jpeg,png,gif,webp,ico,svg}`,
    html: `${srcFolder}/**/*.html`,
    src: `${srcFolder}/`,
    video: `${srcFolder}/video/**`,
    jsonFile: `${srcFolder}/json/**`,
    resources: `${srcFolder}/`,
  },
  clean: devFolder,
  cleanBuild: buildFolder,
  buildFolder: buildFolder,
  devFolder: devFolder,
  srcFolder: srcFolder,
}