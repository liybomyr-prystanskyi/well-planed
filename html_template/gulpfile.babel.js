// Imports
import gulp from 'gulp';
import htmlbeautify from 'gulp-html-beautify';
import rename from 'gulp-rename';
import mustache from 'gulp-mustache';
import wait from 'gulp-wait';
import globSass from 'gulp-sass-glob';
import sourcemap from 'gulp-sourcemaps';
import sass from 'gulp-sass';
import grMediaQueries from 'gulp-group-css-media-queries';
import autoprefixer from 'gulp-autoprefixer';
import cleanCSS from 'gulp-clean-css';
import rigger from 'gulp-rigger';
import uglify from 'gulp-uglify';
import del from 'del';
import browserSync from 'browser-sync';
import gutil from 'gulp-util';
import cheerio from 'gulp-cheerio';
import inject from 'gulp-inject-string';
import replace from 'gulp-string-replace';
import sysConfig from './system-config.json';

// Variables
let bs = browserSync.create();

// Tasks
// Cleaners from build folder
export const cleanPartials = () => del(sysConfig.paths.clear.partials);
export const cleanStyles = () => del(sysConfig.paths.clear.styles);
export const cleanScripts = () => del(sysConfig.paths.clear.scripts);
export const cleanImages = () => del(sysConfig.paths.clear.images);
export const cleanFonts = () => del(sysConfig.paths.clear.fonts);
export const cleanBuild = () => del(sysConfig.paths.clear.build);

// Copy countries json
export function copyCountries() {
  return gulp.src('src/assets/countries.json')
         .pipe(gulp.dest('build/'));
}

// Compile molecules mustache files
export function moleculesToHtml() {
  let m = mustache(sysConfig.paths.src.templates.molecules+'data.json');
  m.on('error',function(e) {
    gutil.log(e);
    m.end();
  });
  return gulp.src(sysConfig.paths.src.templates.molecules + '**/*.mustache')
        .pipe(m)
        .pipe(htmlbeautify())
        .pipe(rename({
          extname: ".html"
        }))
        .pipe(gulp.dest(sysConfig.paths.build.templates.molecules))
        .pipe(browserSync.stream());
}
// Compile organisms mustache files
export function organismsToHtml() {
  let m = mustache(sysConfig.paths.src.templates.organisms+'data.json')
  m.on('error',function(e) {
    gutil.log(e);
    m.end();
  });
  return gulp.src(sysConfig.paths.src.templates.organisms + '**/*.mustache')
        .pipe(m)
        .pipe(htmlbeautify())
        .pipe(rename({
          extname: ".html"
        }))
        .pipe(gulp.dest(sysConfig.paths.build.templates.organisms))
        .pipe(browserSync.stream());
}
// Compile pages mustache files
export function pagesToHtml() {
  let m = mustache(sysConfig.paths.src.templates.pages+'data.json');
  m.on('error',function(e) {
    gutil.log(e);
    m.end();
  });
  return gulp.src(sysConfig.paths.src.templates.pages + '**/*.mustache')
        .pipe(m)
        .pipe(htmlbeautify())
        .pipe(rename({
          extname: ".html"
        }))
        .pipe(gulp.dest(sysConfig.paths.build.templates.pages))
        .pipe(browserSync.stream());
}

// Compile all mustache templates
const compileMustache = gulp.series(cleanPartials, moleculesToHtml, organismsToHtml, pagesToHtml);
gulp.task('compile-mustache', compileMustache);

// Move vendor style to source
export function vendorStyles() {
  return gulp.src(sysConfig.paths.src.vendorStyles+'**/*.css')
        .pipe(gulp.dest(sysConfig.paths.build.css.vendors))
        .pipe(browserSync.stream());
}
// Compile styles
export function styles() {
  return gulp.src(sysConfig.paths.src.scss+'style.scss')
        .pipe(wait(500))
        .pipe(globSass())
        .pipe(sourcemap.init())
          .pipe(sass().on('error', sass.logError))
          .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
          }))
          .pipe(cleanCSS())
        .pipe(sourcemap.write())
        .pipe(rename({
          suffix: '.min'
        }))
        .pipe(gulp.dest(sysConfig.paths.build.css.mainstyle))
        .pipe(browserSync.stream());
}

// Compile styles and group mediaqueries
export function stylesFinal() {
  return gulp.src(sysConfig.paths.src.scss+'style.scss')
        .pipe(wait(500))
        .pipe(globSass())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
          browsers: ['last 2 versions'],
          cascade: false
        }))
        .pipe(grMediaQueries())
        .pipe(cleanCSS())
        .pipe(rename({
          suffix: '.min'
        }))
        .pipe(gulp.dest(sysConfig.paths.build.css.mainstyle))
        .pipe(browserSync.stream());
}

// Compile all styles
const compileStyles = gulp.series(cleanStyles, vendorStyles, stylesFinal);
gulp.task('compile-styles', compileStyles);

