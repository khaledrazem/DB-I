<?php
    include 'header.php'
?>

<br>
<form action="Citymain.php" method="POST">
<button type="submit">back</button>
</form>
<?php
if (isset($_POST['Ciname']) && $_POST['Ciname']=='y'){
	$sql = "UPDATE city SET City_Name='$_POST[Cname]' WHERE City_Name='$_POST[citName]' AND Country_Code ='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['Ciprovince']) && $_POST['Ciprovince']=='y'){
	$sql = "UPDATE city SET Province='$_POST[province]' WHERE City_Name='$_POST[citName]' AND Country_Code ='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}
if (isset($_POST['Cipopulation']) && $_POST['Cipopulation']=='y'){
	$sql = "UPDATE city SET Population ='$_POST[Cpopulation]' WHERE City_Name='$_POST[citName]' AND Country_Code ='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

?>
