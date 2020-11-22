<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{asset('../assets/css/styles.css')}}">

    <title>Espacio del Developer</title>
</head>

<body>
    <header class="header">
        <a href="#" class="header__logo">Espacio del Developer</a>

        <i class='bx bx-menu header__toggle' id="header-toggle"></i>

        <nav class="nav" id="nav-menu">
            <div class="nav__content bd-grid">
                <a href="" class="nav__perfil">
                    <div class="nav__img">
                        <img src="assets/img/logo.png" alt="Espacio del Developer">
                    </div>

                    <div>
                        <span class="nav__name">Espacio</span>
                        <span class="nav__name">del Developer</span>
                    </div>
                </a>

                <div class="nav__menu">
                    <ul class="nav__list">

                        <li class="nav__item dropdown">
                            <a href={{ url('/about') }} class="nav__link dropdown__link">About <i class='bx bx-chevron-down dropdown__icon'></i></a>


                            <ul class="dropdown__menu">
                                <li class="dropdown__item"><a href="#" class="nav__link">RRHH</a></li>
                                <li class="dropdown__item"><a href="#" class="nav__link">Developers</a></li>
                                <li class="dropdown__item"><a href={{ url('/projects') }} class="nav__link">Projects</a></li>
                            </ul>
                        </li>

                        <!-- <li class="nav__item"><a href="#" class="nav__link">Proyectos </a></li> -->

                        <li class="nav__item dropdown">
                            <a href={{ url('/blog') }} class="nav__link dropdown__link">Blog <i class='bx bx-chevron-down dropdown__icon'></i></a>


                            <ul class="dropdown__menu">
                                <li class="dropdown__item"><a href="#" class="nav__link">Trainees</a></li>
                                <li class="dropdown__item"><a href="#" class="nav__link">Junior</a></li>
                                <!-- <li class="dropdown__item"><a href="#" class="nav__link">Work Awards</a></li> -->
                            </ul>
                        </li>

                        <li class="nav__item"><a href={{ url('/contact-us') }} class="nav__link">Contact us </a></li>
                        <li class="nav__item"><a href={{ url('/login') }} class="nav__link active">Log in </a></li>
                        <li class="nav__item"><a href={{ url('/register') }} class="nav__link active">Register </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--===== MAIN JS =====-->
    <script src="{{asset('../assets/js/main.js')}}"></script>

    @yield('contenido')

    <footer>
        <ul class="list-footer">
            <li><a href={{ url('/about') }}>About</a></li>
            <li><a href={{ url('/blog') }}>Blog</a></li>
            <li><a href={{ url('/projects') }}>Projects</a></li>
            <li><a href={{ url('/contact-us') }}>Contact</a></li>
        </ul>
        <div class="social-media">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <p class="copyrights">&copy; 2020 Espacio del Developer </p>
    </footer>

</body>

</html>

<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>1º Sprint</title> -->

  <!-- Bootstrap core CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

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

      @if (!Auth::check())
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href={{ url('/login') }}>Login</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href={{ url('/register') }}>Register</a>
          </li>
        </ul>
      @endif

      @if (Auth::check())
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#"> {{Auth::user()->name}} </a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href={{ url('/logout') }}>Logout</a>
          </li>
        </ul>
      @endif

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
</html> -->
