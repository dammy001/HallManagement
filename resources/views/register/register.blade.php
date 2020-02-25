@extends('layouts.app')
@section('title', 'myHall | Register')
@section('content')
<br><br><br><br><br><br><br>

<div class="listing_container">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Image -->


					<!-- Tabs -->


					<!-- About -->
					<div class="about">
						<div class="row">
							<div class="col-lg-6">
								<div class="listing_features">
									<div class="listing_title"><h3 style="font-color: #55407d">List Your Venue</h3></div><hr>
                                    <div class="listing_title"><h5 style="font-color: #55407d">Sign-Up As A Vendor</h5></div><br>

                                    @if($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
										<div style="border-radius: 10px; background-color: #ccc">
                                        <form method="POST" action="{{ route('register.store') }}">
                                            @csrf
                                                <br>

                                                <div class="form-group row">
                                                        <label style="font-size: 16px; margin-left:20px;"> &nbsp;Hall Name</label>
                                                        <div class="col-md-12">
                                                            <input id="hallname" type="text" class="form-control @error('hallname') is-invalid @enderror" name="hallname" value="{{ old('hallname') }}" required autocomplete="hallname" autofocus>

                                                            @error('hallname')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">

                                                            <label style="font-size: 16px; margin-left:20px;"> &nbsp;Full Name</label>
                                                            <div class="col-md-12">
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

											<div class="row">

                                                    <div class="col-md-6">
                                                            <label style="font-size: 16px"> &nbsp;Contact</label>
                                                            <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact">

                                                            @error('contact')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                    <div class="col-md-6">
                                                            <label style="font-size: 16px">Email </label>
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
											</div><br>
											<div class="row">
                                                        <div class="col-md-6">
                                                            <label style="font-size: 16px"> &nbsp;Password</label>
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <br>
                                                    <div class="col-md-6">
                                                            <label style="font-size: 16px">Confirm Password </label>
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                        </div>
											</div>
                                                <br><br>
                                                <button type="submit" style="float: left; color: white; font-size: 18px; background-color: #55407d" class="btn">Sign Up</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="listing_video">
									<div class="listing_title"><h3>FAQs</h3></div><hr>

										<div class="panel panel-primary">
  										<div class="panel-heading">Questions And Answers</div>
 										<div class="panel-body">
 											<table class="table">

    <tbody>
      <tr class="info">
        <td><b>Q: Is it free to list a venue?</b></td>
      </tr>
      <tr class="success">
        <td>A: Yes, listing any venue on ogaVenue is totally free</td>
      </tr>
      <tr class="info">
        <td><b>Q: Can I list a venue that is not mine?</b></td>
      </tr>
      <tr class="success">
        <td>A: Yes, you can list any venue but with the correct information</td>
      </tr>
      <tr class="info">
        <td><b>Q: Can I add more than one venue?</b></td>
      </tr>
      <tr class="success">
        <td>A: Yes, you can add as many venues as you like, as long as you have the correct information about the venues</td>
    </tr>
    </tbody>
  </table>
 										</div>
										</div>

								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
