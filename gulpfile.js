var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var useref = require('gulp-useref');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var cssnano = require('gulp-cssnano');

gulp.task('sass',function(){
	return gulp.src('resources/assets/sass/app.scss')
	.pipe(sass())
	.pipe(gulp.dest('public/css'))
	 // .pipe(browserSync.reload({
  //     stream: true
  //   }))
});

gulp.task('watch',['browserSync','sass'],function(){
	gulp.watch('resources/assets/sass/app.scss',['sass']);
	// gulp.watch('public/**/*.js',browserSync.reload)
});

// gulp.task('browserSync', function() {
//   browserSync.init({
//     proxy:'http://localhost:8000',
//     server: {
//       baseDir: 'public/css/app.css'
//     },
//   })
// });



//gulp.task('useref', function(){
  //return gulp.src('app/*.html')
    //.pipe(useref())
    // Minifies only if it's a JavaScript file
    //.pipe(gulpIf('*.js', uglify()))
    //minifies only css
    //.pipe(gulpIf('*.css', cssnano()))
  //  .pipe(gulp.dest('dist'))
//});