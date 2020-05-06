<?php
    include 'header.php'
?>
<br>

<form action="Citymain.php" method="POST">
<button type="submit">back</button>
</form>
<?php
 
// Attempt insert query execution
$sql = "INSERT INTO city (City_Name, Country_Code, Province,Population) VALUES ('$_POST[Cname]', '$_POST[code]', '$_POST[province]','$_POST[Cpopulation]')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
?>