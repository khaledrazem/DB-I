<?php
    include 'header.php'
?>
<html>
<div class="inserts">

<form action="main.php" method="POST">
<button type="submit">back</button>
</form>
<div class="enter">
<h1>Enter country code to update.</h1>
<form action="nupdate.php" method="post">
</div>
<br>
Country code: <input type="text" name="pcode"><br>
<h2>Tick the fields to update and fill them in.</h2>
Country code: <input type="checkbox" name="ccode" value="y"><input type="text" name="code"><br>
Country name: <input type="checkbox" name="cname" value="y"><input type="text" name="name"><br>
Continent: <input type="checkbox" name="ccontinent" value="y"><input type="text" name="continent"><br>
region: <input type="checkbox" name="cregion" value="y"><input type="text" name="region"><br>
Land area: <input type="checkbox" name="carea" value="y"><input type="text" name="area"><br>
independence: <input type="checkbox" name="cind" value="y"><input type="text" name="ind"><br>
population: <input type="checkbox" name="cpop" value="y"><input type="text" name="pop"><br>
expectancy: <input type="checkbox" name="cexp" value="y"><input type="text" name="exp"><br>
gnp: <input type="checkbox" name="cgnp" value="y"><input type="text" name="gnp"><br>
old gnp: <input type="checkbox" name="cognp" value="y"><input type="text" name="ognp"><br>
local name: <input type="checkbox" name="clcl" value="y"><input type="text" name="lcl"><br>
government type: <input type="checkbox" name="cgvn" value="y"><input type="text" name="gvn"><br>
ruler: <input type="checkbox" name="cruler" value="y"><input type="text" name="ruler"><br>
capital code: <input type="checkbox" name="ccapital" value="y"><input type="text" name="capital"><br>
geo code: <input type="checkbox" name="cgeo" value="y"><input type="text" name="geo"><br>
<br>

<input type="submit">
</form>

</div>
</html>
