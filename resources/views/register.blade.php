
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
   <div class="container">
     <form class="form-signin" method="POST" action="{{route('register') }}">
       {{csrf_field()}}
      
      <h1 class="h3 mb-3 font-weight-normal">Register</h1>
       <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" name="email" id="inputName" class="form-control" placeholder="masukan nama anda" required autofocus>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    

   <!--    <label for="inputPassword" class="sr-only">Password</label>
      <input type="password_confirmation" name="password" id="inputPassword" class="form-control" placeholder="Password Confirmation" required> -->


      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      <p class="mt-5 mb-3 text-muted">&copy; aksara.com</p>
    </form>
   </div>
  </body>
</html>
