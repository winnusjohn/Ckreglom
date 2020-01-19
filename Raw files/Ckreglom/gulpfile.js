// initialize modules
const { src, dest, watch, series, parallel } = require("gulp");
var gulp = require("gulp");
const browserSync = require("browser-sync").create();
const sass = require("gulp-sass");

//Sass Task
function sassTask() {
  return (
    gulp
      // .src("/scss/**/*.scss")
      .src(["node_modules/bootstrap/scss/bootstrap.scss", "src/scss/*.scss"])
      .pipe(sass())
      .pipe(gulp.dest("src/css"))
      .pipe(browserSync.stream())
  );
}

//Js Task
function js() {
  return gulp
    .src([
      "node_modules/bootstrap/dist/js/bootstrap.min.js",
      "node_modules/jquery/dist/jquery.min.js",
      "node_modules/popper.js/dist/umd/popper.min.js",
      "node_modules/scrollreveal/dist/scrollreveal.min.js"
    ])
    .pipe(gulp.dest("src/js"))
    .pipe(browserSync.stream());
}

//Cachebusting task

//Watch Task

function serve() {
  browserSync.init({
    server: {
      baseDir: "./src"
    }
  });
  // gulp.watch(
  //   "node_modules/bootstrap/scss/bootstrap.scss",
  //   "src/scss/*.scss",
  //   sassTask,
  //   "sass",
  //   parallel(sassTask, js)
  // );
  gulp.watch("src/scss/*.scss", sassTask, parallel(sassTask, js));
  gulp.watch("src/*.html").on("change", browserSync.reload);
  gulp.watch("src/js/*.js").on("change", browserSync.reload);
}

// function watchTask() {
//   watch(
//     "node_modules/bootstrap/scss/bootstrap.scss",
//     "src/scss/*.scss",
//     sassTask,
//     "sass",
//     parallel(sassTask, js)
//   );
// }

// Move Fonts Folder to src
function fonts() {
  return gulp
    .src("node_modules/@fortawesome/fontawesome-free/webfonts/*")
    .pipe(gulp.dest("src/fonts"));
}

// Move Fonts Awesome CSS to src
function fa() {
  return gulp
    .src("node_modules/@fortawesome/fontawesome-free/css/fontawesome.css")
    .pipe(gulp.dest("src/css"));
}

//Default Task

exports.default = series(parallel(sassTask, js), fonts, fa, serve);
// exports.default = series(parallel(fonts));
exports.sassTask = sassTask;
