<?php
    include 'header.php'
?>

<br>
<form action="language_main.php" method="POST">
<button type="submit">back</button>
</form>
<br>
<?php
 $sql="SELECT * FROM language WHERE CountryCode LIKE '$_POST[code]' AND language LIKE '$_POST[inplang]'";
$result = mysqli_query($mysqli,$sql);
$queryResult=mysqli_num_rows($result);

if($queryResult>0){

while($row=mysqli_fetch_assoc($result)){
echo "deleting ".$row['CountryCode']."";
echo "<div class='article-box'>
<h3>Country Code: ".$row['CountryCode']."</h3>
                <p>Language: ".$row['Language']."</p>
                <p>Is it the Official Language?: ".$row['IsOfficialLang']."</p>
                <p>Percentage of speakers: ".$row['SpeakersPercentage']." </p>
</div>";
}
}

 $sql = "DELETE FROM language WHERE CountryCode='$_POST[code]'";

if ($mysqli->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}

?>