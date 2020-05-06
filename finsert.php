<?php
    include 'header.php'
?>
<br>

<form action="main.php" method="POST">
<button type="submit">back</button>
</form>
<?php
 
// Attempt insert query execution
$sql = "INSERT INTO country (Country_Code, Country_Name, Continent,Region,Land_Area,Independence,Population,Expectancy,GNP,OldGNP,Local_Name,GovernmentType,Ruler,Capital_Code,Geo_Code) VALUES
('$_POST[code]', '$_POST[name]', '$_POST[continent]','$_POST[region]', '$_POST[area]', '$_POST[ind]','$_POST[pop]', '$_POST[exp]', '$_POST[gnp]','$_POST[ognp]', '$_POST[lcl]', '$_POST[gvn]','$_POST[ruler]', '$_POST[capital]', '$_POST[geo]')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
?>