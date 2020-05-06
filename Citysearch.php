<?php
    include 'header.php'
?>

<h1>search page</h1>

<form action="Citymain.php" method="POST">
<button type="submit">back</button>
</form>

<div class="article">
<?php



if(isset($_POST['submit-search'])){
$search=mysqli_real_escape_string($mysqli,$_POST['qry']);
$sql="SELECT * FROM city WHERE City_Name LIKE '%$search%' OR Country_Code LIKE '%$search%' OR Province LIKE '%$search%' OR Population LIKE '%$search%'";
$result = mysqli_query($mysqli,$sql);
$queryResult=mysqli_num_rows($result);

if($queryResult>0){
    
echo "there are ".$queryResult." results";

while($row=mysqli_fetch_assoc($result)){
    echo "<div class='article-box'>
    <h3>City Name: ".$row['City_Name']."</h3>
    <p>Country Code: ".$row['Country_Code']."</p>
    <p>Province: ".$row['Province']."</p>
    <p>Population: ".$row['Population']."</p>
    </div>";
}
}
else{
echo "no results";
}
}
?>
</div>