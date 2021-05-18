<?php
 setcookie('user', null, -1, '/');
 unset($_COOKIE['user']);
 header('Location:index.php?page=logout');
?>  