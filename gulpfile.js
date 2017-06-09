var gulp = require('gulp'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-ruby-sass'),
	livereload = require('gulp-livereload'),
	imagemin = require('gulp-imagemin'),
	prefix = require('gulp-autoprefixer'),
	gutil = require('gulp-util'),
	concat = require('gulp-concat');

//Image Task
//Compress
gulp.task('image', function(){
	gulp.src('resources/assets/images/*')
		.pipe(imagemin())
		.pipe(gulp.dest('public/images'));
});

//Scripts Task
//Uglifies
// gulp.task('scripts', function(){
// 	gulp.src('resources/assets/js/*.js')
// 	.pipe(uglify())
// 	.pipe(gulp.dest('public/js'));
// });
gulp.task('scripts', function() {
	return gulp.src(['resources/assets/js/app.js'])
    .pipe(concat('app.js'))
    .pipe(uglify())
    .on('error', function (err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); })
    .pipe(gulp.dest('public/js'))
    .pipe(livereload());
})

//Styles Task
//Compile SCSS
gulp.task('styles', function(){
		sass('resources/assets/sass/**/*.scss', {
			style: 'compressed'
		})
		.on('error', sass.logError)
		.pipe(prefix({
			browsers: ['last 4 versions'],
			cascade: false
		}))
		.pipe(gulp.dest('public/css'))
		.pipe(livereload());
});

//Watch Task
//Watches JS
gulp.task('watch', function() {

	var server = livereload();

	gulp.watch('resources/assets/sass/**/*.scss', ['styles']);
});

gulp.task('default', ['scripts', 'styles', 'image', 'watch']);
