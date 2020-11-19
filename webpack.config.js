const path = require('path');

module.exports = {
      module: {
    rules: [
      {
        test: /\.(png|jpg|gif)$/i,
        use: [
          {
            loader: 'url-loader',
            options: {
              limit: 8192,
            },
          },
        ],
      },
    ],
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
            
        },
    },
    
   }
}

