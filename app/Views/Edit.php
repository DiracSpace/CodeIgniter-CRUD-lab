<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
</head>
<body>
    <p>Edit Form</p>
    <form method="post" action="/update">
        <div class="form-group">
            <label>ID</label>
            <input type="text" name="id" value="<?php echo $user_obj['id']; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="nombre" value="<?php echo $user_obj['nombre']; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $user_obj['email']; ?>" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit">Update Data</button>
        </div>
    </form>
</body>
</html>