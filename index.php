<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Contact Form</title>
</head>
<body>
    <form class="contact_form" action="ControladorU.php" method="post">
        <Ul>
            <li>
                <h2>
                    Formulario de registro
                </h2>
            </li>
            <li>
                <label for="ID">ID:</label>
                <input type="text" name="ID" placeholder="ID" required />
            </li>
            <li>
                <label for="Nombre">Nombre:</label>
                <input type="text" name="Nombre" placeholder="Nombre" required />
            </li>
            <li>
                <label for="Apellido">Apellido:</label>
                <input type="text" name="Apellido" placeholder="Apellido" required />
            </li>
            <li>
                <label for="Genero">Genero:</label>
                <input type="text" name="Genero" placeholder="Genero" required />
            </li>
            <li>
                <label for="User">User:</label>
                <input type="text" name="User" placeholder="User" required />
            </li>
            <li>
                <label for="Contraseña">Contraseña:</label>
                <input type="text" name="Contraseña" placeholder="Contraseña" required />
            </li>
            <li>
                <button class="submit" type="submit" name="anexar">Anexar</button>
                <button class="submit" type="submit" name="actualizar">Actualizar</button>
                <button class="submit" type="submit" name="listar">Listar</button>
                <button class="submit" type="submit" name="borrar">Borrar</button>
            </li>
        </Ul>
    </form>
</body>
</html>