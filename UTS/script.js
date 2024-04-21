// script.js
$(document).ready(function(){
    $("#loginForm").submit(function(event){
        event.preventDefault();
        var form = $(this);
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function(data){
                // Redirect ke dashboard.php jika login berhasil
                window.location.href = data;
            },
            error: function(_xhr, _status, _error){
                // Menampilkan pesan kesalahan jika login gagal
                alert("Invalid username or password.");
            }
        });
    });
});
