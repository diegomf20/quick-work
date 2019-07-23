const { VueLoaderPlugin } = require('vue-loader') 
const HtmlWebpackPlugin=require('html-webpack-plugin');
module.exports = {
    entry: './src/app.js',
    output: {
        path: __dirname+'/public',
        filename: 'app.js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader'
                }
            },
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            }
        ]
    },
    plugins: [
        new VueLoaderPlugin(),
        new HtmlWebpackPlugin({
            template: './src/index.html'
        })
    ],
    devServer: {
        port: 8085,
        historyApiFallback: true
    }
}