/* IMPORT MODULES */
var esLint = require( 'gulp-eslint' );
var esLintConfig = require( './.eslintrc.json' );
var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var connect = require('gulp-connect');
var filter = require('gulp-filter');
var PathMap = require( 'sfco-path-map' );
var postcss = require( 'gulp-postcss' );
var autoprefixer = require( 'autoprefixer' );

/* DECLARE VARS */
var PATHS = new PathMap( {
	src: './src',
	dest: './dist',
	// Templates
	templatesSrc: '{{src}}/templates',
	// Images
	imagesSrc: '{{src}}/img',
	imagesDest: '{{dest}}/img',
	// Styles
	stylesSrc: '{{src}}/sass',
	stylesDest: '{{dest}}/css',
	// Scripts
	scriptsSrc: '{{src}}/js',
	scriptsDest: '{{dest}}/js',
	themeScriptsSrc: '{{scriptsSrc}}/theme',
	vendorScriptsSrc: '{{scriptsSrc}}/vendor',
} );

/* DECLARE TASKS */
/**
 * 'Default' Gulp task, executed when `gulp` is run from the
 * command line with *no* arguments.
 *
 * The following tasks are executed *before* the contents of
 * the `default` task.
 * - `connect`
 * - `meta`
 * - `templates`
 * - `images`
 * - `sass`
 * - `scripts`
 * - `watch`
 */
gulp.task( 'default', [ 'connect', 'meta', 'templates', 'images', 'sass', 'scripts', 'watch' ], function() {
	console.log( 'INSIDE TASK: `default`' );
} );


/**
 * ...
 */
gulp.task( 'build', [ 'meta', 'templates', 'sass', 'scripts' ], function() {
	console.log( 'INSIDE TASK: `build`' );
} );


/**
 * ...
 */
gulp.task( 'meta', function() {
	console.log( 'INSIDE TASK: `meta`' );

	gulp.src( './src/style.css' )
		.pipe( gulp.dest( './dist/' ) );
} );

/**
 * ...
 */
gulp.task( 'templates', function() {
	console.log( 'INSIDE TASK: `templates`' );

	gulp.src( PATHS.templatesSrc + '/**/*.php' )
		.pipe( gulp.dest( PATHS.dest ) );
} );

/**
 * Migrate images from `src/` to `dist/`.
 *
 * NOTE: Task migrates files of *any* types within the dedicated images dir. Required for favicon-related files.
 */
gulp.task( 'images', function() {
	console.log( 'INSIDE TASK: `images`' );

	gulp.src( PATHS.imagesSrc + '/**/*.*' )
		.pipe( gulp.dest( PATHS.imagesDest ) );
} );

/**
 * Task starts `gulp-connect` server.
 * eg. allows for other tasks to hook into live-reload functionality.
 */
gulp.task( 'connect', function() {
	connect.server( {
		livereload: true
	} );
} );


/**
 * Task converts contents of `styles.scss` file (plus any
 * `*.scss` linked via `@import)` to vanilla CSS.
 *
 * Resulting CSS file is saved to specified 'dest' directory
 *
 * Output of task is also piped to `connect`, triggering live-reload
 */
gulp.task( 'sass', function() {
	console.log( 'INSIDE TASK: `sass`' );

	return gulp.src( PATHS.stylesSrc + '/styles.scss' )
		.pipe( sass(
			{
				outputStyle: 'expanded',
				includePaths: [
					'node_modules/normalize.css',
					'node_modules/bourbon/app/assets/stylesheets',
					'node_modules/susy/sass',
					'node_modules/sfco-sass-utils'
				]
			}).on( 'error', sass.logError )
		)
		.pipe( postcss( [
			autoprefixer( {
				browsers: [ 'last 2 versions' ],
			} ),
		] ) )
		.pipe( gulp.dest( PATHS.stylesDest ) )
		.pipe( connect.reload() );
} );


/**
 * Task minifies and renames all theme-specific `*.js` files in `src/`directory; resulting files are saved to specified 'dest'.
 * Task also moves/migrates all 'vendor' JS files from 'src/' to specified destination folder.
 */
gulp.task( 'scripts', function() {
	var vendorScriptFilter = filter( [ '**', '!src/**/vendor/' ], { restore: true } ); // NOTE - Array of patterns cannot start with `!...`. See: http://stackoverflow.com/questions/24235860/gulp-filter-not-filtering-out-excluded-files-correctly

	return gulp.src( [
		PATHS.themeScriptsSrc + '/**/*.js',
		PATHS.vendorScriptsSrc + '/**/*.js',
	] )
	.pipe( vendorScriptFilter )
		.pipe( uglify() )
		.pipe( rename( function( path ) {
			path.basename += '.min';
			path.extname = '.js';
		} ) )
		.pipe( gulp.dest( PATHS.scriptsDest ) )
	.pipe( vendorScriptFilter.restore ) // Migrate filtered out 'vendor' scripts.
	.pipe( gulp.dest( PATHS.scriptsDest ) )
		.pipe( connect.reload() );
} );


/**
 * Lint theme scripts via ESLint.
 */
gulp.task( 'scripts:lint', function() {
	gulp.src( PATHS.themeScriptsSrc )
		.pipe( esLint( esLintConfig ) )
		.pipe( esLint.format() )
		.pipe( esLint.failAfterError() );
} );


/**
 * Task watches for changes to files in `src/` directory,
 * executes appropriate task.
 */
gulp.task( 'watch', function() {
	console.log( 'INSIDE TASK: `watch`' );

	gulp.watch( PATHS.templatesSrc + '/**/*.php', [ 'templates' ] );
	gulp.watch( PATHS.stylesSrc + '/**/*.scss', [ 'sass' ] );
	gulp.watch( PATHS.scriptsSrc + '/**/*.js', [ 'scripts' ] );
} );
