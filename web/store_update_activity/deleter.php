<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classroom";

$conn = new mysqli($servername, $username, $password, $dbname);

$i =  (int)$_GET['id']; 
$t = $_GET['type'];

if ($conn->query("DELETE FROM $t WHERE id=$i") === TRUE) {
    echo '<script>self.location="./index.php";</script>';
} else {
    echo "Error: <br>" . $conn->error;
}

//echo '<script>self.location="./index.php";</script>';

?>
