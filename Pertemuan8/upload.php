<?php
if (isset($_POST["submit"])){
    $targetDirectory = "documents/"; // direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtension = array("txt", "pdf", "doc", "docx");

    $maxFileSize = 10 * 1024* 1024;

    if (in_array($documentFileType, $allowedExtension) && $_FILES["documentToUpload"]["size"] <= $maxFileSize){
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)){
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>
<!-- if (isset($_POST["submit"])){
    $targetDirectory = "upload/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtension = array("jpg", "jpeg", "png", "gif");

    $maxFileSize = 5 * 1024* 1024;

    if (in_array($fileType, $allowedExtension) && $_FILES["fileToUpload"]["size"] <= $maxFileSize){
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
            echo "File berhasil diunggah.";
            echo "<br><b>image preview:</b><br>";
            echo '<img src="upload/' . $_FILES["fileToUpload"]["name"] . '" alt="Uploaded Image" width="200px">';
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "file tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
} -->