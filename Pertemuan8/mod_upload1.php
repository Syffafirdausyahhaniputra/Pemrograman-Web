<!-- Prak 1 Soal 1.2 -->
<?php
if(isset($_POST["submit"])){
    $targetDirectory = "uploads/"; 
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif"); //format file yang diizinkan untuk upload
    $maxFileSize = 5 * 1024 * 1024; // 5 MB
    
    if(in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize){
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
            echo "File berhasil diunggah";
        }else{
            echo "Gagal mengunggah file";
        }
    }else{
        echo "Gagal mengunggah file. File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>