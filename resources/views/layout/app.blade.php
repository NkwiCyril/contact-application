<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>My Contact</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  <!-- Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">
</head>
<style>
  .auth-wrapper {
    min-height: 92vh;
  }

  .auth-wrapper h1 {
    font-size: 1.5em;
    font-weight: 700;
    color: #6c757d;
    letter-spacing: 1px;
    text-align: center;
    text-transform: uppercase;
  }

  .auth-wrapper .form-label {
    color: #6c757d;
  }
</style>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand text-uppercase" href="{{route('welcome')}}">
        <strong>Contact</strong> App
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- /.navbar-header -->
      <div class="collapse navbar-collapse" id="navbar-toggler">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-2"><a href="/login" class="btn btn-outline-secondary">Login</a></li>
          <li class="nav-item"><a href="/register" class="btn btn-outline-primary">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>