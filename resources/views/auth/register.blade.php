<!DOCTYPE html>
<html lang="en">
<head>
	<title>FerreiraAuto</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	  <!-- Favicons -->
	  <link href="img/favicon.png" rel="icon">
	  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
						<center><img src="img/logo2.png" alt="" title="" width="100%"/></img></center>
						<br>
						<br>
                    @csrf
					<div class="wrap-input100 validate-input @error('name') is-invalid @enderror" data-validate = "Insira o username" required autocomplete="name" autofocus>
						<input class="input100" type="text" name="name" placeholder="Nome" id="input_user"  value="{{ old('name') }}">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@error('name')
								<span class="invalid-feedback" role="alert">
										<p style="color: #ff0000;">{{ $message }}</p>
								</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input @error('email') is-invalid @enderror" data-validate = "Insira o email">
						<input class="input100" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@error('email')
							<span class="invalid-feedback" role="alert">
									<p style="color: #ff0000;">{{ $message }}</p>
							</span>
						@enderror
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Insira a password">
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						@error('password')
							<span class="invalid-feedback" role="alert">
									<p style="color: #ff0000;">{{ $message }}</p>
							</span>
            @enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Insira a password">
						<input class="input100" type="password" name="password_confirmation" placeholder="Confirmar Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>					
					</div>

					
					<div class="contact100-form-checkbox">
						<a href="/login" class="label" style="text-decoration: none;color: white;">
							Já tem conta? Entre aqui!
						</a>
					</div>

					
					<div class="container-login100-form-btn">
							<a class="login100-form-btn" href="/" style="margin-right: 30px;text-decoration: none;">
								Back
							</a>	
						<button class="login100-form-btn" type="submit">
							Registar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

</body>
</html>