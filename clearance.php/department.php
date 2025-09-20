<?php
include('database.php'); 

$sql = "SELECT * FROM departments";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    echo "<h1> department table </h1>";
    echo "<table border='1'>";
    echo "<tr><th> department id</th><th>departmentname</th></tr>";

    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>".$row["department_id"]."</td>";
        echo "<td>".$row["department_name"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found.<br>";
}
?>