<?php
$enllac = mysqli_connect("database:3306", "root", "tiger", "empleados");

if (!$enllac){
    echo "Error a la connexió: " . mysqli_connect_error();
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $identificador = $_GET['id'];

    $consulta_eliminacio = "DELETE FROM dades WHERE id=$identificador";

    if (!mysqli_query($enllac,$consulta_eliminacio)){
        ?>
        Error en l'eliminació del registre
        <?php
    }else{
        ?>
        Eliminació realitzada <a href="..">Torna al index</a>
        <?php
    }
    ?>
</body>
</html>