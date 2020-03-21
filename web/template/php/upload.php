<?php
include('conn.php');

$n1 = $_POST['name'];

mysql_query("INSERT INTO table_ (name) VALUES ('$n1')");
echo '<script>self.location="../html/index.php";</script>';


?>