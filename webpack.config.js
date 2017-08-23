const webpack = require('webpack');
const helpers = require('webpack.helper');
const ExtractTextPlugin = require("extract-text-webpack-plugin");

module.exports = {

    entry: {
        'vendor': helpers.srcPath('vendor.js'),
        'app': helpers.srcPath('app.js')
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
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
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
                                helpers.root('src'),
                                helpers.root('node_modules')
                            ]
                        }}
                    ]
                }),
                include: [
                    helpers.root('src'),
                    helpers.root('node_modules')
                ]
            },
            {
                test: /\.css$/,
                use: [
                    {loader: "style-loader"},
                    {loader: "css-loader", options: {
                        sourceMap: true
                    }
                    },
                    {loader: 'postcss-loader'}
                ]
            }
        ]
    },

    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery",
            jquery: 'jquery'
        })
    ]
}