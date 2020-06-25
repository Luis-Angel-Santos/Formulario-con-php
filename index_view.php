<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario de Contacto</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre:">

            <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo">

            <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control" placeholder="Mensaje:"></textarea>

            <input type="submit" value="Enviar Correo" class="btn btn-primary" name="submmit">
        </form>
    </div>
</body>
</html>