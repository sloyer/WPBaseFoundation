// makes all PDFs open in a "new window"
jQuery(function($) {
    $('a[href$=".pdf"]').attr('target', '_blank');
});
