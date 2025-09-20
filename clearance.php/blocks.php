<?php
include('database.php'); 
include('department.php');
$sql = "SELECT * FROM blocks";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    echo "<h1> Blocks table </h1>";
    echo "<table border='1'>";
    echo "<tr><th> Block code</th><th>BlockName</th></tr>";

    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>".$row["block_code"]."</td>";
        echo "<td>".$row["block_name"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found.<br>";
}
?>