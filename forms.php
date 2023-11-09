<form action="forms.php" method="POST">
email: <input type="email" name="email">
<br>
password: <input type="password" name="password">
<br>
<input type="submit">

</form>

<?php
echo $_POST["email"];
echo "<br>";
echo $_POST["password"];

?>