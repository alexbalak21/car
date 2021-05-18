<div class="login">
<h1>LOGIN</h1>
<br>
<form id='loginForm' action="components/controller.php" method="POST">
<label>email:</label><br>
<input type="text" name="email"><br>
<br>
<label>Password:</label><br>
<input type="password" name="password"><br>
<br>
<input type="hidden" name="login">
<input type="submit" name="loginSub" value="LOGIN"><br>
</form>
<br>
<p id="warning"></p>
</div>
<script src="assets/js/login.js"></script>
