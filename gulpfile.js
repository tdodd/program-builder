// Load Gulp dependencies.
var gulp = require('gulp');
var sass = require('gulp-sass');
var jshint = require('gulp-jshint');
var uglify	= require('gulp-uglify');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var runSequence = require('run-sequence');
var browserSync = require('browser-sync').create();

// Location contants.
var stylesInput = '/assets/styles';
var stylesOutput = '/assets/css';
var jsInput = '/app';
var jsOutput = '';

// 'default' gulp task.
gulp.task('default', function() { });

/**
 * styles: Compiles sass to css.
 */
gulp.task('styles', function() {
	runSequence('styles-sass');
});

gulp.task('styles-sass', function() {
    var input = stylesInput + '/*.sass';
    return gulp.src(input)
	.pipe(sass())
	.pipe(browserSync.stream())
	.pipe(gulp.dest(stylesOutput));
});

/**
 * services: Lint and minify javascript code.
 */
gulp.task('services', function() {
	runSequence('services-jshint','services-uglify');
});

gulp.task('services-jshint', function() { 
	return gulp.src(jsInput + '/*.js')
	.pipe(jshint())
	.pipe(jshint.reporter('jshint-stylish'));
});

gulp.task('services-uglify',function() {
	return gulp.src(jsInput + '/*.js')
	.pipe(sourcemaps.init())
	.pipe(concat('app.js'))
	.pipe(gulp.dest('dist'))
	.pipe(rename('app.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist'))
	.pipe(sourcemaps.write('./'))
	.pipe(gulp.dest('dist'));
});

/**
 * watch: Watch files for changes.
 */
gulp.task('watch', function() {

	// Browser sync server.
	browserSync.init({
        server: { baseDir: "./" }
    });

	// Watch templates
	gulp.watch('*.html').on('change', browserSync.reload);

	// watch styles
	gulp.watch(stylesInput + '/*.sass',['styles']);

    // watch javascript
	gulp.watch(jsInput + '/*.js',['services']);

});

// tasks registration
gulp.task('default',[
	'styles','services'
], function() { });
