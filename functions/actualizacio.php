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
if (isset($_GET['id'])) {
    $identificador = $_GET['id'];
    
    $consulta_actualitzacio = "UPDATE dades SET nom = '" . $_POST['nom'] . "',
                                            cognom1 = '" . $_POST['cognom1'] . "',
                                            cognom2 = '" . $_POST['cognom2'] . "',
                                            correu = '" . $_POST['correu'] . "',
                                            dni = '" . $_POST['dni'] . "'
                                            WHERE id= $identificador";

    if (!mysqli_query($enllac,$consulta_actualitzacio))
    {
        ?>
        Error al actualitzar-se
        <?php
    } else {
        ?>
        Actualizació realitzada <a href="..">Torna al index</a>
        <?php
    }
} else {
    echo "El parámetro 'id' no está definido en la URL.";
}
?>
</body>
</html>
