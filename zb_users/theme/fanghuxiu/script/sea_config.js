seajs.config({
    comboSyntax: ['??', ','],

    alias: {
        'jquery': 'jquery-1.11.1.min',
        'bootstrap': 'bootstrap.min',
        'sea_combo_flush': 'sea_combo_flush.js',
        'cookie':'jquery.cookie',
        's_css':'seajs_css'
    },
    charset: 'utf-8'
});
seajs.use(['jquery','init']);