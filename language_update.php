<?php
    include 'header.php'
?>
<br>
<html>

<form action="language_main.php" method="POST">
<button type="submit">back</button>
</form>
<div class="inserts">
<h1>Enter country code and language to update.</h1>
<form action="language_nupdate.php" method="post">
Country code: <input type="text" name="pcode"><br>
Language: <input type="text" name="inplang"><br>
<h2>Tick the fields to update and fill them in.</h2>
Language: <input type="checkbox" name="clang" value="y"><input type="text" name="lang"><br>
Official Language: <input type="checkbox" name="cofflang" value="y"><input type="text" name="offlang"><br>
Speaker percentage: <input type="checkbox" name="cperc" value="y"><input type="text" name="perc"><br>
<br>
<input type="submit">
</form>

</div>
</html>
