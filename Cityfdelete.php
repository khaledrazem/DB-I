<?php
    include 'header.php'
?>

<br>
<form action="Citymain.php" method="POST">
<button type="submit">back</button>
</form>
<?php
 $sql="SELECT * FROM city WHERE City_Name LIKE '$_POST[cname]' AND  Country_Code LIKE '$_POST[code]'";
$result = mysqli_query($mysqli,$sql);
$queryResult=mysqli_num_rows($result);

if($queryResult>0){

while($row=mysqli_fetch_assoc($result)){
echo "deleting ".$row['City_Name']."";
echo "<div class='article-box'>
<h3>City Name: ".$row['City_Name']."</h3>
                <p>Country Code: ".$row['Country_Code']."</p>
                <p>Province: ".$row['Province']."</p>
                <p>Population: ".$row['Population']."</p>
              
</div>";
}
}

 $sql = "DELETE FROM city WHERE Country_Code='$_POST[code]' AND City_Name = '$_POST[cname]'";

if ($mysqli->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}

?>