<!--
<!DOCTYPE html>
<html>
    <head>
        <title>Unggah File Document</title>
    </head>
    <body>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="upload.js"></script>
    </body>
</html> -->

<!DOCTYPE html>
<html>
    <head>
        <title>Unggah Gambar</title>
    </head>
    <body>
        <form id="upload-form" action="upload_ajax1.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" id="files" multiple="multiple" accept=".jpg, .jpeg, .png, .gif">
            <input type="submit" name="submit" value="Unggah">
        </form>
        <div id="status"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="upload1.js"></script>
    </body>
</html>