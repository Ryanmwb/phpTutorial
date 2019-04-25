<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body class="">
  <div class="container bg-light round px-5 py-2 mt-3">
    <div class="col-xs-6">
      <h1 class="mb-3 text-center display-2">Login</h1>
      <form action="createUser.php" method="post" class="">
        <div class="form-group">
          <div class="row my-2">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username">
          </div>
          <div class="row my-2">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password" id="password">
          </div>
        </div>
        <button class="btn btn-primary" type="submit" id="submit" name="submit" value="submit">Submit</button>
      </form>
    </div>
  </div>

</body>

</html>