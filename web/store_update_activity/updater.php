<?php
$type=$_GET['type'];
$id=$_GET['id'];
$n1 = $_POST['nombre'];
$n2 = $_POST['peso'];
$n3 = $_POST['precio'];
$n4 = $_POST['distribuidor'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classroom";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE $type SET nombre='$n1', peso='$n2', precio='$n3', distribuidor='$n4' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo '<script>self.location="./index.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>