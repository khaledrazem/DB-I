<?php
    include 'header.php'
?>

<html>
<div class="inserts">

<form action="language_main.php" method="POST">
<button type="submit">back</button>
</form>

<h1>Enter country code to delete.</h1>
<form action="language_fdelete.php" method="post">
Country code: <input type="text" name="code"><br>
Language: <input type="text" name="inplang"><br>
<br>

<input type="submit">
</form>

</inserts>
</html>
