@extends('layouts.headerAndFooter')

@section('contenido')

<h1 style="color:black; text-align: center;">Registrar nuevo developer</h1>

<div class="l-form">
    <form method="POST" class="form" action="{{ route('register') }}">
      @csrf
        <h1 class="form__title">Registro</h1>

        <input type="hidden" name="role_id" id="role_id" value="1">

        <div class="form__div">
            {{-- <input type="text" class="form__input" placeholder=" "> --}}
            <div>
                    <input id="name" type="text" class="form__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            <label for="" class="form__label">Nombre</label>
          </div>
        </div>

        <div class="form__div">
            {{-- <input type="text" class="form__input" placeholder=" "> --}}
            <div>
                <input id="lastName" type="text" class="form__input @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                @error('lastName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="" class="form__label">Apellido</label>
            </div>
        </div>

        <div class="form__div">
            {{-- <input type="email" class="form__input" placeholder=" "> --}}
            <div>
                <input id="email" type="email" class="form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="" class="form__label">E-mail</label>
              </div>
        </div>

        <div class="form__div">
            {{-- <input type="password" class="form__input" placeholder=" "> --}}
            <div>
                <input id="password" type="password" class="form__input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="" class="form__label">Contraseña</label>
            </div>
        </div>

        <div class="form__div">
            {{-- <input type="password" class="form__input" placeholder=" "> --}}
            <div>
                <input id="password-confirm" type="password" class="form__input" name="password_confirmation" required autocomplete="new-password">
                <label for="" class="form__label">Repita Contraseña</label>
            </div>
        </div>


        <input type="submit" class="form__button" value="Registrarme">
        <input type="submit" class="form__button" value="Volver">
    </form>
</div>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
