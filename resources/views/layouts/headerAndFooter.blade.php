<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>1º Sprint</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <style>
  html, body {
    background-color: #504e4e;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
  }

  .rainbow {
    background: red;
    background: -webkit-linear-gradient(left, orange , yellow, green, cyan, blue, violet);
    background: -o-linear-gradient(right, orange, yellow, green, cyan, blue, violet);
    background: -moz-linear-gradient(right, orange, yellow, green, cyan, blue, violet);
    background: linear-gradient(to right, orange , yellow, green, cyan, blue, violet);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 70px;
    text-align: center;
    padding-top: 200px;
  }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/">Espacio del Developer</a>

      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

        <li class="nav-item active">
          <a class="nav-link" href={{ url('/about') }}>About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href={{ url('/blog') }}>Blog</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href={{ url('/contact-us') }}>Contact Us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href={{ url('/projects') }}>Projects</a>
        </li>

      </ul>

      <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href={{ url('/login') }}>Login</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href={{ url('/register') }}>Register</a>
        </li>
      </ul>

    </div>
  </nav>

@yield('contenido')

<footer style="bottom: 0;
                width: 100%;
                height: 4.5rem;">
  <div class="card-footer text-muted position-absolute">
    <div class="row">
      <div class="col d-sm-12">
        <a href="#"><i class="fab fa-digital-ocean"></i></a>
        <a class="textDH " href="#"> Espacio del Developer </a>
        <a class="logo" href="#"><i class="fab fa-facebook-square "></i></a>
        <a class= "logo" href="#"><i class="fab fa-instagram "></i></a>
      </div>
    <div class="columna text-small">
      <p>2020 Espacio del Developer </p>
    </div>
  </div>
 </footer>
</body>
</html>
