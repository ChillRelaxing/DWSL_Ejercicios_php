<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="app3.php" method="post">
        <table>
            <tr>
                <th>MATEMÁTICAS</th>
                <th>LENGUAJE</th>
                <th>CIENCIAS</th>
                <th>SOCIALES</th>
                <th>MORAL</th>
            </tr>
            <tr>
                <td><input type="number" name="m" value="<?php echo isset($_POST['m']) ? $_POST['m'] : ''; ?>"></td>
                <td><input type="number" name="l" value="<?php echo isset($_POST['l']) ? $_POST['l'] : ''; ?>"></td>
                <td><input type="number" name="c" value="<?php echo isset($_POST['c']) ? $_POST['c'] : ''; ?>"></td>
                <td><input type="number" name="s" value="<?php echo isset($_POST['s']) ? $_POST['s'] : ''; ?>"></td>
                <td><input type="number" name="mo" value="<?php echo isset($_POST['mo']) ? $_POST['mo'] : ''; ?>"></td>
            </tr>
        </table>
        <input type="submit" name="promediar" value="Promediar">
        <input type="submit" name="limpiar" value="Limpiar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (isset($_POST['promediar'])) {
            $matematica= isset($_POST['m']) ? $_POST['m' ]:"";
            $lenguaje=isset($_POST['l']) ? $_POST['l' ]:"";
            $ciencia=isset($_POST['c']) ? $_POST['c' ]:"";
            $moral=isset($_POST['mo']) ? $_POST['mo' ]:"";
            $sociales=isset($_POST['s']) ? $_POST['s' ]:"";

            $promedio = ($matematica+$lenguaje+$ciencia+ $moral+$sociales)/5;
            echo "El promedio del estudiante es: ".$promedio;
        }

        if (isset($_POST['limpiar'])) {
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }
    }
    ?>
</body>
</html>



