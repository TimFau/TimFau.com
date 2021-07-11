var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

gulp.task('styles', function(done) {
    gulp.src('css/src/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('styles.min.css'))
        .pipe(gulp.dest('./css/dest/'));
        done();
});
gulp.task('scripts', function(done) {
    gulp.src('js/src/*.js')
    .pipe(uglify())
    .pipe(concat('scripts.min.js'))
    .pipe(gulp.dest('js/dest/'));
    done();
});
//Watch task
gulp.task('default',function() {
    browserSync.init({
        // server: {
        //     baseDir: "./"
        // }
        proxy: "http://localhost/TIMFAU.COM"
    });
    gulp.watch('css/src/**/*.scss', gulp.series('styles'));
    gulp.watch('js/src/*.js', gulp.series('scripts'));
    gulp.watch('css/dest/*.css').on("change", reload);
    gulp.watch('js/dest/*.js').on("change", reload);
    gulp.watch('*.php').on("change", reload);
});