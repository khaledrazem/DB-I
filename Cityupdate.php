<?php
    include 'header.php'
?>
<html>
<div class="inserts">

<form action="Citymain.php" method="POST">
<button type="submit">back</button>
</form>

<h1>Enter city name and country code to update.</h1>
<form action="Citynupdate.php" method="post">

City Name: <input type="text" name="citName"><br>

Country Code: <input type="text" name="pcode"><br>

<h2>Tick the fields to update and fill them in.</h2>

City Name: <input type="checkbox" name="Ciname" value="y"><input type="text" name="Cname"><br>

Province: <input type="checkbox" name="Ciprovince" value="y"><input type="text" name="province"><br>

Population: <input type="checkbox" name="Cipopulation" value="y"><input type="text" name="Cpopulation"><br>
<br>

<input type="submit">
</form>

</div>
</html>
