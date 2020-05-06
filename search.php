<?php
    include 'header.php'
?>

<h1>search page</h1>

<form action="main.php" method="POST">
<button type="submit">back</button>
</form>

<div class="article">
<?php



if(isset($_POST["submit-search"])){
$search=mysqli_real_escape_string($mysqli,$_POST['qry']);
$sql="SELECT * FROM country WHERE Country_Code LIKE '%$search%' OR Country_Name LIKE '%$search%' OR Continent LIKE '%$search%' OR Region LIKE '%$search%' OR
Land_Area LIKE '%$search%' OR Independence LIKE '%$search%' OR Population LIKE '%$search%' OR Expectancy LIKE '%$search%' OR GNP LIKE '%$search%' OR
 OldGNP LIKE '%$search%' OR Local_Name LIKE '%$search%' OR GovernmentType LIKE '%$search%' OR Ruler LIKE '%$search%' OR Capital_Code LIKE '%$search%' OR Geo_Code LIKE '%$search%'";
$result = mysqli_query($mysqli,$sql);
$queryResult=mysqli_num_rows($result);

if($queryResult>0){
echo "there are ".$queryResult." results";
while($row=mysqli_fetch_assoc($result)){
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
else{
echo "no results";
}
}
?>
</div>