<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href=<?php echo asset('css/bootstrap.css')?>>
</head>
<body>
    <div class="container">
    <h1 class="mb-3">users</h1>
    <a class="btn btn-primary" href="/users/create" role="button">create</a>
    <table class="table">
        <thead>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>created_at</th>
            <th>action</th>

        </thead>
        <tbody>
            <?php foreach($users as $user) { ?>
                <tr>
                    <td><a href=<?php echo '/users/show/'.$user->id ?>><?php echo $user->name ?></a></td>
                    <td><?php echo $user->email ?></td>
                    <td><?php echo $user->password ?></td>
                    <td><?php echo $user->created_at ?></td>
                    <td>
                    <a class="btn btn-warning" href=<?php echo "/users/".$user->id."/edit" ?> role="button">edit</a>
                    <a class="btn btn-danger" href="/users" role="button">delete</a>


                    </td>

                </tr>

            <?php } ?>

        </tbody>
    </table>
    </div>
</body>
</html>