<?php
    include 'header.php'
?>
<br>
<form action="language_search.php" method="POST">
<input type="text" name="qry" placeholder="search">
<button type="submit" name="submit-search">Search</button>
</form>
<br>
<h2>Switch Tables</h2>
<form action="Citymain.php" method="POST">
<button type="submit">City</button>
</form>
<form action="main.php" method="POST">
<button type="submit">Country</button>
</form>
<br>
<h2>Edit Table</h2>
<form action="language_insert.php" method="POST">
<button type="submit">Insert</button>
</form>
<form action="language_delete.php" method="POST">
<button type="submit">Delete</button>
</form>
<form action="language_update.php" method="POST">
<button type="submit">Update</button>
<br>
</form>



<h1>All Fields</h1>




<div class="article">
    <?php
        $sql="SELECT * FROM language";
        $result = mysqli_query($mysqli,$sql);
        $qresult = mysqli_num_rows($result);

        if ($qresult>0){
            while ($row=mysqli_fetch_assoc($result)){
            echo "<div class='article-box'>
                <h3>Country Code: ".$row['CountryCode']."</h3>
                <p>Language: ".$row['Language']."</p>
                <p>Official Language: ".$row['IsOfficialLang']."</p>
                <p>Percentage of Speakers: ".$row['SpeakersPercentage']."</p>                </div>";
            }
}
?>
</div>
</body>