
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

</head>
<body>
    <div class="container">
      @if($errors->any())
          @foreach($errors->all() as $error)
            <li class="alert alert-danger"> {{$error}} </li>

          @endforeach
      @endif
    <h1>create user</h1>
    <form action="/users" method="post">
        @csrf

        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" name="username" id="username" class="form-control" placeholder="" aria-describedby="helpId" >
          <small id="helpId" class="text-muted">username</small>
          @errors->has('username')
            <p class="invalid-feedback">{{}}</p>
          @enderrors
        </div>
        bac

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
          <input type="password" name="password_confirmation" id="confirm_password" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">confirm_password</small>
        </div>

        <button type="submit" class="btn btn-primary">save</button>
    </form>
    </div>
</body>
</html>