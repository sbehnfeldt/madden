;(function (global, $) {
    'use strict';

    // Document ready handler
    $(function () {
        console.log('Document ready');

        $('table').DataTable();
    });
})(this, jQuery);
