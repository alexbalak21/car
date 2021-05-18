<?php
require_once "model.php";
require_once "upload.php";

if (isset($_POST['register'])) {

    $img = 'profile.png';
    if (!empty($_FILES['fileToUpload']['name'])) {
        $error = imgFileUpload();
        $img = $_FILES['uploaded'];
    }
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    if ($password1 === $password2) {
        $id = registerUser($email, $password1, $firstname, $lastname, $phone, $img);
        if ($id > 0) {
            header("Location: ../index.php?page=login");
        }
    }
}
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = checkUserPass($email, $password);
    if ($result == 'NOUSER') {
        header("Location: ../index.php?page=login&error=NOUSER");
    }

    if ($result == 'WRONGPASS') {
        header("Location: ../index.php?page=login&error=WRONGPASS");
    }
    if ($result['connected'] == 'TRUE') {
        array_pop($result);
        $data = json_encode($result, true);
        set_cookie('user', $data, 14);
        header("Location: ../index.php?page=profile");
    }
}

function set_cookie($name, $value, $expDays)
{
    $set = setcookie($name, $value, time() + (86400 * (INT)$expDays), "/");
    return $set;
}
