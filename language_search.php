<?php
    include 'header.php'
?>

<h1>search page</h1>

<form action="language_main.php" method="POST">
<button type="submit">back</button>
</form>

<div class="article">
<?php



if(isset($_POST["submit-search"])){
$search=mysqli_real_escape_string($mysqli,$_POST['qry']);
$sql = "SELECT * FROM language WHERE CountryCode LIKE '%$search%' OR Language LIKE '%$search%' OR IsOfficialLang LIKE '%$search%' OR SpeakersPercentage LIKE '%$search%'";
$result = mysqli_query($mysqli,$sql);
$queryResult=mysqli_num_rows($result);

if($queryResult>0){
echo "there are ".$queryResult." results";
while($row=mysqli_fetch_assoc($result)){
echo "<div class='article-box'>
<h3>Country Code: ".$row['CountryCode']."</h3>
                <p>Language: ".$row['Language']."</p>
                <p>Is it the Official Language?: ".$row['IsOfficialLang']."</p>
                <p>Percentage of speakers: ".$row['SpeakersPercentage']." </p>
</div>";
}
}
else{
echo "no results";
}
}
?>
</div>