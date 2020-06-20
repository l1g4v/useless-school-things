<html>
<meta charset="utf-8">
<title></title>

<body>
    <form method="post" action="./register.php?type=tienda">
        <table border="2">
            <tr>
                <td>Producto</td>
                <td>Precio</td>
                <td>Peso</td>
                <td>Distribuidor</td>
            </tr>
            <tr>
                <td><input type="text" name="nombre"></td>
                <td><input type="number" step="any" name="precio"></td>
                <td><input type="number" step="any" name="peso"></td>
                <td><input type="text" name="distribuidor"></td>
            </tr>
            <tr>
                <td><input type="submit" name="" onclick=""></td>
            </tr>
        </table>
    </form>
    <table border="2">
        <tr>
            <td>Producto</td>
            <td>Precio</td>
            <td>Peso</td>
            <td>Distribuidor</td>
        </tr>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "classroom";

        $mysqli  = new mysqli($servername, $username, $password, $dbname);

        if ($mysqli->connect_errno) {
            echo $mysqli->connect_error;
            exit();
        }
        $result = $mysqli->query("SELECT * FROM tienda");

        while ($row = mysqli_fetch_array($result)) {
        ?>
            <form method="post" action="./updater.php?type=tienda&id=<?php echo $row['id']; ?>">
                <tr>
                    <td><input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"></td>
                    <td><input type="number" step="any" name="precio" value="<?php echo $row['precio']; ?>"></td>
                    <td><input type="number" step="any" name="peso" value="<?php echo $row['peso']; ?>"></td>
                    <td><input type="text" name="distribuidor" value="<?php echo $row['distribuidor']; ?>"></td>
                    <td>
                        <a href=<?php echo "./deleter.php?type=fruta&id=" . $row['id']; ?>>Eliminar</a>
                    </td>
                    <td>
                        <input type="submit" value="actualizar">
                    </td>
                </tr>
            </form>
        <?php
        }
        ?>
    </table>
</body>

</html>