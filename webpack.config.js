const HtmlWebpackPlugin = require('html-webpack-plugin');
const path = require('path');

module.exports = {
  entry: './src/js/index.js',
  plugins: [
      new HtmlWebpackPlugin({
        title: 'Frida en su jardín secreto'
      })
    ],
  output: {
    filename: '[name].bundle.js',
    path: path.resolve(__dirname, 'dist'),
    clean: true
  },
  module:{
    rule: [
      {
        test: /\.css$/i,
        use: ['style-loader', 'css-loader'],
      },
    ]
  } 
}
