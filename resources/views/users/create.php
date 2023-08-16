<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=<?php echo asset('css/bootstrap.css')?>>

</head>
<body>
    <div class="container">

    <h1>create user</h1>
    <form action="/users" method="post">
        <input type="hidden" name="_token" value=<?php echo csrf_token(); ?>>
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" name="username" id="username" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">username</small>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">email</small>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">password</small>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">confirm_password</label>
          <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">confirm_password</small>
        </div>

        <button type="submit" class="btn btn-primary">save</button>
    </form>
    </div>
</body>
</html>