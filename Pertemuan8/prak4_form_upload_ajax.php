<!-- Prak 4 Menghias Upload File -->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="prak4_upload.css"> 
        <title>Unggah File Dokumen</title>
    </head>
    <body>
        <div class="upload-form-container">
            <h2>Unggah File Dokumen</h2>
            <form id="upload-form" action="upload2.js" method="post" enctype="multipart/form-data">
                <div class="file-input-container">
                    <input type="file" name="file" id="file" class="file-input"> 
                    <label for="file" class="file-label">Pilih File</label>
                </div>
                <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
            </form>
            <div id="status" class="upload-status"></div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="prak4_upload.js"></script>
    </body> 
</html>