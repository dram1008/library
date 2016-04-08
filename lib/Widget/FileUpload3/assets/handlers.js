var FileUpload3 = {
    // - selector - string - селектор JQuery элемента
    deleteCallback: function (selector) {
    },
    onChange: function (selector) {
        $(selector).on('change', function (e) {
            $(selector + '-value').val(e.target.value);
        });
    },
    init: function(selector){
        $(selector).bootstrapFileInput();
        $(selector).on('change', function (e) {
            $(selector + '-value').val(e.target.value);
            $(selector + '-img').remove();
        });
        $(selector + '-delete').click(function(){
            $(selector + '-img').remove();
            $(selector + '-value').val('');
            $(selector + '-is_delete').val(1);
        });
    }
};


