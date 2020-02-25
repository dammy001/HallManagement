@extends('layouts.app')
@section('title', 'myHall | Login')
@section('content')
<br><br><br><br><br><br>
<div class="listing_container">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Image -->


					<!-- Tabs -->


					<!-- About -->
					<div class="about">
						<div class="row">
							<div class="col-lg-2"></div>
							<div class="col-lg-8">
								<div class="listing_features">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                <form class="user" method="POST" action="{{route('admin.login')}}">
                    @csrf
                        <div class="form-group row">
                                <label for="email" class="col-md-1 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-1 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #55407d; color: white; border:none;">
                            {{ __('Login') }}
                        </button>
                    <hr>
                    <div class="text-center">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link small" style="font-size: 14px; color: #55407d" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                  </div>
                  <div class="text-center">
                  <a style="font-size: 14px; color: #55407d" href="{{route('register')}}">List your hall and be a Vendor!</a>
                  </div>
                  </form>

                </div>

              <div class="col-lg-2"></div>

								</div>
							</div>
							<div class="col-lg-2">
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>




@endsection
