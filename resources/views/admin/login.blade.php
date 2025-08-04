<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel Shop :: Administrative Panel</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
		<link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
	</head>
	<body class="hold-transition login-page">
		<div class="login-box" style="width: 400px !important;">

			<div class="card card-outline card-primary">
			  	<div class="card-header text-center">
					<a href="#" class="h3">Admin Panel</a>
			  	</div>
			  	<div class="card-body">
                    @if (Session::has('message'))
                        <p class="alert alert-warning">{{ Session::get('message') }}
                    @endif

                     @if (Session::has('error'))
                        <p class="alert alert-warning">{{ Session::get('error') }}
                    @endif
					<form  method="post" action="{{ route('admin.authenticate') }}">
                        @csrf
				  		<div class="input-group mb-3">
							<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
							<div class="input-group-append">
					  			<div class="input-group-text">
									<span class="fas fa-envelope"></span>
					  			</div>
							</div>

                            @error('email')
                              <div class="invalid-feedback">{{ $message }} </div>
                            @enderror
				  		</div>
				  		<div class="input-group mb-3">
							<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
							<div class="input-group-append">
					  			<div class="input-group-text">
									<span class="fas fa-lock"></span>
					  			</div>
							</div>
                            @error('password')
                              <div class="invalid-feedback">{{ $message }} </div>
                            @enderror
				  		</div>
				  		<div class="row">
							<div class="col-4">
					  			<button type="submit" class="btn btn-primary btn-block">Login</button>
							</div>
				  		</div>
					</form>

			  	</div>
			</div>
		</div>
		<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('admin/js/adminlte.min.js') }}"></script>
		<script src="{{ asset('admin/js/demo.js') }}"></script>
	</body>
</html>
