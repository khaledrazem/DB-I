<?php
    include 'header.php'
?>
<br>

<form action="language_main.php" method="POST">
<button type="submit">back</button>
</form>
<br>
<?php
if (isset($_POST['clang']) && $_POST['clang']=="y"){
	$sql = "UPDATE language SET Language='$_POST[lang]' WHERE CountryCode='$_POST[pcode]' AND language = '$_POST[inplang]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['cofflang']) && $_POST['cofflang']=="y"){
	$sql = "UPDATE language SET IsOfficialLang='$_POST[offlang]' WHERE CountryCode='$_POST[pcode]' AND language = '$_POST[inplang]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['cperc']) && $_POST['cperc']=="y"){
	$sql = "UPDATE language SET SpeakersPercentage='$_POST[perc]' WHERE CountryCode='$_POST[pcode]' AND language = '$_POST[inplang]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

?>
