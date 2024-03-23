// <!-- Prak 3 Soal 3.2 --> 
$(document).ready(function() {
    $('#upload-form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: 'mod_upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response);
            },
            error: function(xhr, status, error) {
                $('#status').html('Terjadi kesalahan saat mengunggah file: ' + error);
            }
        });
    });
});