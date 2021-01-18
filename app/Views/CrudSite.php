<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style type="text/css">
    ul {
        list-style-type: none;
    }
    </style>
</head>
<body>
    <p>Operaciones CRUD</p>
    <a href="/operations/register">Registrar usuario</a>
    <ul>
    <?php foreach ($usuarios as $usuario): ?>
        <li><a href="<?php echo $usuario['id']; ?>"><?php echo $usuario['nombre']; ?></a></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>