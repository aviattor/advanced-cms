require('./bootstrap');

import Buefy from 'buefy'

window.Vue = require('vue');
Vue.use(Buefy)


// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app',
//     data: {
//         auto_password: true
//     }
// });

$(document).ready(() => {
    $('button.dropdown').hover(function(e){
        $(this).toggleClass('is-open')
    })
})