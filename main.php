<?php
    include 'header.php'
?>
<br>
<form action="search.php" method="POST">
<input type="text" name="qry" placeholder="search">
<button type="submit" name="submit-search">Search</button>
</form>
<br>
<h2>Switch Tables</h2>
<form action="Citymain.php" method="POST">
<button type="submit">City</button>
</form>
<form action="language_main.php" method="POST">
<button type="submit">Language</button>
</form>
<br>
<h2>Edit Table</h2>
<form action="insert.php" method="POST">
<button type="submit">Insert</button>
</form>
<form action="delete.php" method="POST">
<button type="submit">Delete</button>
</form>
<form action="update.php" method="POST">
<button type="submit">Update</button>
<br>
</form>



<h1>All Fields</h1>


<div class="article">
    <?php
        $sql="SELECT * FROM country";
        $result = mysqli_query($mysqli,$sql);
        $qresult = mysqli_num_rows($result);

        if ($qresult>0){
            while ($row=mysqli_fetch_assoc($result)){
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
?>
</div>
