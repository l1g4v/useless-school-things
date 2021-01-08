<html>
<meta charset="utf-8">
<title>Almacen</title>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style type="text/css">
        body {
            padding: 0;
            margin: 0;
            background: #ddd;
        }

        .btn {
            margin-top: 10px;
        }

        .container {
            margin: 100px auto;
            width: 55%;
        }

        @media (max-width: 952px) {
            .container {
                width: 60%;
            }
        }

        @media (max-width: 475px) {
            .container {
                width: 80%;
            }
        }
    </style>

</head>

<body>
    <main>
        <div class="container">
            <div class="row card hoverable">
                <div class="card-content">
                    <h4 class="center blue-text">Almacen</h4>
                    <form method="post" class="row s12" action="./register.php?type=lab">
                        <table>
                            <tr>
                                <td>Producto</td>
                                <td>Precio</td>
                                <td>Descripcion</td>
                                <td>Disponible</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="name"></td>
                                <td><input type="number" step="any" name="cost"></td>
                                <td><input type="text" name="info"></td>
                                <td><input type="number" step="1" name="amount"></td>
                                <td><button type="submit" class="waves-effect waves-light btn-floating">
                                        <i class="material-icons right">library_add</i>
                                    </button></td>
                            </tr>
                        </table>
                    </form>
                    <table class="row s12">
                        <tr>
                            <td>Producto</td>
                            <td>Precio</td>
                            <td>Descripcion</td>
                            <td>Disponible</td>
                            <td></td>
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
                        $result = $mysqli->query("SELECT * FROM lab");
                        $assets = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            $assets += $row['cost'] * $row['amount'];
                        ?>
                            <form method="post" class="row s12" action="./updater.php?type=lab&id=<?php echo $row['id']; ?>">
                                <tr>
                                    <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
                                    <td><input type="number" step="any" name="cost" value="<?php echo $row['cost']; ?>"></td>
                                    <td><input type="text" name="info" value="<?php echo $row['info']; ?>"></td>
                                    <td><input type="number" step="1" name="amount" value="<?php echo $row['amount']; ?>"></td>
                                    <td>
                                        <a class="waves-effect waves-light btn-floating red" href=<?php echo "./deleter.php?type=lab&id=" . $row['id']; ?>>
                                            <i class="material-icons right">delete_forever</i>
                                        </a>
                                        <button type="submit" class="waves-effect waves-light btn-floating">
                                            <i class="material-icons right">edit</i>
                                        </button>
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                            </form>
                        <?php
                        }
                        ?>
                    </table>
                    <table>
                        <tr>Coste total en almacen: </tr>
                        <tr>$<?php echo $assets; ?> MXN</tr>
                    </table>
                </div>
            </div>
        </div>

    </main>

    <!-- Fruit-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                Fernando Leon Oropeza | 5A programacion | 07/01/2020
            </div>
        </div>
    </footer>
</body>


</html>