<!doctype html>
<html lang="id">
  <head>
    <link rel="shortcut icon" type="image/png" href="{{ asset('dist/favicon.png') }}"/>
    <title>Alia Islamic School | Sistem Informasi</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	</head>
	<body style="background-color: var(--main-color)">
	{{-- <section class="ftco-section"> --}}
		<div style="width: 100%; height: 100vh; position: fixed; display: flex; align-items: center; justify-content: center;">
				<div style="width: 56%;">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url({{ asset('dist/img/sekolah.png') }});">
			        </div>
					<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 style="margin-bottom: -0.4rem; margin-top: 100px">Alia Islamic School</h3>
                            <h7 style="font-size: 9px; margin-bottom: 32px;">Build Young People With Faith And Noble Character</h7>
			      		</div>							
			      	</div>

					<form method="POST" action="{{ route('login') }}" class="signin-form">
						@csrf

			      		<div class="form-group mb-1 mt-3">
			      			<label class="label" for="nik">NIK:</label>
			      			<div class="input-group">
								<div class="input-group-append">
									<div class="input-group-text">
         	  		                    <span><img class="icon" src="{{ asset('dist/img/user@2x.jpg') }}" alt=""></span>
									</div>
								</div>
                                <input id="nik" name="nik" type="text" class="form-control" style="background-color: transparent; border-left-width: 0;" :value="old('nik')" required autofocus>
                            </div>  
			      		</div>
		                <div class="form-group mb-4">
		                	<label class="label" for="password">Sandi:</label>
							<div class="input-group">
								<div class="input-group-append">
									<div class="input-group-text">
										<span><img class="icon" src="{{ asset('dist/img/lock@2x.jpg') }}" alt=""></span>
									</div>
								</div>
                                <input id="password" name="password" type="password" class="form-control" style="background-color: transparent; border-left-width: 0;" required autocomplete="current-password">
                            </div>
		                </div>

						<div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">{{ __('Masuk') }}</button>
                        </div>

						<div class="w-100 text-md-left" style="margin-top: 4rem">
							<h6>Hubungi Admin apabila lupa Sandi</h6>
						</div>
                    </form>
						
		        </div>
			
		</div>
	{{-- </section> --}}

	<script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>

