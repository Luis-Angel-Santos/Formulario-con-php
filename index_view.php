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
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">

            <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo" value="<?php if(!$enviado && isset($correo)) echo $nombre ?>">

            <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control" placeholder="Mensaje:" ><?php if(!$enviado && isset($nombre)) echo $nombre ?></textarea>

            <?php if (!empty($errores)): ?>
                <div class="alert success">
                    <?php echo $errores; ?>
                </div>
            <?php elseif($enviado): ?>
                <div class="alert success">
                    <p>Enviado Correctamente</p>
                </div>
            <?php endif ?>

            <input type="submit" value="Enviar Correo" class="btn btn-primary" name="submit">
        </form>
    </div>
</body>
</html>