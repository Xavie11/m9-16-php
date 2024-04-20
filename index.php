<?php
$link = mysqli_connect("database:3306", "root", "tiger", "empleados");

if (!$link){
    echo"Error a la connexió" . mysqli_connect_error();
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="functions/formulari.php">Formulari</a></li>
    </ul>
</nav>
    <table border="1">
            <tr><td>ID</td><td>Nom</td><td>Cognom1</td><td>Cognom2</td><td>DNI</td><td>Correu</td><td>Acció</td></tr>
            <?php
                $resultat = mysqli_query($link, "SELECT * FROM dades");
                while ( $registre = mysqli_fetch_array($resultat) ){
                    echo"<tr>";
                    echo"<td>" . $registre["id"] . "</td>";
                    echo"<td>" . $registre["nom"] . "</td>";
                    echo"<td>" . $registre["cognom1"] . "</td>";
                    echo"<td>" . $registre["cognom2"] . "</td>";
                    echo"<td>" . $registre["dni"] . "</td>";
                    echo"<td>" . $registre["correu"] . "</td>";
                    $linkactualizacio = "functions/formulariactualizacio.php?id=" . $registre['id'];
                    $linkeliminacio = "functions/eliminacio.php?id=" . $registre['id'];
                    echo "<td><a href=\"$linkactualizacio\">Actualitzar</a> / <a href=\"$linkeliminacio\">Eliminar</a></td>";
                    echo "</tr>";
                }
            ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>
