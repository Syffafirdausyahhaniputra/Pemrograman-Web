<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data"> <!-- mengatur atribut enctype formulir menjadi "multipart/form-data" agar file dapat diunggah. -->
        <!-- <input type="file" name="fileToUpload" id="fileToUpload"> -->
        <input type="file" name="documentToUpload" id="documentToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>