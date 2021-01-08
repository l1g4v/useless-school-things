<?php
$type=$_GET['type'];
$n1 = $_POST['name'];
$n2 = $_POST['cost'];
$n3 = $_POST['info'];
$n4 = $_POST['amount'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classroom";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO $type (name, cost, info, amount) VALUES ('$n1','$n2','$n3','$n4')";

if ($conn->query($sql) === TRUE) {
    echo '<script>self.location="./index.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>