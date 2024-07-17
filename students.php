<?php
include 'db.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h2>Students</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Class ID</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["class_id"]. "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</body>
</html>
