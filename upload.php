<?php
if ($_FILES['gifFile']['error'] === UPLOAD_ERR_OK) {
    $tempFile = $_FILES['gifFile']['tmp_name'];

    // Read the file contents and encode it in base64
    $data = base64_encode(file_get_contents($tempFile));
    $dataUrl = 'data:image/gif;base64,' . $data;

    echo $dataUrl;
} else {
    echo 'Error: File upload failed with error code ' . $_FILES['gifFile']['error'];
}
?>
