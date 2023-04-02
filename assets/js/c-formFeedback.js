$('.c-formFeedback .cBtn').on('click', function(e) {
    e.preventDefault();
    $(this).closest('form').find('.cForm__feedback').addClass('u-dnone');
    $(this).closest('form').find('.c-formFeedback__status').addClass('u-dnone');
});