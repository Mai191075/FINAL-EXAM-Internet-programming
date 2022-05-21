<?php
require 'config.php';

$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);

if (mysqli_error($conn)){
    echo mysqli_error($conn);
} 

echo "No of rows is:" . mysqli_num_rows($result);

echo "<table border='1'>";
while ($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "<td><a href ='user_details.php?id=$row[0]'>Details</a></td>";
    echo "<td><a href ='delete_user_acc.php?id=$row[0]'>Delete user</a></td>";
    echo "<td><a href ='update_user_form.php?id=$row[0]'>Update my info</a></td>";
    echo "</tr>";
}
echo "</table>";

?>