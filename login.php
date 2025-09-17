<?php

$conn = mysqli_connect("localhost", "root", "", "ellaa");

if (!$conn) {
    die("Connection failed");
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM students WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "Login Successful! Welcome :)";
    exit();
} else {
    echo "Invalid username or password";
}

mysqli_close($conn);
?>
