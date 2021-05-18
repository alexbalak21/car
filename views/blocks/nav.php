<?php
$home = "<li><a href='index.php'>Home</a></li>";
$link = "<li><a href='#'>LINK</a></li>";
$login = "<li id='nav-right'><a id='loginLink' href='?page=login'>Login</a></li>";
$profile = "<li><a href='?page=profile'>Profile</a></li>";
$register = "<li id='nav-right'><a id='registerLink' href='?page=register'>Register</a></li>";
$account = "<li id='nav-right'><a href='?page=profile'>Account</a></li>";
$logout = "<li   id='nav-right'><a href='?logout=accout'>Log Out</a></li>";
$link2 = $link;
$link3 = $link;
$link4 = $link;
$link5 = $link;
if (isset($_COOKIE['user'])) {
    $user = json_decode($_COOKIE['user'], true);
    $link4 = $logout;
    $link5 = $account;
} else {
    $link5 = $login;
    $link4 = $register;
}

echo $home;
echo $link2;
echo $link3;
echo $link4;
echo $link5;
