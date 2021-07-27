require('./nav');

// Require Vue
window.Vue = require('vue').default;

const AnyDownloader = require('any-downloader-vue');
Vue.component(
    'AnyDownloader',
    AnyDownloader
)


const downloader = new Vue({
    el: '#downloader'
});
