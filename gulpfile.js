const gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    minify = require('gulp-minify'),
    imagemin = require('gulp-imagemin');

const paths = {
    dev: {
        'scss': 'assets/resources/scss/**/*.scss',
        'js': 'assets/resources/js/**/*.js',
        'jsLibs': 'assets/resources/js/libs/*.js',
        'img': 'assets/resources/img/**'
    },
    dist: {
        'css': 'assets/dist/css/',
        'js': 'assets/dist/js',
        'img': 'assets/dist/img/'
    }
}

function compScss() {
    return gulp.src(paths.dev.scss)
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest(paths.dist.css));
}

function compJs() {
    return gulp.src([paths.dev.jsLibs, paths.dev.js])
        .pipe(concat('main.js'))
        .pipe(minify())
        .pipe(gulp.dest(paths.dist.js));
}

function compImg() {
    return gulp.src(paths.dev.img)
        //.pipe(imagemin())
        .pipe(gulp.dest(paths.dist.img));
}

function watchFiles() {
    gulp.watch(paths.dev.scss, gulp.series('compScss'));
    gulp.watch([paths.dev.js, paths.dev.jsLibs], gulp.series('compJs'));
    gulp.watch(paths.dev.img, gulp.series('compImg'));
}

gulp.task('compScss', compScss);
gulp.task('compJs', compJs);
gulp.task('compImg', compImg);
gulp.task('watch', watchFiles);
gulp.task('default', gulp.series('watch'));