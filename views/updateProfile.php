<div class='updateProfile'>
    <h1>Upade Profile</h1>
    <form id="registerForm" action="components/controller.php" method="POST">
<label>email:</label><br>
<input type="text" name="email"><br>
<br>
<label>Password:</label><br>
<input type="password" name="password1"><br>
<br>
<label>Confirm Password:</label><br>
<input type="password" name="password2"><br>
<br>
<label>You can upload a profile image:</label><br><br>
<input type="file" name="fileToUpload"><br><br>
<input type="hidden" name="updateProfile"><br>
<input type="submit" name="RegForm" value="REGISTER"><br>
<br>
<p id="warning"></p>
</form>
</div>