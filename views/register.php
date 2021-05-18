<div class="login">
<h1>REGISTER</h1>
<br>
<form id="registerForm" enctype="multipart/form-data" action="components/controller.php" method="POST">
<label>email:</label><br>
<input type="text" name="email"><br>
<br>
<label>Password:</label><br>
<input type="password" name="password1"><br>
<br>
<label>Confirm Password:</label><br>
<input type="password" name="password2"><br>
<br>
<label>Firstname:</label><br>
<input type="text" name="firstname"><br>
<br>
<label>Lastname:</label><br>
<input type="text" name="lastname"><br>
<br>
<label>Phone:</label><br>
<input type="text" name="phone"><br>
<br>
<label>You can upload a profile image:</label><br><br>
<input type="file" name="fileToUpload"><br><br>
<input type="hidden" name="register"><br>
<input type="submit" name="RegForm" value="REGISTER"><br>
<br>
<p id="warning"></p>
</form>
</div>
<script src="assets/js/register.js"></script>
