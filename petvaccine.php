<?php
include('database.php');

$sql = "SELECT * FROM vaccine";
$query = mysqli_query($conn, $sql);


if (mysqli_num_rows($query) > 0) {
    echo "<h1>Vaccine table </h1>";
    echo "<table border='1'>";
    echo "<tr><th>Vaccine ID</th><th>Vaccine Name</th><th>Expiration Date</th><th>Description</th></tr>";

    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>".$row["vaccine_id"]."</td>";
        echo "<td>".$row["vaccine_name"]."</td>";
        echo "<td>".$row["expiration_date"]."</td>";
        echo "<td>".$row["description"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found.<br>";
}

?>
