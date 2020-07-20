require('./bootstrap');

const csrfToken = jQuery('meta[name="csrf-token"]').attr('content');

function redirect(target, method) {
    method = method === undefined ? 'GET' : method.toUpperCase();

    if (method === 'GET') {
        window.location.href = target;

        return;
    }

    jQuery('body').append(jQuery(
        '<form id="_confirm_form" action="' + target + '" method="POST" style="display:none;">' +
        '<input type="hidden" name="_token" value="' + csrfToken + '" />' +
        '<input type="hidden" name="_method" value="' + method + '" />' +
        '</form>',
    ));

    document.forms['_confirm_form'].submit();
};

// Nice and old-skool :D
jQuery(document).ready(function () {
    jQuery('[data-submit]').on('click', function (e) {
        const elem   = jQuery(this),
              href   = elem.attr('href'),
              method = elem.data('submit') || 'post';

        if (!href || href === '#') {
            return;
        }

        e.preventDefault();

        redirect(href, method);
    });
});
