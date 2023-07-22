<?php
if ($_FILES['gifFile']['error'] === UPLOAD_ERR_OK) {
    $tempFile = $_FILES['gifFile']['tmp_name'];
    $targetDir = 'uploads/';
    $targetFile = $targetDir . basename($_FILES['gifFile']['name']);
    
    if (move_uploaded_file($tempFile, $targetFile)) {
        echo $targetFile;
    } else {
        echo 'Error: Unable to move uploaded file to target directory.';
    }
} else {
    echo 'Error: File upload failed with error code ' . $_FILES['gifFile']['error'];
}
?>
