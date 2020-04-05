import {addRules, createConfiguration} from 'wcb'
import Dotenv from 'dotenv-webpack'

const isStorybook = process.env.STORYBOOK === 'true'

/** Generated webpack configuration. */
export const configuration = addRules(
  createConfiguration({
    assets: !isStorybook,
    cssLoaders: [
      {
        test: /\.scss$/,
        use: [
          'css-loader',
          {
            loader: 'sass-loader',
            options: {
              prependData: `
                @import 'src/common/theme/variables';
                @import '~bootstrap/scss/functions';
                @import '~bootstrap/scss/variables';
                @import '~bootstrap/scss/mixins';
              `,
            },
          },
        ],
      },
      {test: /\.css$/, use: ['css-loader']},
    ],
    destination: 'dist/assets',
    devServer: true,
    html: {
      meta: {
        viewport: 'user-scalable=no,width=device-width,viewport-fit=cover',
      },
      title: 'Reciplease',
    },
    paths: true,
    source: 'src/assets',
    split: true,
    webpack: {
      plugins: [new Dotenv()],
      resolve: {
        alias: {
          'react-dom': '@hot-loader/react-dom',
        },
      },
    },
  }),
  [{test: /\.(?:gif|jpg|jpeg|png|svg)$/, use: ['file-loader']}],
)
