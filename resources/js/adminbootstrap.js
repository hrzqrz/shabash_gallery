// ********************* ADMIN LTE ************************


// ********************* ADMIN LTE ************************

window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    //require('bootstrap');
    require('admin-lte-persian');

    // require('admin-lte-persian/bower_components/jquery/dist/jquery.min.js');

    // require('admin-lte-persian/bower_components/jquery-ui/jquery-ui.min.js');
    
    // require('admin-lte-persian/bower_components/bootstrap/dist/js/bootstrap.min.js');

    // require('admin-lte-persian/bower_components/raphael/raphael.min.js');

    // require('admin-lte-persian/bower_components/morris.js/morris.min.js');

    // require('admin-lte-persian/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js');

    // require('admin-lte-persian/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');

    // require('admin-lte-persian/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');

    // require('admin-lte-persian/bower_components/jquery-knob/dist/jquery.knob.min.js');

    // require('admin-lte-persian/bower_components/moment/min/moment.min.js');

    // require('admin-lte-persian/bower_components/bootstrap-daterangepicker/daterangepicker.js');

    // require('admin-lte-persian/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');

    //require('admin-lte-persian/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');

    // require('admin-lte-persian/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');

    // require('admin-lte-persian/bower_components/fastclick/lib/fastclick.js');

    // require('admin-lte-persian/dist/js/adminlte.min.js');

    // require('admin-lte-persian/dist/js/pages/dashboard.js');

    // require('admin-lte-persian/dist/js/demo.js');

    //require('https://code.iconify.design/1/1.0.6/iconify.min.js');
    
    $.widget.bridge('uibutton', $.ui.button);
    
    
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
