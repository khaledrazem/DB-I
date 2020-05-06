<?php
    include 'header.php'
?>

<br>
<form action="main.php" method="POST">
<button type="submit">back</button>
</form>
<br>
<?php
 $sql="SELECT * FROM country WHERE Country_Code LIKE '$_POST[code]'";
$result = mysqli_query($mysqli,$sql);
$queryResult=mysqli_num_rows($result);

if($queryResult>0){

while($row=mysqli_fetch_assoc($result)){
echo "deleting ".$row['Country_Code']."";
echo "<div class='article-box'>
<h3>Country Code: ".$row['Country_Code']."</h3>
                <p>Conutry Name: ".$row['Country_Name']."</p>
                <p>Continent: ".$row['Continent']."</p>
                <p>Region: ".$row['Region']."</p>
                <p>Region: ".$row['Region']."</p>
<p>Land_Area: ".$row['Land_Area']."</p>
<p>Independence: ".$row['Independence']."</p>
<p>Population: ".$row['Population']."</p>
<p>Expectancy: ".$row['Expectancy']."</p>
<p>GNP: ".$row['GNP']."</p>
<p>OldGNP: ".$row['OldGNP']."</p>
<p>Local_Name: ".$row['Local_Name']."</p>
<p>GovernmentType: ".$row['GovernmentType']."</p>
<p>Ruler: ".$row['Ruler']."</p>
<p>Capital_Code: ".$row['Capital_Code']."</p>
<p>Geo_Code: ".$row['Geo_Code']."</p>
</div>";
}
}

 $sql = "DELETE FROM country WHERE Country_Code='$_POST[code]'";

if ($mysqli->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}

?>