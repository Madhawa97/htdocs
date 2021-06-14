<?php
    session_start();
?>

<form action="log_action.php" method="POST">
<label>Email: </label>
<input type="text" name="email"><br><br>
<label>Password: </label> 
<input type="password" name="password"><br><br>

<input type="submit" value="Login">
</form>