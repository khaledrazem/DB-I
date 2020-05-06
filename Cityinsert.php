<?php
    include 'header.php'
?>

<html>
<div class="inserts">

<form action="Citymain.php" method="POST">
<button type="submit">back</button>
</form>
<br>
<form action="Cityfinsert.php" method="post">
City Name: <input type="text" name="Cname"><br>
Country Code: <input type="text" name="code"><br>
Province: <input type="text" name="province"><br>
Population: <input type="text" name="Cpopulation"><br>
<br>
<input type="submit">
</form>

</div>
</html>

