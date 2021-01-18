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

    .deleteusr {
        margin-top: 5%;
        margin-bottom: 5%;
    }
    </style>
</head>
<body>
    <p>Operaciones CRUD</p>
    <a href="/operations/register">Registrar usuario</a>
    <form class="deleteusr" method="get" action="/delete">
        <div class="form-group">
            <label>ID</label>
            <input type="text" name="id" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" style="margin-top: 3%;">Delete user</button>
        </div>
    </form>
    <ul>
    <?php foreach ($usuarios as $usuario): ?>
        <li><a onclick="deleteUser(<?php echo $usuario['id']; ?>);"><?php echo $usuario['nombre']; ?></a></li>
    <?php endforeach; ?>
    </ul>
    <script type="text/javascript">
        const deleteUser = async (id) => {
            console.log(id);
            window.location.replace("edit/" + id);
        }
    </script>
</body>
</html>