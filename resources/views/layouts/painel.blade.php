<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gerenciador de Sócios</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="{{asset('dist/css/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('dist/css/font-awesome/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/ionicons/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

  <link rel="stylesheet" href="{{asset('dist/css/jquery.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/dataTables.bootstrap.min.css')}}">

 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route('painel.index')  }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">PL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Painel</b></span>
    </a>

    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav" title="Sair">
          <li>
            <a href="{{route('painel.index')}}">
              Sair <i class="fa fa-sign-out"></i>
            </a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header"></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Sócios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('partners.index')  }}"><i class="fa fa-circle-o"></i> Listagem</a></li>
            <li><a href="{{ route('partners.new')  }}"><i class="fa fa-circle-o"></i> Novo Sócio</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Empresas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('companies.index')  }}"><i class="fa fa-circle-o"></i> Listagem</a></li>
            <li class="active"><a href="{{ route('companies.new')  }}"><i class="fa fa-circle-o"></i> Nova Empresa</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Usuários</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('painel.index')  }}"><i class="fa fa-circle-o"></i> Listagem</a></li>
            <li class="active"><a href="{{ route('painel.index')  }}"><i class="fa fa-circle-o"></i> Novo Usuário</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Erro!</h4>
            {{ session('error') }}
        </div>
    @endif

    </section>

    <section class="content">
        @yield('content')
    </section>
  </div>

</div>

{{--plugins--}}
<script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>

<script src="{{asset('dist/js/jquery-ui.js')}}"></script>
<script src="{{asset('dist/js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte/app.min.js')}}"></script>

<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>



<script src="{{asset('js/scripts.js')}}"></script>

<script>
  //Date picker
  $(function () {

  });
</script>

</body>
</html>
