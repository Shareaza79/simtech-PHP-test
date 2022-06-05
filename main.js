$('#userFileUpload').change(function () {
    var i = $(this).prev('label').clone();
    var file = $('#userFileUpload')[0].files[0].name;
    $(this).prev('label').text(file);
});