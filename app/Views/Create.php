<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new user</title>
</head>
<body>
    <p>Create Form</p>
    <form method="post" action="/operations/create">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="nombre" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit">Update Data</button>
      </div>
    </form>
</body>
</html>