<!DOCTYPE html>
<html>

<head>
  <title>CRUD</title>
</head>

<body>

  <form method="post" action="../php/upload.php">
    <table border="2">
      <tr>
        <td>Nombre</td>
      </tr>
      <tr>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td><input type="submit" name=""></td>
      </tr>
    </table>
  </form>

  <table border="2">
    <tr>
      <td>Nombre</td>
    </tr>

    <?php
    include('../php/conn.php');
    $res = mysql_query("SELECT * FROM table_");
    while ($row = mysql_fetch_array($res)) {
      ?>

      <tr>
        <td><?php echo $row['name'] ?></td>
      </tr>

    <?php
  }
  ?>

  </table>


</body>

</html>