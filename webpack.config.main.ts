import {createConfiguration} from 'wcb'

export const configuration = createConfiguration({
    assets: false,
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
})
