const path = require('path');
const webpack = require('webpack');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const ImageMinimizerPlugin = require('image-minimizer-webpack-plugin');
// const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

const devMode = process.env.NODE_ENV !== 'production';

// JS Directory path.
const JS_DIR = path.resolve(__dirname, 'assets');
const IMG_DIR = path.resolve(__dirname, 'dist/images');
const BUILD_DIR = path.resolve(__dirname, 'dist');
const entry = {
    main: `${JS_DIR}/main.js`,
};
const output = {
    path: BUILD_DIR,
    filename: 'js/[name].js',
};

const plugins = (argv) => [
    // new BrowserSyncPlugin({
    //     proxy: {
    //         target: "http://localhost/nazwa-strony"
    //     },
    //     files: ["**/*.php", "**.*.twig"]
    // }),
    new MiniCssExtractPlugin({
        filename: 'css/[name].css',
        chunkFilename: '[id].css',
    }),
    new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery',
    }),
    new CopyWebpackPlugin({
        patterns: [{ from: './assets/images', to: 'images' }],
    }),
    new ImageMinimizerPlugin({
        minimizer: {
            implementation: ImageMinimizerPlugin.imageminMinify,
            options: {
                plugins: [
                    ['gifsicle', { interlaced: true }],
                    ['jpegtran', { progressive: true }],
                    ['optipng', { optimizationLevel: 5 }],
                ],
            },
        },
    }),
];
const rules = [
    {
        test: /\.js$/,
        include: [JS_DIR],
        exclude: /node_modules/,
        use: [
            {
                loader: 'babel-loader',
                options: {
                    presets: ['@babel/preset-env'],
                    plugins: ['@babel/plugin-transform-runtime'],
                },
            },
            {
                loader: 'import-glob',
            },
        ],
    },
    {
        test: /\.scss|sass|css$/,
        use: [
            {
                loader: MiniCssExtractPlugin.loader,
            },
            {
                loader: 'css-loader',
            },
            {
                loader: 'sass-loader',
            },
            {
                loader: 'import-glob',
            },
        ],
    },
    {
        test: /\.(woff|woff2|eot|ttf|otf)$/i,
        type: 'asset/resource',
    },
];

module.exports = (env, argv) => ({
    entry,
    output,
    devtool: 'source-map',
    module: {
        rules,
    },
    mode: process.env.NODE_ENV === 'production' ? 'production' : 'development',
    plugins: plugins(argv),
    externals: {
        jquery: 'jQuery',
        $: 'jQuery',
    },
});
