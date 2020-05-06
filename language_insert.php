<?php
    include 'header.php'
?>

<html>
<div class="inserts">

<form action="language_main.php" method="POST">
<button type="submit">back</button>
</form>
<br>
<br>
<form action="language_finsert.php" method="post">
Country code: <input type="text" name="code"><br>
Language: <input type="text" name="lang"><br>
Official Language: <input type="text" name="offlang"><br>
Speakers Percentage: <input type="text" name="perc"><br>
<br>
<input type="submit">
</form>

</div>
</html>