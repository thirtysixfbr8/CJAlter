@extends('layouts.auth')
@section('content')
  <div class="wrapper" id="app">
    <div class="header header-filter" style="background-image: url('{{ asset('assets/images/login-bg.jpg') }}'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
              <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="header header-primary text-center">
                  <h4>Entrar com:</h4>
                  <div class="social-line">
                    <a href="javascript:void(0);" class="btn btn-just-icon">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a  href="javascript:void(0);" class="btn btn-just-icon">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="javascript:void(0);" class="btn btn-just-icon">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div>
                </div>
                <h3 class="mt-0">CJA</h3>
                <p class="help-block">Mediadores de Seguros</p>
                <div class="content">
                  <div class="form-group">
                    <input id="email" 
                    class="form-control underline-input @error('email') is-invalid @enderror" 
                    type="email" 
                    name="email" value="{{ old('email') }}"
                    required 
                    autocomplete="email" 
                    autofocus 
                    placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input 
                    id="password" 
                    placeholder="Password" 
                    type="password" 
                    class="form-control underline-input @error('password') is-invalid @enderror" 
                    name="password" 
                    required 
                    autocomplete="current-password">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input 
                      type="checkbox" 
                      name="optionsCheckboxes" 
                      type="checkbox" 
                      name="remember" 
                      id="remember" 
                      {{ old('remember') ? 'checked' : '' }}> Remember me</label>
                  </div>
                </div>
                <div class="footer text-center">
                  <button type="submit" class="btn btn-info btn-raised">Entrar</button>
                </div>
                @if (Route::has('password.request'))
                    <button class="btn btn-wd" href="{{ route('password.request') }}">
                        {{ __('Esqueceu a sua password?') }}
                    </button>
                @endif
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer mt-20">
        <div class="container">
          <div class="col-lg-12 text-center">
            <a href="{{ route('register') }}" class="text-uppercase text-white">Criar uma Conta</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  @stop