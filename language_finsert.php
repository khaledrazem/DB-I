<?php
    include 'header.php'
?>

<br>
<form action="language_main.php" method="POST">
<button type="submit">back</button>
</form>
<?php
 
// Attempt insert query execution
$sql1 = "INSERT INTO country (Country_Code) VALUES ('$_POST[code]')";

$sql = "INSERT INTO language (CountryCode, Language, IsOfficialLang, SpeakersPercentage) VALUES ('$_POST[code]', '$_POST[lang]', '$_POST[offlang]','$_POST[perc]')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Unable to execute $sql. " . $mysqli->error;
}
 
?>