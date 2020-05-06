<?php
    include 'header.php'
?>  
<br>
<form action="Citysearch.php" method="POST">
<input type="text" name="qry" placeholder="search">
<button type="submit" name="submit-search"> Search </button>
</form>
<br>
<h2>Switch Tables</h2>
<br>
<form action="main.php" method="POST">
<button type="submit">Country</button>
</form>
<form action="language_main.php" method="POST">
<button type="submit">Language</button>
</form>
<br>
<h2>Edit Table</h2>
<br>
<form action="Cityinsert.php" method="POST">
<button type="submit">Insert</button>
</form>
<form action="Citydelete.php" method="POST">
<button type="submit">Delete</button>
</form>
<form action="Cityupdate.php" method="POST">
<button type="submit">Update</button>
</form>
<br>

<h1>All Fields</h1>


<div class="article">
    <?php
        $sql="SELECT * FROM city";
        $result = mysqli_query($mysqli,$sql);
        $qresult = mysqli_num_rows($result);

        if ($qresult>0){
            while ($row=mysqli_fetch_assoc($result)){
            echo "<div class='article-box'>
                <h3>City Name: ".$row['City_Name']."</h3>
                <p>Country Code: ".$row['Country_Code']."</p>
                <p>Province: ".$row['Province']."</p>
                <p>Population: ".$row['Population']."</p>
                </div>";

            }
}
?>
</div>
</body>