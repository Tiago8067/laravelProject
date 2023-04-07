<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('user-assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('user-assets/plugins/icheck-bootstrap/icheck.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('user-assets/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Ges</b>faturação</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Bem-vindo ao GESFaturação</p>
                @if (Session::has('failure'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('failure') }}
                    </div>
                @endif
                <!---Sign in to start your session-->
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <!-- @method('post') -->
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email"
                            value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                        <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                    @enderror
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                        <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-8">

                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('user-assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('user-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('user-assets/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
