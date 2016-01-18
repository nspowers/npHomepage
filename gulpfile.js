'use strict';

var gulp = require('gulp'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
		sass = require('gulp-sass'),
		maps = require('gulp-sourcemaps');

gulp.task("hello", function() {
	console.log("Hello");
});

gulp.task("concatScripts", function() {
	gulp.src([
					'js/jquery.js',
					'js/sticky/jquery.sticky.js',
					'js/main.js'])
	// concat tasks takes string parameter
	.pipe(maps.init())
	.pipe(concat("app.js"))
	.pipe(maps.write('./'))
	.pipe(gulp.dest("js"));
});

gulp.task("minifyScripts", function() {
	gulp.src("js/app.js")
	.pipe(uglify())
	
	// rename output file so not overwrite app.js
	.pipe(rename('app.min.js'))
	.pipe(gulp.dest('js'));
});

gulp.task('compileSass', function() {
	gulp.src("scss/application.scss")
	.pipe(maps.init())
	.pipe(sass())
	// write method sets path relaitve to output diretory (same folder)
	.pipe(maps.write('./'))
	.pipe(gulp.dest('css'));
});

gulp.task('autoprefixer', function () {
    var postcss      = require('gulp-postcss');
    var sourcemaps   = require('gulp-sourcemaps');
    var autoprefixer = require('autoprefixer');

    return gulp.src('.css')
        .pipe(sourcemaps.init())
        .pipe(postcss([ autoprefixer({ browsers: ['last 2 versions'] }) ]))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('css'));
});

gulp.task("build", [
	'concatScripts',
	'minifyScripts',
	'compileSass',
	'autoprefixer'
]);

// Default Task
gulp.task("default", ["hello"], function() {
	console.log("This is the default task!");
});