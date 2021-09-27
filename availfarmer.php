<?php
$connection = mysqli_connect("localhost", "root", "","project_hcd");

//Select
$q = mysqli_query($connection, "SELECT
    `farmer`.`fullname`
    , `farmer`.`address`
    , `farmer`.`state`
    ,`farmer`.`city`
FROM
    `farmer`") or die(mysqli_error($connection));

$count = mysqli_num_rows($q);
echo "$count Records Found";
echo "<table border='1'>";
echo "<tr>";
echo "<th>Farmer_name</th>";
echo "<th>address</th>";
echo "<th>state</th>";
echo "<th>City</th>";
echo "</tr>";

while($row = mysqli_fetch_array($q)){
    echo "<tr>";
    echo "<td>{$row['fullname']}</td>";
    echo "<td>{$row['address']}</td>";
    echo "<td>{$row['city']}</td>";
    echo "<td>{$row['state']}</td>";
    echo "</tr>";
}
echo "</table>";