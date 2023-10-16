<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de personas</title>

    <style>
        table {
            border: 1px solid black;    
        }

        input {
            width: 150px;
        }

    </style>

</head>
<body>
    <h1>Datos de personas</h1>

    <form action="datos.php" method="post">

        <table>
    
            <thead>
                <tr>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Direción</th>
                    <th>Teléfono</th>    
                </tr>
            </thead>
    
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="cedula" id="cedula">
                    </td>
                    <td>
                        <input type="text" name="nombre" id="nombre">
                    </td>
                    <td>
                        <input type="text" name="apellidos" id="apellidos">
                    </td>
                    <td>
                        <input type="text" name="direccion" id="direccion">
                    </td>
                    <td>
                        <input type="text" name="telefono" id="telefono">
                    </td>
                </tr>
            </tbody>
    
        </table>
    
        <br>
        <input type="submit" value="Guardar">
        <input type="submit" value="Mostrar información">
        
    </form>


</body>
</html>