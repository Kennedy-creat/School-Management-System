<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $class_id = $_POST['class_id'];

    $sql = "INSERT INTO students (name, dob, gender, class_id) VALUES ('$name', '$dob', '$gender', $class_id)";
    if ($conn->query($sql) === TRUE) {
        echo "New student registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register Student</title>
</head>
<body>
    <h2>Register Student</h2>
    <form method="post" action="">
        Name: <input type="text" name="name"><br>
        Date of Birth: <input type="date" name="dob"><br>
        Gender: 
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female<br>
        Class ID: <input type="number" name="class_id"><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
