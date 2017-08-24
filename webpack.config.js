const webpack = require('webpack');
const helpers = require('./webpack.helper');
const isDev = process.env.NODE_ENV === 'development';
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const ExtractSass = new ExtractTextPlugin({filename: '[name]-sass.css', allChunks: true});
const ExtractCss = new ExtractTextPlugin({filename: '[name].css', allChunks: true});

module.exports = {
    devtool: isDev ? 'cheap-module-eval-source-map' : 'source-map',

    entry: {
        'vendor': helpers.srcPath('js/vendor.js'),
        'app': helpers.srcPath('js/app.js')
    },

    output: {
        path: helpers.publicPath(''),
        publicPath: '/',
        filename: '[name].js',
        chunkFilename: '[id].chunk.js'
    },

    resolve: {
        extensions: ['.js']
    },

    module: {
        rules: [
            {
                test: /\.html$/,
                loader: 'html-loader',
                options: {
                    minification: false
                }
            },
            {
                test: /\.ico$/,
                loader: 'file-loader',
                options: {
                    hash: 'sha512',
                    digest: 'hex',
                    name: '[hash].[ext]'
                }
            },
            {
                test: /\.(jpe?g|png|gif|svg)$/,
                loader: 'file-loader',
                options: {
                    hash: 'sha512',
                    digest: 'hex',
                    name: 'images/[hash].[ext]'
                }
            },
            {
                test: /\.(eot|woff2?|ttf|otf)$/,
                loader: 'file-loader',
                options: {
                    hash: 'sha512',
                    digest: 'hex',
                    name: 'fonts/[hash].[ext]'
                }
            },
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            },
            {
                test: /\.scss$/,
                use: ExtractSass.extract({
                    use: [
                        {loader: "css-loader", options: {
                            importLoaders: 1,
                            sourceMap: true
                        }
                        },
                        {loader: 'postcss-loader', options: {
                            sourceMap: true
                        }},
                        {loader: 'resolve-url-loader'},
                        {loader: "sass-loader", options: {
                            sourceMap: true,
                            includePaths: [
                                helpers.srcPath('sass'),
                                helpers.root('node_modules')
                            ]
                        }}
                    ],
                    fallback: 'style-loader'
                }),
                include: [
                    helpers.srcPath('sass'),
                    helpers.root('node_modules')
                ]
            },
            {
                test: /\.css$/,
                use: ExtractCss.extract({
                    use: [
                        {loader: "css-loader", options: {
                            sourceMap: true
                        }},
                        {loader: 'postcss-loader'}
                    ],
                    fallback: 'style-loader'
                })
            }
        ]
    },

    plugins: [
        ExtractSass,

        ExtractCss,

        new webpack.optimize.CommonsChunkPlugin({
            name: ['app', 'vendor']
        }),

        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery",
            jquery: 'jquery',
            'process.env': {
                NODE_ENV: process.env.NODE_ENV
            }
        })
    ]
};