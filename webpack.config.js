// webpack.config.js
const path = require('path');
const webpack = require('webpack');

module.exports = {
  entry: './src/js/app.js', // Your main JS file
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist'), // Final output directory
  },
  mode: 'development', // or 'production'
  plugins: [
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
      'window.jQuery': 'jquery',
    }),
  ],
  module: {
    rules: [
      // Add loaders here later if needed (like Babel)
    ],
  },
};