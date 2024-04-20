<?php
    $enllac = mysqli_connect("database:3306", "root", "tiger", "empleados");

    if (!$enllac){
        echo "Error a la connexió" . mysqli_connect_error();
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="../index.php">Index</a></li>
    </ul>
</nav>
    <?php
    $identificador = $_GET['id'];

    $resultat = mysqli_query($enllac, "SELECT * FROM dades WHERE id=$identificador");

    $registre = mysqli_fetch_array($resultat);
    ?>
    <form method="post" action="actualizacio.php?id=<?php echo $identificador ?>">
    <table border="1">
        <tr><td colspan="2">Formulari d'actulització</td></tr>
        <tr>
            <td>Nom</td><td><input type="text" name="nom" value="<?php echo $registre['nom']?>" /></td>
        </tr>
        <tr>
            <td>Primer Cognom</td><td><input type="text" name="cognom1" value="<?php echo $registre['cognom1']?>" /></td>
        </tr>
        <tr>
            <td>Segon Cognom</td><td><input type="text" name="cognom2" value="<?php echo $registre['cognom2']?>" /></td>
        </tr>
        <tr>
            <td>Correu</td><td><input type="text" name="correu" value="<?php echo $registre['correu']?>" /></td>
        </tr>
        <tr>
            <td>DNI</td><td><input type="text" name="dni" value="<?php echo $registre['dni']?>" /></td>
        </tr>
        <tr>
            <td colspan="1"><input type="submit" value="Actualitzar" /></td>
        </tr>
    </table>
    </form>
</body>
</html>
