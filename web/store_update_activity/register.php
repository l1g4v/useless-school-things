<?php
$type=$_GET['type'];
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

$sql = "INSERT INTO $type (nombre, peso, precio, distribuidor) VALUES ('$n1','$n2','$n3','$n4')";

if ($conn->query($sql) === TRUE) {
    echo '<script>self.location="./index.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>