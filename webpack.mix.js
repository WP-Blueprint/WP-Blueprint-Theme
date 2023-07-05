/*
 * hf uses Laravel Mix
 *
 * Check the documentation at
 * https://laravel-mix.com/
 */

const mix = require("laravel-mix");
require("@tinypixelco/laravel-mix-wp-blocks");
require("laravel-mix-compress");
const { glb } = require("laravel-mix-glob");
// Change Source Root to Relative Path
mix.setResourceRoot("../");

// Autloading jQuery to make it accessible to all the packages, because, you know, reasons
// You can comment this line if you don't need jQuery.
mix.autoload({
	jquery: ["$", "window.jQuery", "jQuery"],
});

mix.setPublicPath("./assets/dist");

// Compile assets.
mix
	.js("assets/src/scripts/app.js", "assets/dist/js")
	.sass("assets/src/sass/style.scss", "assets/dist/css")
	.options({
		processCssUrls: true,
	})
	.sourceMaps();

// Compile assets for production.
mix.js(
	glb.src("assets/src/scripts/blocks/*.js"),
	glb.out({ outMap: "assets/dist/js/blocks" })
);
mix.js(
	glb.src("assets/src/scripts/fields/*.js"),
	glb.out({ outMap: "assets/dist/js/fields" })
);
mix.js(
	glb.src("assets/src/scripts/ajax/*.js"),
	glb.out({ outMap: "assets/dist/js/ajax" })
);
// Compress Laravel Mix
mix.compress();

// Create a Static Folder for Favicon Files
mix.copy("assets/src/favicon", "assets/dist/favicon");

// Create a Static Folder for Global Files
mix.copy("assets/src/global", "assets/dist/global");

// Webpack Config for Stats Output (Optional) - https://webpack.js.org/configuration/stats/
mix.webpackConfig({
	stats: {
		children: true,
	},
});
