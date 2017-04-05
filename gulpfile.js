var gulp = require('gulp');
var sass = require('gulp-sass');
//concatenate files even located at different locations
var useref = require('gulp-useref');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var cssnano = require('gulp-cssnano');

gulp.task('sass',function(){
	return gulp.src('resources/assets/sass/app.scss')
	.pipe(sass())
	.pipe(gulp.dest('public/css'))

});

gulp.task('watch',['sass'],function(){
	gulp.watch('resources/assets/sass/app.scss',['sass']);
});


gulp.task('useref', function(){
  return gulp.src('resources/views/test.blade.php')
    .pipe(useref())
    //Minifies only if it's a JavaScript file
    .pipe(gulpIf('*.js', uglify()))
    //minifies only css
    .pipe(gulpIf('*.css', cssnano()))
   .pipe(gulp.dest('public'))
});