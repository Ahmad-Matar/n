<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
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
            @foreach($users as $user)
                <tr>
                    <td><a href={{ url("/users/show/".$user->id)}}>{{$user->name}} </a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                     <a class="btn btn-warning" href={{ url("/users/".$user->id."/edit") }} role="button">edit</a>
                    <form action="/users" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{$user->id}}">

                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>


                    </td>

                </tr>

            @endforeach

        </tbody>
    </table>
    </div>
</body>
</html>