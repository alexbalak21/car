<?php
function imgFileUpload()
{
    if (empty($_FILES['fileToUpload']['name'])) {
        return 'profile.png';
    }

    $error = 0;
    $target_dir = "../public/profile/img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $error = "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $error = "file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($fileExt != "jpg" && $fileExt != "png" && $fileExt != "jpeg"
        && $fileExt != "gif") {
        $error = "ext not allowed.";
        $uploadOk = 0;
    }

    if ($_FILES['fileToUpload']['error'] !== 0) {
        $error = 'php $_FILES error';
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        return $error;
        // if everything is ok, try to upload file
    } else {
        $fileNewName = uniqid('', true) . '.' . $fileExt;
        $target_file = $target_dir . $fileNewName;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $_FILES['uploaded'] = $fileNewName;
            return $fileNewName;
        } else {
            $error = "error moveing file";
        }
    }
    return $error;
}
