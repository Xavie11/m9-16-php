<!DOCTYPE html>
<html lang="es">
<title>Resultat inserció de dades</title>
<head>
</head>
    <body>
    <?php
if (!isset($_POST['correu'])) {
    echo "The 'correu' field is not set in the form.";
    exit;
}

$enllac = mysqli_connect("database:3306", "root", "tiger", "empleados");

if (!$enllac) {
    echo "Error a la connexió: " . mysqli_connect_error();
    exit;
}

$id = isset($_POST['id']) ? $_POST['id'] : ''; // Si 'id' está definido en $_POST, asigna su valor a $id; de lo contrario, asigna una cadena vacía.
$nom = $_POST['nom'];
$cognom1 = $_POST['cognom1'];
$cognom2 = $_POST['cognom2'];
$correu = $_POST['correu'];
$dni = $_POST['dni'];

if (!preg_match('/^\d{8}[a-zA-Z]$/', $dni)) {
    echo "El format del DNI no és correcte.";
    exit;
}

if (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
    echo "El formato del correo electrónico no es válido.";
    exit;
}

$insercio_sql = "INSERT INTO dades (nom, cognom1, cognom2, correu, dni) VALUES ('$nom', '$cognom1', '$cognom2', '$correu', '$dni')";


$resultat = mysqli_query($enllac, $insercio_sql);

if (!$resultat) {
    echo "Inserció de dades INCORRECTAMENT realitzada";
} else {
    echo "Inserció de dades CORRECTAMENT realitzada <a href=\"../index.php\">Torna al index</a>";
}
?>


</body>
</html>