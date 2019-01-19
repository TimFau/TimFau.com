var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function(done) {
    gulp.src('css/src/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/dest/'));
        done();
});

//Watch task
gulp.task('default',function() {
    gulp.watch('css/src/*.scss', gulp.series('styles'));
});