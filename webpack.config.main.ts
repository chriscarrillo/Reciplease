import {addRules, createConfiguration} from 'wcb'

export const configuration = addRules(createConfiguration({
    assets: false,
    cssLoaders: [{test: /\.css$/, use: ['css-loader']}],
    destination: 'dist/assets',
    devServer: true,
    html: {title: 'Reciplease'},
    paths: true,
    source: 'src/assets',
    split: true,
    webpack: {
        resolve: {
            alias: {
                'react-dom': '@hot-loader/react-dom',
            },
        },
    },
}), [
  {test: /\.(gif|jpg|jpeg|png|svg|woff|woff2)$/, use: ['file-loader']},
])
