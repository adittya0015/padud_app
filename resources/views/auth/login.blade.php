@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Login untuk memulai sesi</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="form-group mb-3">
                          <label class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                                <input id="username" type="text" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                            </label>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                        <div class="form-group mb-3">
                                <label class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    </label>
                             

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row">
                                <div class="col-8">
                                  <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                      Remember Me
                                    </label>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                  <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
                                </div>
                                <!-- /.col -->
                              </div>
            </form>
    </div>
</div>
@endsection

