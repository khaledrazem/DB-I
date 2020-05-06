<?php
    include 'header.php'
?>
<html>
<div class="inserts">

<form action="Citymain.php" method="POST">
<button type="submit">back</button>
</form>

<h1>Enter the city name and country code to delete.</h1>
<form action="Cityfdelete.php" method="post">
Country Code: <input type="text" name="code"><br>
City Name: <input type="text" name="cname"><br>
<br>

<input type="submit">
</form>

</div>
</html>
