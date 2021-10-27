window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

 try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    $.ajaxSetup({
        beforeSend:function (jqXHR, Obj) {
            Obj.data += '&_token=' + $('meta[name=csrf-token]').attr('content');
        }
    });

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.axios.interceptors.response.use(response => {
    if(phpdebugbar) {
        phpdebugbar.ajaxHandler.handle(response.request);
    }

    return response;
}, error => {
    return Promise.reject(error)
});
