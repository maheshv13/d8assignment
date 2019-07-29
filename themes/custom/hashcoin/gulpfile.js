var gulp = require('gulp');
//var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function() {
    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'scss/*.scss', 'scss/**/*.scss' ])
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
          cascade: false
    }))
    .pipe(gulp.dest('css'));
});

gulp.task('js', function() {
    return gulp.src(['node_module/bootstrap/dist/js/bootstrap.min.js'])
    .pipe(sass())
    .pipe(gulp.dest('js'));
});

gulp.task('prefix', function() {
    gulp.src(['css/style.css'])
      .pipe(autoprefixer({
          browsers: ['last 2 versions'],
          cascade: false
      }))
      .pipe(gulp.dest('css'))
});

gulp.task('serve', ['sass'], function(){
    gulp.watch(['node_module/bootstrap/scss/bootstrap.scss', 'scss/*.scss', 'scss/**/*.scss'], ['sass']);
});

gulp.task('watch', ['js', 'prefix', 'serve']);