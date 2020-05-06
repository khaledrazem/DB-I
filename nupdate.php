<?php
    include 'header.php'
?>
<br>

<form action="main.php" method="POST">
<button type="submit">back</button>
</form>
<?php
if (isset($_POST['ccode']) && $_POST['ccode']=='y'){
	$sql = "UPDATE country SET Country_Code='$_POST[code]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['cname']) && $_POST['cname']=="y"){
	$sql = "UPDATE country SET Country_Name='$_POST[name]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['ccontinent']) && $_POST['ccontinent']=="y"){
	$sql = "UPDATE country SET Continent='$_POST[continent]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['cregion']) && $_POST['cregion']=="y"){
	$sql = "UPDATE country SET Region='$_POST[region]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['carea']) && $_POST['carea']=="y"){
	$sql = "UPDATE country SET Land_Area='$_POST[area]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['cind']) && $_POST['cind']=="y"){
	$sql = "UPDATE country SET Independence='$_POST[ind]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['cpop']) && $_POST['cpop']=="y"){
	$sql = "UPDATE country SET Population='$_POST[pop]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['cexp']) && $_POST['cexp']=="y"){
	$sql = "UPDATE country SET Expectancy='$_POST[exp]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['cgnp']) && $_POST['cgnp']=="y"){
	$sql = "UPDATE country SET 'GNP=$_POST[gnp]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['cognp']) && $_POST['cognp']=="y"){
	$sql = "UPDATE country SET OldGNP='$_POST[ognp]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['clcl']) && $_POST['clcl']=="y"){
	$sql = "UPDATE country SET Local_Name='$_POST[lcl]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['cgvn']) && $_POST['cgvn']=="y"){
	$sql = "UPDATE country SET GovernmentType='$_POST[gvn]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['cruler']) && $_POST['cruler']=="y"){
	$sql = "UPDATE country SET Ruler='$_POST[ruler]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['ccapital']) && $_POST['ccapital']=="y"){
	$sql = "UPDATE country SET Capital_Code='$_POST[capital]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

if (isset($_POST['cgeo']) && $_POST['cgeo']=="y"){
	$sql = "UPDATE country SET GeoCode='$_POST[geo]' WHERE Country_Code='$_POST[pcode]'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $mysqli->error;
}
}

?>
