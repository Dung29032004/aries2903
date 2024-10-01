<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Kiểm tra nếu file đã tồn tại
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Kiểm tra kích thước file
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Cho phép một số định dạng file nhất định
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Kiểm tra nếu $uploadOk bằng 0 thì không upload file
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// Nếu mọi thứ đều ổn, cố gắng upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file has been uploaded: " . htmlspecialchars($target_file) . "<br>";
        // Hiển thị ảnh đã upload
        echo "<img src='" . htmlspecialchars($target_file) . "' alt='Uploaded Image' style='max-width: 300px;'>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

  ?>