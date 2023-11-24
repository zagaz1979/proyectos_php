<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de archivos</title>
</head>
<body>
    <h3>Subir archivos con php</h3>
    <form action="046_carga.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fichero" accept=".jpg, .jpeg, .png">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>