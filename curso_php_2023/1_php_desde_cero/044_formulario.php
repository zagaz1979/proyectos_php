<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="044_index.php" method="POST">

        <label for="asignatura">Asignatura</label>
        <select name="asignatura[]" id="asignatura" multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matemáticas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
    
        <br><br>
    
        <label for="opcion-1">
            <input type="checkbox" value="Manzana" name="frutas[]" id="opcion-1">
            Manzana
        </label>
    
        <label for="opcion-2">
            <input type="checkbox" value="Pera" name="frutas[]" id="opcion-2">
            Pera
        </label>
    
        <label for="opcion-3">
            <input type="checkbox" value="Mango" name="frutas[]" id="opcion-3">
            Mango
        </label>
    
        <br><br><br>
    
        <button type="submit">Enviar</button>
    </form>
</body>
</html>