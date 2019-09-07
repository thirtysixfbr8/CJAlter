@extends('layouts.auth')
@section('content')
    <!-- Application Content -->
    <div class="wrapper" id="app">
      <div class="header header-filter" style="background-image: url('{{ asset('assets/images/login-bg.jpg') }}'); background-size: cover; background-position: top center;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 text-center">
              <div class="card card-signup">
                <form class="form" method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="header header-primary text-center">
                    <h4>Sign Up
                    </h4>
                    <div class="social-line">
                      <a href="#" class="btn btn-just-icon">
                        <i class="fa fa-facebook-square">
                        </i>
                      </a>
                      <a href="#" class="btn btn-just-icon">
                        <i class="fa fa-twitter">
                        </i>
                      </a>
                      <a href="#" class="btn btn-just-icon">
                        <i class="fa fa-google-plus">
                        </i>
                      </a>
                    </div>
                  </div>
                  <h3 class="mt-0">Falcon
                  </h3>
                  <p class="help-block">Enter your personal details below:
                  </p>
                  <div class="content">
                    <div class="form-group">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name" >
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}
                        </strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input id="email" type="email" class="form-control underline-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email">
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}
                        </strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input id="telemovel" type="telemovel" class="form-control underline-input @error('telemovel') is-invalid @enderror" name="telemovel" value="{{ old('telemovel') }}" required autocomplete="telemovel" placeholder="Telemovel">
                      @error('telemovel')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}
                        </strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <select name="perfilId" class="form-control mb-10" data-parsley-trigger="change" required>
                        @foreach($perfils as $perfil)
                          <option value="{{$perfil['perfilId']}}">{{$perfil['perfil']}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <input id="password" placeholder="Password..." type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}
                        </strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input id="password-confirm" placeholder="Confirmar Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="optionsCheckboxes" checked> I agree to the
                        <a href="javascript:;">Terms of Service
                        </a> &amp;
                        <a href="javascript:;">Privacy Policy
                        </a>
                      </label>
                    </div>
                  </div>
                  <div class="footer text-center mb-20">
                    <button type="submit" class="btn btn-info btn-raised">Submit
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center mt-20">
                <a href="login.html" class="text-uppercase text-white">Back
                </a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!--/ Application Content -->
    @stop
