// Variables
const { src, dest, watch, series, parallel, gulp } = require('gulp');
const sourcemaps    = require('gulp-sourcemaps');
const sass          = require('gulp-sass');
const concat        = require('gulp-concat');
const uglify        = require('gulp-uglify');
const postcss       = require('gulp-postcss');
const autoprefixer  = require('autoprefixer');
const cssnano       = require('cssnano');
var   replace       = require('gulp-replace');
var   order         = require("gulp-order");
var   cbString      = new Date().getTime();


// File paths
const files = { 
    stylePath: 'wp-content/themes/aei/scss/style/**/*.scss',
    appScssPath: 'wp-content/themes/aei/scss/app.scss',
    jsPath:   'wp-content/themes/aei/js/**/*.js',
    libPath:  [ 'node_modules/jquery/dist/jquery.min.js',
                 'node_modules/bootstrap/dist/js/bootstrap.min.js',
                 'node_modules/aos/dist/aos.js'
                ]
}

// Sass Task
function appScssTask(){    
    return src(files.appScssPath)
        .pipe(sourcemaps.init()) // initialize sourcemaps first
        .pipe(sass().on('error', sass.logError)) // compile SCSS to CSS
        .pipe(postcss([ autoprefixer(), cssnano() ])) // PostCSS plugins
        .pipe(sourcemaps.write('.')) // write sourcemaps file in current directory
        .pipe(dest('wp-content/themes/aei/dist')
    ); // put final CSS in dist folder
}

// Style Sass Task
function styleScssTask(){    
    return src(files.stylePath)
        .pipe(sourcemaps.init()) // initialize sourcemaps first
        .pipe(sass().on('error', sass.logError)) // compile SCSS to CSS
        .pipe(postcss([ autoprefixer(), cssnano() ])) // PostCSS plugins
        .pipe(sourcemaps.write('.')) // write sourcemaps file in current directory
        .pipe(dest('wp-content/themes/aei/dist')
    ); // put final CSS in dist folder
}

// App JS Task
function appJSTask(){
    return src(files.libPath )  // //,'!' + 'includes/js/jquery.min.js', // to exclude any specific files 
      .pipe(concat('app.min.js'))
      .pipe(uglify())
      .pipe(dest('wp-content/themes/aei/dist')
    );
}

// Main JS Task
function mainJSTask(){
    //return src(files.jsPath)  // //,'!' + 'includes/js/jquery.min.js', // to exclude any specific files 
    return src(files.jsPath)
      .pipe(order(['navbar.min.js', 'custom.js']))
      .pipe(concat('app.custom.js'))
      .pipe(uglify())
      .pipe(dest('wp-content/themes/aei/dist')
    );
}

// Cachebust
function cacheBustTask(){
    return src(['wp-content/themes/aei/header.php', 'wp-content/themes/aei/footer.php'])
      .pipe(replace(/cb=\d+/g, 'cb=' + cbString))
      .pipe(dest('wp-content/themes/aei/'));
}

// Watch JS
function watchJS(){
    watch(files.jsPath, series(mainJSTask));  
}

// Watch CSS
function watchCSS(){
    watch(files.stylePath, series(styleScssTask));  
}

// exports.scssTask = appScssTask;
// exports.appJSTask = appJSTask;
// exports.mainJSTask = mainJSTask;
// exports.watchJS = watchJS;
// exports.watchCSS = watchCSS;



exports.default = series ( 
  parallel(appScssTask, styleScssTask, appJSTask, mainJSTask), 
  parallel(watchJS, watchCSS),
  cacheBustTask
);



