@extends('layouts.headerAndFooter')
@section('contenido')

  @if (Session::has('usuarioRegistrado'))
     <h1 class="alert alert-info" style="color:black; text-align: center;">{{ Session::get('usuarioRegistrado') }}</h1>
  @endif

  @if (Session::has('loggedOut'))
     <h1 class="alert alert-info" style="color:red; text-align: center;">{{ Session::get('loggedOut') }}</h1>
  @endif

  <h1 class="rainbow">This is the home page!</h1>

@endsection
