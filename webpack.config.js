const path = require("path");

// This is main configuration object.
// Here you write different options and tell Webpack what to do
module.exports = {
	entry: {
		vendor: __dirname + "/assets/js/src/vendor.js",
		main: __dirname + "/assets/js/src/main.js",
	},
	// Path and filename of your result bundle.
	// Webpack will bundle all JavaScript into this file
	output: {
		path: path.join(__dirname, "assets/js/dist"),
		filename: "[name].js",
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
					loader: 'babel-loader',
					options: {
						presets: [
							'@babel/preset-env'
						]
					}
				}
			}
		]
	},
	// Default mode for Webpack is production.
	// Depending on mode Webpack will apply different things
	// on final bundle. For now we don't need production's JavaScript
	// minifying and other thing so let's set mode to development
	// mode: 'development'
	watchOptions: {
		aggregateTimeout: 200,
		poll: 1000
	}
};