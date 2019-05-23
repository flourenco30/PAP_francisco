<!DOCTYPE html>
<html lang="en">
<head>
	<title>FerreiraAuto</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	  <!-- Favicons -->
	  <link href="img/favicon.png" rel="icon">
	  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/bg-01.jpg');">
			<div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
						<center><img src="img/logo2.png" alt="" title="" width="100%"/></img></center>
						<br>
						<br>

					<div class="wrap-input100 validate-input @error('email') is-invalid @enderror" data-validate = "Enter email" required>
						<input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@error('email')
							<span class="invalid-feedback" role="alert">
									<p style="color: #ff0000;font-size=10%;">{{ $message }}</p>
							</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input @error('password') is-invalid @enderror" data-validate="Enter password" required>
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						@error('password')
							<span class="invalid-feedback" role="alert">
									<p style="color: #ff0000;font-size=10%;">{{ $message }}</p>
							</span>
						@enderror
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" {{ old('remember') ? 'checked' : '' }}>
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
          </button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

</body>
</html>