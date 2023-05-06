var path = require('path');

module.exports = {
    // cache:false,
    mode:'development',
    // entry: './components/app.js',
    entry:{
        app: path.join(__dirname, 'components','app','app.js')
    },
    output:{
        path: path.resolve(__dirname, './public/dist'),
        filename:'[name].js',
        clean:true
    },
    module:{
        rules:[{
            test: /\.js$/,
            exclude: /node_modules/,
            use: {
                loader: 'babel-loader',
                options:{
                    presets:['@babel/preset-react']
                }
            }
        }]
    }
}