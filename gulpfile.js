'use strict';
var gulp = require('gulp');
var stylus = require('gulp-stylus');
var concat = require('gulp-concat');
var watch = require('gulp-watch');

gulp.task('compress', function () {
	gulp.src('./assets/stylus/main.styl')
		.pipe(stylus({
			compress: true
		}))
		.pipe(gulp.dest('./assets/css/'));
});

gulp.task('concat', function() {
	return gulp.src([
				'./assets/css/theme-base.css',
				'./assets/css/bootstrap.css',
				'./assets/css/slick.css',
				'./assets/css/main.css'
				])
		.pipe(concat('peacock-style.css'))
		.pipe(gulp.dest('./assets/css/'));
});

gulp.task('scripts', function() {
	return gulp.src(
		[
			'./assets/js/jquery.js',
			'./assets/js/bootstrap.min.js',
			'./assets/js/skip-link-focus-fix.js',
			'./assets/js/slick.js',
			'./assets/js/z-custom.js'
			]
		)
		.pipe(concat('all.js'))
		.pipe(gulp.dest('./assets/js/'));
});

gulp.task('watch', function() {
	gulp.watch(['./assets/stylus/main.styl', './assets/js/z-custom.js'], ['compress','scripts','concat']);
});

// Default gulp task to run
gulp.task('default', ['compress', 'scripts', 'concat', 'watch']);
