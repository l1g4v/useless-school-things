<?php
$type=$_GET['type'];
$id=$_GET['id'];
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

$sql = "UPDATE $type SET name='$n1', cost='$n2', info='$n3', amount='$n4' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo '<script>self.location="./index.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>