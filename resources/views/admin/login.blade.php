<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Shop :: Administrative Panel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/fonts/clash-display/css/clash-display.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
</head>

<body class="hold-transition login-page consultationsSection pad80">

    <div class="loginTitle">
        <h1>Admin Panel</h1>
        <p class="f18">Enter your credential to access your account</p>
    </div>
    <form method="post" action="{{ route('admin.authenticate') }}" class="book_sessions_form">
        @if (Session::has('message'))
            <p class="alert alert-warning">{{ Session::get('message') }}
        @endif

        @if (Session::has('error'))
            <p class="alert alert-warning">{{ Session::get('error') }}
        @endif
        @csrf
        <div class="inputbox">
            <label for="emailAddress">Email Address*</label>
            <input type="email" id="emailAddress" name="email" class=" @error('email') is-invalid @enderror"
                placeholder="Enter your Email">
            @error('email')
                <div class="invalid-feedback">{{ $message }} </div>
            @enderror
        </div>
        <div class="inputbox">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class=" @error('password') is-invalid @enderror"
                placeholder="Password">
            @error('password')
                <div class="invalid-feedback">{{ $message }} </div>
            @enderror
        </div>
        <button type="submit" class="button"><span>Login</span></button>
    </form>

    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('admin/js/demo.js') }}"></script>
</body>

</html>