// Move vendor scripts
export function vendorScripts() {
  return gulp.src(sysConfig.paths.src.vendorScripts+'**/*.js')
        .pipe(gulp.dest(sysConfig.paths.build.js.vendors))
        .pipe(browserSync.stream());
}
// Compile main script
export function scripts() {
  return gulp.src(sysConfig.paths.src.js+'*.js')
        .pipe(rigger())
        .pipe(sourcemap.init())
          .pipe(uglify())
          .pipe(rename({
            suffix: '.min'
          }))
        .pipe(sourcemap.write())
        .pipe(gulp.dest(sysConfig.paths.build.js.mainScript))
        .pipe(browserSync.stream());
}

// Move images
export function images() {
  return gulp.src(sysConfig.paths.src.img+'**/*.*')
        .pipe(gulp.dest(sysConfig.paths.build.img))
        .pipe(browserSync.stream());
}

// Move fonts
export function fonts() {
  return gulp.src(sysConfig.paths.src.fonts+'**/*.*')
        .pipe(gulp.dest(sysConfig.paths.build.fonts))
        .pipe(browserSync.stream());
}

// Start Server
export function serverStart() {
  bs.init(sysConfig.serverConf);
}

export function serverReload(done) {
  bs.reload();
  return done();
}


// Generate PHP files
export function moleculesToPHP() {
  let m = mustache(sysConfig.paths.src.templates.molecules+'data.json');
  m.on('error',function(e) {
    gutil.log(e);
    m.end();
  });
  return gulp.src(sysConfig.paths.src.templates.molecules+'*.mustache')
    .pipe(replace(/\{\{#.+\}\}/g, '<!-- You can delete this comment -->'))
    .pipe(replace(/\{\{\/.+\}\}/g, '<!-- /You can delete this comment -->'))
    .pipe(inject.replace('{{> ../', '{{>'))
    .pipe(inject.replace('{{>../', '{{>'))
    .pipe(inject.replace('{{>', '<?php include get_template_directory() "/'))
    .pipe(cheerio(function($, file) {
      $('img').each(function() {
        let imgSrc = $(this).attr('src');
        $(this).attr('src', '--PHPSRC--'+imgSrc);
      });
    }))
    .pipe(inject.replace('--PHPSRC--', '<?php echo get_stylesheet_directory_uri(); ?>/'))
    .pipe(inject.wrap('<?php\n', '\n?>'))
    .pipe(inject.replace(' }}', '}}'))
    .pipe(inject.replace('}}', '.php" ?>'))
    .pipe(m)
    .pipe(rename({
      extname: '.php'
    }))
    .pipe(gulp.dest(sysConfig.paths.phpTemplates.molecules));
}

export function organismsToPHP() {
  let m = mustache(sysConfig.paths.src.templates.organisms+'data.json');
  m.on('error',function(e) {
    gutil.log(e);
    m.end();
  });
  return gulp.src(sysConfig.paths.src.templates.organisms+'*.mustache')
    .pipe(replace(/^(\{{2})(\/|#).+(\}{2})$/gim, '<!-- You can delete this comment -->'))
    .pipe(inject.replace('{{> ../', '{{>'))
    .pipe(inject.replace('{{>../', '{{>'))
    .pipe(inject.replace('{{>', '<?php include get_template_directory() "/'))
    .pipe(cheerio(function($, file) {
      $('img').each(function() {
        let imgSrc = $(this).attr('src');
        console.log(imgSrc);
        $(this).attr('src', '--PHPSRC--'+imgSrc);
      });
    }))
    .pipe(inject.replace('--PHPSRC--', '<?php echo get_stylesheet_directory_uri(); ?>/'))
    .pipe(inject.wrap('<?php\n', '\n?>'))
    // .pipe(inject.replace(' }}', '}}'))
    .pipe(inject.replace(' }}', '.php" ?>'))
    .pipe(m)
    .pipe(rename({
      extname: '.php'
    }))
    .pipe(gulp.dest(sysConfig.paths.phpTemplates.organisms));
}

// Watch
export function watch() {
  // Styles
  gulp.watch(sysConfig.paths.watch.scss, gulp.series(cleanStyles, styles, vendorStyles, serverReload));
  // HTML
  gulp.watch([sysConfig.paths.watch.mustache, sysConfig.paths.watch.data], gulp.series('compile-mustache' ,serverReload));
  // JS
  gulp.watch([sysConfig.paths.watch.js], gulp.series(cleanScripts, scripts, vendorScripts, serverReload));
  // Images
  gulp.watch([sysConfig.paths.watch.img], gulp.series(cleanImages, images, serverReload));
  // Fonts
  gulp.watch([sysConfig.paths.watch.fonts], gulp.series(cleanFonts, fonts, serverReload));
}

// Build Task
gulp.task('build', gulp.series(
  cleanBuild,
  gulp.parallel(vendorScripts, vendorStyles, scripts, stylesFinal, copyCountries, 'compile-mustache', fonts, images)
));

// Dev Task
gulp.task('dev', gulp.series(
  vendorScripts,
  vendorStyles,
  scripts,
  styles,
  fonts,
  images,
  copyCountries,
  'compile-mustache',
  gulp.parallel(watch, serverStart)
));