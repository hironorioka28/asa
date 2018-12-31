module.exports = {
  // メインとなる JavaScript ファイル (エントリーポイント)
  entry: `./src/js/index.js`,

  // ファイルの出力設定
  output: {
    // 出力ファイルのディレクトリ名
    path: `${__dirname}/dist`,
    // 出力ファイル名
    filename: 'main.js'
  },

  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          'style-loader',
          {
            loader: 'css-loader',
            options: {
              url: false,
              importLoaders: 2
            }
          },
          {
            loader: 'postcss-loader'
          },
          {
            loader: 'sass-loader'
          }
        ]
      }
    ]
  },

  resolve: {
    alias: {
      vue: 'vue/dist/vue.js',
      jquery: 'jquery/dist/jquery.min.js'
    }
  }
}
