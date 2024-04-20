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
    <form method="post" action="insercio.php">
        <table border="1">
            <tr><td colspan="2"> Formluario d'insercio de dades</td></tr>
            <tr>
                <td>Nom</td><td><input type="text" name="nom" /></td>
            </tr>
            <tr>
                <td>Primer Cognom</td><td><input type="text" name="cognom1" /></td>
            </tr>
            <tr>
                <td>Segon Cognom</td><td><input type="text" name="cognom2" /></td>
            </tr>
            <tr>
                <td>Correu</td><td><input type="text" name="correu" /></td>
            </tr>
            <tr>
                <td>DNI</td><td><input type="text" name="dni" /></td>
            </tr>
            <tr>
                <td colspan="1"><input type="submit" value="Enviar" /></td>
            </tr>
        </table>
    </form>
</body>
</html>