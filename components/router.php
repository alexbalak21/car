<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if (!file_exists("views/$page.php")) {
        $page = 'home';
    }
} else {
    $page = "home";
}
if(isset($_GET['logout'])){
    require_once "logout.php";
}