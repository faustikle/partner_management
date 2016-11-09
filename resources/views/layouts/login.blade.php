<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gerenciador de Sócios | Login</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('dist/css/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('dist/css/font-awesome/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/ionicons/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/iCheck/square/blue.css')}}">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo"><b>Gerenciador de</b> Sócios</div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Entre com e-mail e senha</p>
        @yield('content')
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('dist/js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>

