<?php
if (isset($_COOKIE['user'])) {
    $user = json_decode($_COOKIE['user'], true);
} else {
    header("Location:index.php");
}

?>


<div class='profile'>
<h1>Profile Page</h1><br>
<img class="profileImg" src="public/profile/img/<?=$user['img'] ?>" alt="profile Default"><br><br>
<h2><?=$user['email'] ?></h2>
<br>
<button>UPDATE PROFIE</button>
</div>
