import {addRules, createConfiguration} from 'wcb'
import Dotenv from 'dotenv-webpack'

const isStorybook = process.env.STORYBOOK === 'true'

/** Generated webpack configuration. */
export const configuration = addRules(
  createConfiguration({
    assets: !isStorybook,
    destination: 'dist/assets',
    devServer: true,
    html: !isStorybook,
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
