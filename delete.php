<?php
    include 'header.php'
?>
<html>
<div class="inserts">

<form action="main.php" method="POST">
<button type="submit">back</button>
</form>

<h1>Enter country code to delete.</h1>
<form action="fdelete.php" method="post">
Country code: <input type="text" name="code"><br>

<br>
<input type="submit">
</form>

</div>
</html>
